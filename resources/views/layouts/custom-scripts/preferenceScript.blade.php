<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        var preferenceCount = 1; // Initial preference count for each post

        // Handle the "Add Post" button click event
        $('.add-post-btn').on('click', function() {
            var section = $(this).data('section');
            var postText = '';
            var postId = '';

            // Set the post details based on the section clicked
            if (section === 'ab') {
                postText = 'AB (ARMED BRANCH)';
                postId = 1;
            } else if (section === 'ub') {
                postText = 'UB (UNARMED BRANCH)';
                postId = 2;
            } else if (section === 'constable') {
                postText = 'CONSTABLE';
                postId = 3;
            }

            // Create the HTML for the new post
            var newPostHtml = `
            <div class="mb-8 post-list-item" data-post-id="${postId}">
                <div class="lg:w-[60vw] grid grid-cols-12">
                    <div class="col-span-2 md:col-span-2 border">
                        <div class="h-full p-2 text-center">
                            ${preferenceCount} <!-- Displaying the preferenceCount -->
                        </div>
                    </div>
                    <div class="col-span-10 md:col-span-7 border">
                        <div class="h-full p-2">
                            ${postText}  <!-- Displaying the postText -->
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-3 border">
                        <div class="h-full p-2 text-center">
                            <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref">
                                <i class="bi bi-chevron-up"></i>
                            </button>
                            <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                            <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-400 text-red-500 updatePref">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;

            // Append the new post to the post list container
            $('#post-list-container').append(newPostHtml);

            // Increment the preference count
            preferenceCount++;

            // Submit the post to the backend for saving
            submitPostToDatabase(postId, preferenceCount -
                1); // Subtract 1 to use current count before increment

            // After adding the post, hide the "Add Post" button and show the "Post Added" button
            $(this).hide(); // Hide the "Add Post" button
            $(this).closest('.col-span-12').find('.post-added-btn')
                .show(); // Show the "Post Added" button
        });

        // Function to submit each post to the backend
        function submitPostToDatabase(postId, preference) {
            var postData = {
                _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                post_id: postId, // The ID of the post
                preference: preference // The preference number
            };

            // Send the data via AJAX to the backend
            $.ajax({
                url: '/preference', // Your backend route
                method: 'POST',
                contentType: 'application/json', // Set content type to JSON
                dataType: 'json', // Expect JSON response
                data: JSON.stringify(postData), // Send the data as JSON
                success: function(response) {
                    console.log('Post saved successfully', response);

                    // Show success message using SweetAlert
                    swal.fire({
                        title: 'Success!',
                        text: 'Your preference has been updated.',
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonColor: '#2DB325'
                    }).then(function() {
                        // Update the list of preferences with the new data returned from the backend
                        if (response.preferences) {
                            updatePreferencesList(response.preferences);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.log(xhr.responseText); // Log response text for more details

                    // Show error message using SweetAlert
                    swal.fire({
                        title: 'Oops!',
                        text: 'Something went wrong while saving your preference.',
                        icon: 'error',
                        confirmButtonClass: 'btn btn-danger',
                        confirmButtonColor: '##B32525'
                    });
                }
            });
        }


        // Function to update the preferences list after adding or updating a post
        function updatePreferencesList(preferences) {
            // Clear the current list of preferences
            $('#post-list-container').empty();

            // Loop through the updated preferences and append them to the list
            preferences.forEach(function(preference) {
                var postText = '';
                if (preference.post_id == 1) postText = 'AB (ARMED BRANCH)';
                else if (preference.post_id == 2) postText = 'UB (UNARMED BRANCH)';
                else postText = 'CONSTABLE';

                // Append the preference to the list
                $('#post-list-container').append(`
                <div class="mb-8 post-list-item" data-post-id="${preference.post_id}">
                    <div class="lg:w-[60vw] grid grid-cols-12">
                        <div class="col-span-2 md:col-span-2 border">
                            <div class="h-full p-2 text-center">
                                ${preference.preferences} <!-- Displaying the preference -->
                            </div>
                        </div>
                        <div class="col-span-10 md:col-span-7 border">
                            <div class="h-full p-2">
                                ${postText}
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-3 border">
                            <div class="h-full p-2 text-center">
                                <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref">
                                    <i class="bi bi-chevron-up"></i>
                                </button>
                                <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref">
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                                <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-400 text-red-500 updatePref">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            });
        }

        // Handle showing/hiding buttons based on if there are existing posts
        function togglePostButtons(sectionId) {
            var section = $(`#${sectionId}`);
            var addPostBtn = section.find('.add-post-btn');
            var postAddedBtn = section.find('.post-added-btn');

            // If the section has posts, hide "Add Post" button and show "Post Added" button
            if (section.find('.post-list-item').length > 0) {
                addPostBtn.hide(); // Hide the "Add Post" button
                postAddedBtn.show(); // Show the "Post Added" button
            } else {
                addPostBtn.show(); // Show the "Add Post" button
                postAddedBtn.hide(); // Hide the "Post Added" button
            }
        }
    });
</script>

<script>
    $(document).on('click', '.updatePref', function(e) {
        e.preventDefault();

        var elm = $(this);
        $('.pageloader').fadeIn();
        var prefId = $(this).attr('prefId');
        var type = $(this).attr('typeId');
        var actionUrl = "/update-preference/" + prefId + "/" + type;
        elm.attr('disabled', true);

        $.ajax({
            type: 'GET',
            url: actionUrl,
            success: function(data) {
                $('.pageloader').fadeOut();
                // Show a success message using SweetAlert
                swal.fire({
                    title: 'Success!',
                    text: 'Your preference has been updated.',
                    icon: 'success',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonColor: '#2DB325'
                }).then(function() {
                    window.location.reload(); // Reload the page after user confirms
                });
            },
            error: function(data) {
                $(".pageloader").fadeOut();
                elm.attr('disabled', false);
                var msg = ajaxErrorMsg(data); // Assuming this function generates an error message

                // Show an error message using SweetAlert
                swal.fire({
                    title: 'Sorry!',
                    html: msg,
                    icon: 'error',
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonColor: '##B32525'
                });
            },
        });
    });
</script>
