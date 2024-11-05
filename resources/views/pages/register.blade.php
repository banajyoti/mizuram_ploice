@include('layouts.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Your other scripts -->
</head>
<div class="grow p-4 grid grid-cols-5 gap-3">
    <div class="col-span-3 borde">
        <div class="h-full p-2 space-y-3">
            <div class=" text-center">
                <span class="text-xs poppins font-medium bg-yellow-400 px-2 py-1 rounded-lg">
                    Candidates are requested to go through the complete advertisement and read the complete instructions
                    before applying.
                    ( <a class="pl-1 text-[0.65rem] font-semibold text-blue-600 hover:text-blue-700" href="#"
                        target="_blank"><i class="bi bi-download text-[0.65rem] pr-1"></i>ADVERTISEMENT</a> )
                </span>
            </div>
            <p class="text-xl Nunito">Instructions</p>
            <div class="">
                <ol class="list-decimal list-inside text-sm space-y-4">
                    <li class="space-y-2">
                        <span class="font-medium pr-1">For Passport Size Photograph:</span>
                        <div class="ps-3">
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    Photograph must be in colour and must be in white background and must have been
                                    taken after <span class="font-semibold">1st january 2025.</span>
                                </li>
                                <li>
                                    The maximum file size should be 450 kb | <span class="font-semibold">Format: JPEG,
                                        JPG & PNG.</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="space-y-2">
                        <span class="font-medium pr-1">For Signature:</span>
                        <div class="ps-3">
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    Signature must be taken with a <span class="font-semibold">black</span> or <span
                                        class="font-semibold">dark blue</span> ink on a <span
                                        class="font-semibold">white paper</span>.
                                </li>
                                <li>
                                    The maximum file size should be 100 kb | <span class="font-semibold">Format: JPEG,
                                        JPG & PNG.</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="space-y-2">
                        <span class="font-medium pr-1">Documents to be uploaded:</span>
                        <div class="ps-3">
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    Certificate of proof of age. <span class="font-semibold">(Admit Card/ Certificate of
                                        H.S.L.C./ equivalent examination)
                                </li>
                                <li>
                                    Pass Certificate & Marksheet of all qualifications
                                </li>
                                <li>
                                    Employment Exchange registration number.
                                </li>
                                <li>
                                    Certificate of Caste from Competent Authority. <span class="font-semibold">NO CASTE
                                        CERTIFICATE ISSUED BY OTHER STATES WILL BE ACCEPTED</span>
                                </li>
                                <li>
                                    Certificate of NCC from Competent Authority (if applicable).
                                </li>
                                <li>
                                    Home Guards Training Certificate issued by Competent Authority (if applicable).
                                </li>
                                <li>
                                    In case of Ex-serviceman, he/ she must upload:
                                    <div class="ps-3">
                                        <ol class="list-decimal list-inside">
                                            <li>
                                                Copy of Discharged Book.
                                            </li>
                                            <li>
                                                Copy of Identity Card of Ex-Serviceman.
                                            </li>
                                        </ol>
                                    </div>
                                </li>
                                <li>
                                    Birth Certificate issued by the Competent Authority or Educational Qualification
                                    Certificate issued by the Competent Authority of the School/ Institution last
                                    studied by the candidates who have not appeared in HSLC/ Matriculation.
                                </li>
                                <li>
                                    Certificate of addition essential qualification /requirement as applicable.
                                </li>
                                <li>
                                    Certificate of other diploma qualification or Trade certificate /license required,
                                    as applicable.
                                </li>
                            </ul>
                        </div>
                    </li>
                </ol>
            </div>
            <p class="m-0 text-red-600 text-sm">Note: The maximum file size of the scanned document should be 200 kb |
                Format: PDF </p>
        </div>
    </div>
    <div class="col-span-2 borde border-green-500">
        <div class="h-full p-2 space-y-6">
            <div class="flex items-center justify-between">
                <p class="m-0 text-xl text-blue-500 Nunito">Registration form</p>
                <p class="m-0 text-xs text-green-500 font-medium flex items-center"><i
                        class="bi bi-circle-fill text-[0.45rem] pe-1"></i> Registration Online</p>
            </div>
            <p class="text-xs text-red-500 font-medium">
                Note: Candidates must register in the application portal once for all the advertisements. However, the
                candidature will be cancelled who generate multiple Recruitment IDs.
            </p>
            <p class="text-xs font-medium text-center">
                All<span class="px-1 text-red-500 text-black text-base">*</span>marked fields are mendatory.
            </p>
            <form id="registrationForm" method="POST">
                @csrf
                <div class="grid grid-cols-12 gap-x-4 gap-y-5">
                    <div class="col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="sal"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Salutation<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="sal" name="salutation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">Sri</option>
                                <option value="01">Smt.</option>
                                <option value="02">Mr.</option>
                                <option value="03">Mrs.</option>
                                <option value="04">Ms.</option>
                                <option value="05">Md.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="h-full flex flex-col">
                            <label for="first_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">First
                                Name<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="first_name" onkeydown="return /[a-z]/i.test(event.key)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="first_name" value="" placeholder="First Name" required />
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="middle_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Middle
                                Name<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="middle_name" onkeydown="return /[a-z]/i.test(event.key)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="middle_name" value="" placeholder="Middle Name" required />
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="last_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Last
                                Name<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="last_name" onkeydown="return /[a-z]/i.test(event.key)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="last_name" value="" placeholder="Last Name" required />
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="h-full flex flex-col">
                            <label for="father_name"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Father
                                Name<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="father_name" onkeydown="return /[a-z]/i.test(event.key)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="father_name" value="" placeholder="Father Name" required />
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="h-full flex flex-col">
                            <label for="mother_name"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Mother Name<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="mother_name" onkeydown="return /[a-z]/i.test(event.key)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="mother_name" value="" placeholder="Mother Name" required />
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="high_qual"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Highest Qualification<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="high_qual" name="high_qual"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">HSLC</option>
                                <option value="01">HS</option>
                                <option value="02">Diploma</option>
                                <option value="03">Graduation</option>
                                <option value="04">Post Graduation</option>
                                <option value="05">Phd.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="gender"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Gender<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="gender" name="gender_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">Male</option>
                                <option value="01">Female</option>
                                <option value="02">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="cast_cat" class="block mb-auto px-1 text-sm font-medium text-gray-600">Cast/
                                Category<span class="ps-1 text-red-500">*</span></label>
                            <select id="cast_cat" name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">General</option>
                                <option value="01">OBC</option>
                                <option value="02">MOBC</option>
                                <option value="00">SC</option>
                                <option value="01">ST (P)</option>
                                <option value="02">ST (H)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="dob" class="block mb-auto px-1 text-sm font-medium text-gray-600">Date of
                                Birth<span class="ps-1 text-red-500">*</span></label>
                            <input type="date" id="dob" onchange="myFunction()"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 datepicker"
                                name="dob" value="" placeholder="Date of Birth" required />
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="h-full flex flex-col">
                            <label for="dob" class="block mb-aut px-1 text-sm font-medium text-gray-600">Age as
                                on 01-01-2025<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="agee"
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="age" value="24 Yr, 11 Mnt, 29 D" placeholder="" readonly />
                            <input type="hidden" maxlength="2" size="2" id="date2"
                                placeholder="Date" />
                            <input type="hidden" maxlength="2" size="2" id="month2"
                                placeholder="Month" />
                            <input type="hidden" maxlength="4" size="4" id="year2"
                                placeholder="Year" />
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="h-full flex flex-col">
                            <label for="email"
                                class="block mb-aut px-1 text-sm font-medium text-gray-600">Email<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="email" value="" placeholder="Email Address" required />
                        </div>
                    </div>
                    <div class="col-span-4">
                        <!-- Div-1 -->
                        {{-- <div class="h-ful flex flex-col phone">
                            <div class="flex items-center justify-between">
                                <label for="p_number" class="block mb-auto px-1 text-sm font-medium text-gray-600">
                                    <i class="bi bi-check-circle-fill text-[0.70rem] pr-1"></i>
                                    Phone Number
                                    <span class="ps-1 text-red-500">*</span>
                                </label>
                                <button class="pr-2 text-xs flex items-center hover:text-red-500 hidden"
                                    id="change_p_number"><i
                                        class="bi bi-arrow-repeat text-sm pr-1"></i>change</button>
                            </div>
                            <div class="flex gap-2">
                                <input type="text" id="p_number"
                                    class="grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    name="phone" value="" placeholder="Phone Number" required />
                                <button type="button"
                                    class="text-xs text-white hover:text-green-100 bg-green-600 hover:bg-green-700 rounded-lg p-2 whitespace-nowrap"
                                    id="send_OTP">Send OTP</button>
                            </div>
                        </div> --}}
                        <!-- Div-2 -->
                        {{-- <div class="h-ful flex flex-col verify_phone hidden">
                            <label for="email"
                                class="block px-1 text-sm font-medium text-gray-600 flex items-center">
                                <button type="button"
                                    class="rounded-md px-1 mr-1 bg-gray-200 hover:bg-gray-300 text-blue-600"
                                    id="back_to_phone"><i
                                        class="bi bi-chevron-double-left text-[0.65rem]"></i></button>
                                Enter OTP
                                <span class="ps-1 text-red-500">*</span>
                            </label>
                            <div class="flex gap-1 mt-auto">
                                <input type="text" id="otp"
                                    class="grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 text-center"
                                    name="otp" value="" placeholder="X X X X" required />
                                <button type="button"
                                    class="text-xs text-white hover:text-green-100 bg-green-600 hover:bg-green-700 rounded-lg px-2 py-0.5"
                                    id="verified">Verify</button>
                                <button type="button"
                                    class="text-xs text-white hover:text-yellow-100 bg-yellow-500 hover:bg-yellow-600 rounded-lg px-2 py-0.5">Resend</button>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-span-4">
                        <div class="h-full flex flex-col">
                            <label for="ex-ser" class="block mb-auto px-1 text-sm font-medium text-gray-600">Are you
                                an Ex-Serviceman?<span class="ps-1 text-red-500">*</span></label>
                            <select id="ex_ser"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">YES</option>
                                <option value="01">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-8">
                        <div class="h-full flex flex-col">
                            <label for="X-inMizo" class="block mb-auto px-1 text-sm font-medium text-gray-600">Have
                                you completed your Class-X Standard (HSLC) in Mizoram?<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="X_inMizo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option selected>select</option>
                                <option value="00">YES</option>
                                <option value="01">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inline-block flex items-start">
                    <input id="reg_declaration" type="checkbox" value=""
                        class="mt-0.5 w-5 h-5 rounded-md text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label for="reg_declaration" class="ms-2 text-sm font text-gray-900 ">Please check and confirm
                        your details before registration. Data once submitted cannot be changed.<span
                            class="ps-1 text-red-500">*</span></label>
                </div>
                <div class="flex items-center justify-between">
                    <a type="button"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        href="notification-login.php">
                        Back
                    </a>
                    <button type="button" data-modal-target="save-reg-form" data-modal-toggle="save-reg-form"
                        id="submitButton"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        href="">
                        Register Now!
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('layouts.modals')
<script>
    $(document).ready(function() {
        // Handle form submission
        $('#submitButton').on('click', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Check if OTP is verified
            if (!document.getElementById('submitButton').classList.contains('hidden')) {
                // Collect form data
                var formData = $('#registrationForm').serialize();

                // Send AJAX request
                $.ajax({
                    url: '{{ route('register') }}', // Your route
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success
                        $('#registrationId').text(response.registration_number);
                        // $('#reg-form-saved').removeClass('hidden');
                        $('#responseMessage').html('<p class="text-green-500">' + response
                            .message + '</p>');
                    },
                    error: function(xhr) {
                        let errorMessage = '<p class="text-red-500">An error occurred:</p>';

                        // Check if the response is in JSON format
                        try {
                            const jsonResponse = JSON.parse(xhr.responseText);
                            if (jsonResponse.errors) {
                                errorMessage += '<ul>';
                                $.each(jsonResponse.errors, function(key, value) {
                                    errorMessage += '<li>' + value[0] +
                                        '</li>'; // Show first error
                                });
                                errorMessage += '</ul>';
                            } else {
                                errorMessage += '<p>' + jsonResponse.message ||
                                    'An error occurred' + '</p>';
                            }
                        } catch (e) {
                            // If JSON parsing fails, fall back to responseText
                            errorMessage += '<p>' + xhr.responseText +
                                '</p>'; // Show raw response
                        }

                        $('#responseMessage').html(errorMessage);
                    }
                });

            } else {
                alert('Please verify your OTP before submitting the form.');
            }
        });

        // Handle sending OTP
        document.getElementById('send_OTP').addEventListener('click', function() {
            const phoneNumber = document.getElementById('p_number').value;

            if (!phoneNumber) {
                alert('Please enter your phone number.');
                return;
            }

            // Create FormData object
            const formData = new FormData();
            formData.append('phone', phoneNumber);

            fetch('/send-otp', {
                    method: 'POST',
                    dataType: 'text',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('OTP sent successfully!');
                        document.querySelector('.verify_phone').classList.remove(
                            'hidden'); // Show OTP input
                    } else {
                        alert('Error sending OTP. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while sending the OTP.');
                });
        });

        // Handle OTP verification
        document.getElementById('verified').addEventListener('click', function() {
            const otp = document.getElementById('otp').value;

            if (!otp) {
                alert('Please enter the OTP.');
                return;
            }

            // Create FormData object
            const formData = new FormData();
            formData.append('otp', otp);

            fetch('/verify-otp', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('OTP verified successfully!');
                        document.querySelector('.verify_phone').classList.add('hidden');

                        // Show the submit button
                        document.getElementById('submitButton').classList.remove('hidden');
                    } else {
                        alert('Invalid OTP. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while verifying the OTP.');
                });
        });
    });
