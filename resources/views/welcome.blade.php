<script>
    $(document).ready(function() {
        // Handle the "Add Post" button click for each section (AB, UB, CONSTABLE)
        $('.add-post-btn').on('click', function() {
            // Get the section (post type) being clicked
            var section = $(this).data('section');
            var postText = "";

            // Set post name based on section
            if (section === 'ab') {
                postText = 'Mizoram Police Armed Branch (AB)';
            } else if (section === 'ub') {
                postText = 'Mizoram Police Unarmed Branch (UB)';
            } else if (section === 'constable') {
                postText = 'Mizoram Police Constable';
            }

            // Find the last index of added posts for this section to determine the new post number
            var postCount = $(`#${section}-section .post-list .grid`).length +
            1; // Increment post count
            var formattedPostCount = String(postCount).padStart(2,
            '0'); // Format number to two digits (e.g., 01, 02)

            // Create a new post HTML structure for this section
            var newPostHtml = `
            <div class="lg:w-[60vw] grid grid-cols-12 post-list">
                <div class="col-span-2 md:col-span-2 border">
                    <div class="h-full p-2 text-center">
                        ${formattedPostCount}
                    </div>
                </div>
                <div class="col-span-10 md:col-span-7 border">
                    <div class="h-full p-2">
                        ${postText}
                    </div>
                </div>
                <div class="col-span-12 md:col-span-3 border">
                    <div class="h-full p-2 text-center">
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white">
                            <i class="bi bi-chevron-up"></i>
                        </button>
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-400 text-red-500">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;

            // Append the new post to the specific section's post list
            $(`#${section}-section .post-list`).append(newPostHtml);

            // Disable the "Add Post" button and enable the "Post Added" button for that section
            $(this).prop('disabled', true); // Disable "Add Post" button
            $(this).next('.post-added-btn').prop('disabled', false); // Enable "Post Added" button
        });

        // Handle the "Delete" button click to remove a post
        $(document).on('click', '.bi-trash', function() {
            $(this).closest('.grid').remove(); // Remove the post's entire grid div
        });
    });
</script>
