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
                                data-section="ab">
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button" class="p-1 px-2 text-green-600 text-xs w-full pe-none" disabled>
                                <i class="bi bi-check-all pr-1"></i>POST ADDED
                            </button>
                        </div>
                    </div>
                </div>
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
                                data-section="ub">
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button" class="p-1 px-2 text-green-600 text-xs w-full pe-none" disabled>
                                <i class="bi bi-check-all pr-1"></i>POST ADDED
                            </button>
                        </div>
                    </div>
                </div>
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
                                data-section="constable">
                                <i class="bi bi-plus-lg pr-1"></i>ADD POST
                            </button>
                            <button type="button" class="p-1 px-2 text-green-600 text-xs w-full pe-none" disabled>
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
            <div class="mb-8" id="post-list">
            </div>
        </div>
    </div>
</div>

<div class="mt-auto px-4 flex items-center">
    <a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito" href="questionaries.php"><i
            class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
    <a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito"
        href="document.php"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>

@include('layouts.footer')
<script>
   $(document).ready(function() {
    var postCount = 1;

    // Handle the "Add Post" button click event
    $('.add-post-btn').on('click', function() {
        // Get the post name based on the section
        var section = $(this).data('section');
        var postText = '';
        var postId = ''; // Assume you have post IDs or you can map these later

        if (section === 'ab') {
            postText = 'AB (ARMED BRANCH)';
            postId = 1; // Set the appropriate ID based on your data (e.g., from database)
        } else if (section === 'ub') {
            postText = 'UB (UNARMED BRANCH)';
            postId = 2; // Set the appropriate ID
        } else if (section === 'constable') {
            postText = 'CONSTABLE';
            postId = 3; // Set the appropriate ID
        }

        // Create a new post structure
        var newPostHtml = `
        <div class="lg:w-[60vw] grid grid-cols-12 post-list-item" data-post-id="${postId}" data-preference="${postCount}">
            <div class="col-span-2 md:col-span-2 border">
                <div class="h-full p-2 text-center">
                    ${String(postCount).padStart(2, '0')}  <!-- Format the number with leading zero -->
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

        // Append the new post to the post list
        $('#post-list').append(newPostHtml);

        // Increment the post counter
        postCount++;

        // Disable the "Add Post" button and enable the "Post Added" button
        $(this).prop('disabled', true); // Disable "Add Post"
        $(this).next('.post-added-btn').prop('disabled', false); // Enable "Post Added"

        // After adding, submit the posts to the backend
        submitPostsToDatabase();
    });

    // Function to submit the posts to the backend
    function submitPostsToDatabase() {
        var postsData = [];

        // Loop through each post and gather necessary data
        $('.post-list-item').each(function() {
            var postId = $(this).data('post-id');
            var preference = $(this).data('preference'); // Get the preference from data attribute

            postsData.push({
                post_id: postId,
                preference: preference
            });
        });

        // Send the data via AJAX to the backend
        $.ajax({
            url: '/preference', // Update with your actual URL
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                posts: postsData // Send the posts data to the server
            },
            success: function(response) {
                if (response.success) {
                    console.log('Posts saved successfully.');
                } else {
                    console.log('Error saving posts.');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' - ' + error);
            }
        });
    }
});

</script>
