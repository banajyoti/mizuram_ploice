@include('layouts.header')

<head>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@include('layouts.nav-2')
<div class="px-4 grow flex flex-col">
    <div class="flex gap-3">
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="questionaries.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR">Q</span></div>
                    <span class="hidden lg:inline-block">Questionaries</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a
                    class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-arrow-down-up"></i></span></div>
                    <span class="hidden lg:inline-block">Post Preferences</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-green-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="profile.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-person"></i></span></div>
                    <span class="hidden lg:inline-block">Profile</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="document.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-file-earmark-pdf"></i></span></div>
                    <span class="hidden lg:inline-block">Document's</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="payment.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR">₹</span></div>
                    <span class="hidden lg:inline-block">Payment</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="download.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-download"></i></span></div>
                    <span class="hidden lg:inline-block">Download</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="p-4 grow border border-gray-300 rounded-lg space-y-8">
        <p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate are
            requested to slect the post as per their preference</p>
        <div class="flex flex-col items-center justify-center space-y-">
            <div class="mb-8">
                <p class="mb-2 text-gray-600">Select post's manually that you want to apply for</p>
                <!-- AB (ARMED BRANCH) Section -->
                <div class="mb-2 md:mb-0 lg:w-[40vw] grid grid-cols-12" id="ab-section">
                    <div class="col-span-12 md:col-span-9 border">
                        <div class="h-full p-2 flex justify-center md:justify-start items-center">
                            AB (ARMED BRANCH)
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-3 border">
                        <div class="h-full p-2 text-center">
                            <button type="button"
                                class="p-1 px-2 bg-gray-200 hover:bg-blue-600 hover:text-white text-xs w-full add-post-btn"
                                data-section="ab" @if ($postStatuses['ab']) style="display: none;" @endif>
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button" class="p-1 px-2 text-green-600 text-xs w-full pe-none post-added-btn"
                                @if (!$postStatuses['ab']) style="display: none;" @endif>
                                <i class="bi bi-check-all pr-1"></i>POST ADDED
                            </button>
                        </div>
                    </div>
                </div>

                <!-- UB (UNARMED BRANCH) Section -->
                <div class="mb-2 md:mb-0 lg:w-[40vw] grid grid-cols-12" id="ub-section">
                    <div class="col-span-12 md:col-span-9 border">
                        <div class="h-full p-2 flex justify-center md:justify-start items-center">
                            UB (UNARMED BRANCH)
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-3 border">
                        <div class="h-full p-2 text-center">
                            <button type="button"
                                class="p-1 px-2 bg-gray-200 hover:bg-blue-600 hover:text-white text-xs w-full add-post-btn"
                                data-section="ub" @if ($postStatuses['ub']) style="display: none;" @endif>
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button" class="p-1 px-2 text-green-600 text-xs w-full pe-none post-added-btn"
                                @if (!$postStatuses['ub']) style="display: none;" @endif>
                                <i class="bi bi-check-all pr-1"></i>POST ADDED
                            </button>
                        </div>
                    </div>
                </div>

                <!-- CONSTABLE Section -->
                <div class="mb-2 md:mb-0 lg:w-[40vw] grid grid-cols-12" id="constable-section">
                    <div class="col-span-12 md:col-span-9 border">
                        <div class="h-full p-2 flex justify-center md:justify-start items-center">
                            CONSTABLE
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-3 border">
                        <div class="h-full p-2 text-center">
                            <button type="button"
                                class="p-1 px-2 bg-gray-200 hover:bg-blue-600 hover:text-white text-xs w-full add-post-btn"
                                data-section="constable"
                                @if ($postStatuses['constable']) style="display: none;" @endif>
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button"
                                class="p-1 px-2 text-green-600 text-xs w-full pe-none post-added-btn"
                                @if (!$postStatuses['constable']) style="display: none;" @endif>
                                <i class="bi bi-check-all pr-1"></i>POST ADDED
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <p class="mb-4 text-gray-600 border-b">List of post's with preference order</p>
            <div class="lg:w-[60vw] hidden md:grid grid-cols-12">
                <div class="col-span-2 border">
                    <div class="h-full p-2 text-sm lg:text-md text-center">
                        Preference Number
                    </div>
                </div>
                <div class="col-span-7 border">
                    <div class="h-full p-2 text-sm lg:text-md">
                        Post Name
                    </div>
                </div>
                <div class="col-span-3 border">
                    <div class="h-full p-2 text-sm lg:text-md text-center">
                        #
                    </div>
                </div>
            </div>
            <div id="post-list-container">
                @foreach ($preferences as $preference)
                    <div class="mb-8 post-list-item" data-post-id="{{ $preference->post_id }}">
                        <div class="lg:w-[60vw] grid grid-cols-12">
                            <div class="col-span-2 md:col-span-2 border">
                                <div class="h-full p-2 text-center">
                                    {{ $preference->preferences }}
                                </div>
                            </div>
                            <div class="col-span-10 md:col-span-7 border">
                                <div class="h-full p-2">
                                    @if ($preference->post_id == 1)
                                        AB (ARMED BRANCH)
                                    @elseif ($preference->post_id == 2)
                                        UB (UNARMED BRANCH)
                                    @else
                                        CONSTABLE
                                    @endif
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-3 border">
                                <div class="h-full p-2 text-center">
                                    @if ($preference->preference == 1)
                                        <button type="button"
                                            class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref"
                                            disabled prefId="{{ $preference->id }}">
                                            <i class="bi bi-chevron-up"></i>
                                        </button>
                                    @else
                                        <button type="button"
                                            class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref"
                                            prefId="{{ $preference->id }}" typeId="1">
                                            <i class="bi bi-chevron-up"></i>
                                        </button>
                                    @endif
                                    @if ($preference->preference == $preferences->count())
                                        <button type="button"
                                            class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref"
                                            disabled prefId="{{ $preference->id }}">
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                    @else
                                        <button type="button"
                                            class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white updatePref"
                                            prefId="{{ $preference->id }}" typeId="2">
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                    @endif
                                    <button type="button"
                                        class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-400 text-red-500 updatePref"
                                        prefId="{{ $preference->id }}" typeId="3"> <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="mt-auto px-4 flex items-center">
    <a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito" href="questionaries.php"><i
            class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
    <a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito {{ !empty($check) ? '' : 'hidden' }}"
        href="{{ route('profile') }}"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>

@include('layouts.footer')
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

                    // Now, update the list of preferences with the new data returned from the backend
                    if (response.preferences) {
                        updatePreferencesList(response.preferences);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.log(xhr.responseText); // Log response text for more details
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
                //elm.attr('disabled', false);
                window.location.reload();
                //  elm.attr('disabled', false);
                // swal.fire({
                //     title: 'Success!',
                //     text: 'Your preference has been updated.',
                //     icon: 'success',
                //     confirmButtonClass: 'btn btn-success'
                // });
                //  window.location.reload();
            },
            error: function(data) {
                $(".pageloader").fadeOut();
                elm.attr('disabled', false);
                var msg = ajaxErrorMsg(data);
                swal.fire({
                    "title": 'Sorry!',
                    "html": msg,
                    "type": "error",
                    "confirmButtonClass": "btn btn-danger"
                });

            },
        });
    });
</script>