</script>
<script>
    document.getElementById('reg_declaration').addEventListener('change', function() {
        const submitButton = document.getElementById('submitButton');

        if (this.checked) {
            submitButton.classList.remove('hidden'); // Show the button
        } else {
            submitButton.classList.add('hidden'); // Hide the button
        }
    });

    /** jQUERY for calculate age **/
    function myFunction() {
        var dob = document.getElementById("dob").value;

        var form = document.getElementById("form"),
            date = document.getElementById("date2"),
            month = document.getElementById("month2"),
            year = document.getElementById("year2"),

            age = document.getElementById("age"),
            days = document.getElementById("days"),
            mons = document.getElementById("months"),
            ddd = "2024/07/01";
        today = new Date(ddd);
        console.log(today);

        year.value = today.getFullYear();
        month.value = today.getMonth() + 1;
        date.value = today.getDate();

        var arr = dob.split("-");
        var by = arr[0];
        var bm = arr[1];
        var bd = arr[2];

        var ty = Number.parseFloat(year.value),
            tm = Number.parseFloat(month.value),
            td = Number.parseFloat(date.value);
        console.log(ty);

        if (td < bd) {
            days = (td - bd + 30);
            tm = tm - 1;
        } else {
            days = (td - bd);
        }

        if (tm < bm) {
            months = (tm - bm + 12);
            ty = ty - 1;
        } else {
            months = (tm - bm);
        }
        agee.value = (ty - by) + ' years ' + months + ' months ' + days + ' days';
    }
    $('.datepicker').datepicker();
</script>

<script>
    $('input[type=text], textarea').keyup(function() {
        $(this).val(function() {
            return this.value.toUpperCase();
        })
    });

    /** jQUERY for email validation **/
    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };
</script>
