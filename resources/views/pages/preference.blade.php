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
                    href="{{ route('questionaries') }}">
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
                    href="#">
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
                    href="#">
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
                    href="#">
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
                    href="#">
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
            requested to select the post as per their preference</p>
        <div class="flex flex-col items-center justify-center space-y-4">
            <!-- Section for selecting posts -->
            <div class="lg:w-[60vw]">
                <p class="mb-2 text-gray-600 border-b">Select post's that you want to apply for</p>
                <div class="flex items-center gap-4">
                    <div class="flex items-center border p-2 rounded-lg">
                        <input id="post-1" type="checkbox" value="AB (ARMED BRANCH)"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                        <label for="post-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">AB
                            (ARMED BRANCH)
                        </label>
                    </div>
                    <div class="flex items-center border p-2 rounded-lg">
                        <input id="post-2" type="checkbox" value="UB (UNARMED BRANCH)"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="post-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">UB
                            (UNARMED BRANCH)
                        </label>
                    </div>
                    <div class="flex items-center border p-2 rounded-lg">
                        <input id="post-3" type="checkbox" value="CONSTABLE"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="post-3"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CONSTABLE
                        </label>
                    </div>
                </div>
            </div>

            <!-- List of posts with preference order (Data Table) -->
            <p class="text-gray-600 border-b">List of post's with preference order</p>
            <div class="lg:w-[60vw] hidden md:grid grid-cols-12" id="post-preference-table">
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
                <!-- Dynamically render preferences from the database -->
                @foreach ($preferences as $preference)
                    <div class="col-span-2 border post-row">
                        <div class="h-full p-2 text-sm lg:text-md text-center">
                            {{ $preference->preferences }}
                        </div>
                    </div>
                    <div class="col-span-7 border post-row">
                        <div class="h-full p-2 text-sm lg:text-md">
                            {{ $preference->post_id }} <!-- Assuming you have a relationship with Post model -->
                        </div>
                    </div>
                    <div class="col-span-3 border post-row">
                        <div class="h-full p-2 text-sm lg:text-md text-center">
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
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="mt-auto px-4 flex items-center">
    <a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito"
        href="{{ route('questionaries') }}"><i class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
    <a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito {{ !empty($preference) ? '' : 'hidden' }}"
        href="{{ route('profile') }}"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>
@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        // Event listener for checkbox selection
        $('input[type="checkbox"]').change(function() {
            updatePostPreferenceTable();
            handlePostSelection(); // Handle data submission to the server
        });

        function updatePostPreferenceTable() {
            // Empty the table before updating it
            $('#post-preference-table').find('.post-row').remove();

            // Loop through each checked checkbox
            $('input[type="checkbox"]:checked').each(function(index) {
                const postName = $(this).val();
                const preferenceNumber = index + 1;

                // Append a new row for each selected checkbox
                $('#post-preference-table').append(`
                <div class="col-span-2 border post-row">
                    <div class="h-full p-2 text-sm lg:text-md text-center">
                        ${preferenceNumber}
                    </div>
                </div>
                <div class="col-span-7 border post-row">
                    <div class="h-full p-2 text-sm lg:text-md">
                        ${postName}
                    </div>
                </div>
                <div class="col-span-3 border post-row">
                    <div class="h-full p-2 text-sm lg:text-md text-center">
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white">
                            <i class="bi bi-chevron-up"></i>
                        </button>
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-600 hover:text-white">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <button type="button" class="p-1 px-2 rounded bg-gray-200 hover:bg-gray-400 text-red-500 remove-post-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            `);
            });
        }

        // Function to handle checkbox selection and send data to the server
        function handlePostSelection() {
            var selectedPosts = [];
            $('input[type="checkbox"]:checked').each(function() {
                selectedPosts.push($(this).val());
            });

            $.ajax({
                url: '/preference', // Adjust with your actual server endpoint
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    posts: selectedPosts, // Array of selected post names
                },
                success: function(response) {
                    if (response.success) {
                        console.log('Post preferences saved successfully.');
                    } else {
                        console.log('Error saving post preferences.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
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
                elm.attr('disabled', false);
                swal.fire({
                    title: 'Success!',
                    text: 'Your preference has been updated.',
                    icon: 'success',
                    confirmButtonClass: 'btn btn-success'
                });
                window.location.reload();
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
<script>
    $(document).ready(function() {
        // On page load, check localStorage to disable checkboxes if needed
        ['post-1', 'post-2', 'post-3'].forEach(function(id) {
            if (localStorage.getItem(id) === 'checked') {
                $("#" + id).prop('disabled', true);
                $("#" + id).prop('checked', true);
                $("#" + id).next('label').css('color', 'gray').css('pointer-events', 'none');
            } else {
                $("#" + id).prop('disabled', false);
                $("#" + id).prop('checked', false);
                $("#" + id).next('label').css('color', '').css('pointer-events', 'auto');
            }
        });

        // When a checkbox is clicked, toggle its state and save/remove from localStorage
        $('input[type="checkbox"]').on('change', function() {
            var checkbox = $(this);
            var id = checkbox.attr('id');
            console.log('Checkbox ID:', id);
            console.log('Checkbox checked:', checkbox.prop('checked'));

            if (checkbox.prop('checked')) {
                // Save the state in localStorage
                localStorage.setItem(id, 'checked');
                console.log('Saved in localStorage:', id);

                // Disable the checkbox and style it
                checkbox.prop('disabled', true);
                checkbox.next('label').css('color', 'gray').css('pointer-events', 'none');
            } else {
                // Remove the state from localStorage when unchecked
                localStorage.removeItem(id);
                console.log('Removed from localStorage:', id);

                // Enable the checkbox and reset the label styling
                checkbox.prop('disabled', false);
                checkbox.next('label').css('color', '').css('pointer-events', 'auto');
            }
        });
    });
</script>
