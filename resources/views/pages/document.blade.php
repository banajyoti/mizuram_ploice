@include('layouts.header')

<head>
    <!-- Include SweetAlert2 -->
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
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="preference.php">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-arrow-down-up"></i></span></div>
                    <span class="hidden lg:inline-block">Post Preferences</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
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
                <a
                    class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-file-earmark-pdf"></i></span></div>
                    <span class="hidden lg:inline-block">Document's</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-green-600"></div>
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



    <div class="p-1 md:p-4 grow border border-gray-300 rounded-lg space-y-8">
        <p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate need to
            upload all the mandatory <span class="text-red-600">*</span> documents.</p>
        <form id="document-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap justify-center gap-5">
                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">01.</span>
                        <p class="text-xs">Passport size photo</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="pasport_photo"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PNG, JPG, JPEG <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="pasport_photo" type="file" class="hidden" name="photo" accept="image/*" />
                        </label>
                    </div>

                    <!-- View Document Link (Initially hidden) -->
                    <a id="view-document-link"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center mt-4 cursor-pointer"
                        href="#">View Document</a>

                    <!-- Image Preview (Initially hidden) -->
                    <img id="photo-preview" src="" alt="Image Preview"
                        class="hidden w-32 h-32 object-cover rounded-md mt-4" />
                </div>


                <div class="p-2 space-y-2">
                    <!-- Field 02: Signature -->
                    <div class="flex items-center">
                        <span class="text-sm pr-1">02.</span>
                        <p class="text-xs">Signature</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="signature"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">JPG, PNG <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="signature" type="file" class="hidden" name="signature" />
                        </label>
                    </div>
                    <a id="signature_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>

                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">03.</span>
                        <p class="text-xs">Age proof Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="age_proof"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="age_proof" type="file" class="hidden" name="age_prof_cert" />
                        </label>
                    </div>
                    <a id="age_proof_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>

                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">04.</span>
                        <p class="text-xs">Class X Marksheet</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="x_marksheet"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="x_marksheet" type="file" class="hidden" name="class_x_cert" />
                        </label>
                    </div>
                    <a id="x_marksheet_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">05.</span>
                        <p class="text-xs">Mizo Language Proficiency Cert.</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="mizo_lang_prof"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="mizo_lang_prof" type="file" class="hidden" name="mizu_lang_cert" />
                        </label>
                    </div>
                    <a id="mizo_lang_prof_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">06.</span>
                        <p class="text-xs">Homeguard Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="homeguard"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="homeguard" type="file" class="hidden" name="homeguard_cert" />
                        </label>
                    </div>
                    <a id="homeguard_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">07.</span>
                        <p class="text-xs">Cast Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="cast_cert"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="cast_cert" type="file" class="hidden" name="caste_cert" />
                        </label>
                    </div>
                    <a id="cast_cert_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">08.</span>
                        <p class="text-xs">NCC Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="ncc"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="ncc" type="file" class="hidden" name="ncc_cert" />
                        </label>
                    </div>
                    <a id="ncc_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">09.</span>
                        <p class="text-xs">Computer Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="computer_cert"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="computer_cert" type="file" class="hidden" name="comp_cert" />
                        </label>
                    </div>
                    <a id="computer_cert_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>


                <div class="p-2 space-y-2">
                    <div class="flex items-center">
                        <span class="text-sm pr-1">10.</span>
                        <p class="text-xs">Mechanic Experience Certificate</p>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="mechanic_cert"
                            class="flex flex-col items-center justify-center h-28 md:h-54 w-32 md:w-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 p-2">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-xl md:text-3xl text-gray-500"></i>
                                <p class="mb-2 text-[0.65rem] md:text-sm text-gray-500 text-center"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-[0.65rem] md:text-xs text-gray-500 text-center">PDF <br
                                        class="block md:hidden">(MAX. SIZE 200kb)</p>
                            </div>
                            <input id="mechanic_cert" type="file" class="hidden" name="mechanic_ex_cert" />
                        </label>
                    </div>
                    <a id="mechanic_cert_view"
                        class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center"
                        href="#" target="_blank">View Document</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="mt-auto px-4 flex items-center">
    <a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito"
        href="{{ route('profile') }}"><i class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
    <a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito"
        href="javascript:void(0);" id="save-proceed-btn">
        <i class="bi bi-check-all pr-1"></i>Save & Proceed
    </a>
</div>

@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('pasport_photo').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Get the selected file
        var previewImage = document.getElementById('photo-preview'); // Get the preview image element
        var viewDocumentLink = document.getElementById('view-document-link'); // Get the View Document link
        var maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        // Check if a file was selected
        if (file) {
            // Check if the file is an image
            if (file.type.startsWith('image/')) {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        // Update the image preview source
                        previewImage.src = e.target.result;

                        // Show the "View Document" link
                        viewDocumentLink.classList.remove('hidden');
                    };

                    // Read the file as a data URL (base64-encoded string)
                    reader.readAsDataURL(file);
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert('File size is too large. Please select a file smaller than 200 KB.');
                    previewImage.classList.add('hidden'); // Hide the preview image
                    viewDocumentLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not an image, hide the preview and alert the user
                previewImage.classList.add('hidden');
                viewDocumentLink.classList.add('hidden');
                alert('Please select a valid image file.');
            }
        }
    });

    // Handle click on the "View Document" link
    document.getElementById('view-document-link').addEventListener('click', function(e) {
        // Prevent default link behavior
        e.preventDefault();

        // Get the image preview element
        var previewImage = document.getElementById('photo-preview');

        // Check if the image has been selected and has a source
        if (previewImage.src) {
            // Open the image in a new tab
            window.open(previewImage.src, '_blank');
        } else {
            alert('No image selected!');
        }
    });

    // Add event listener for the Signature input
    document.getElementById('signature').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('signature_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is an image (JPG, PNG, GIF, etc.)
            if (file.type.startsWith('image/')) {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the image as a data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not an image, show an alert
                alert("Please upload a valid image file (JPG, PNG, GIF).");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });


    // Add event listener for the Age Proof Certificate input
    document.getElementById('age_proof').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('age_proof_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });

    // Add event listener for the Class X Marksheet input
    document.getElementById('x_marksheet').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('x_marksheet_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });

    // Add event listener for the Mizo Language Proficiency Cert input
    document.getElementById('mizo_lang_prof').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('mizo_lang_prof_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });


    // Add event listener for the Homeguard Certificate input
    document.getElementById('homeguard').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('homeguard_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });


    // Add event listener for the Caste Certificate input
    document.getElementById('cast_cert').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('cast_cert_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });


    // Add event listener for the NCC Certificate input
    document.getElementById('ncc').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('ncc_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });

    // Add event listener for the Computer Certificate input
    document.getElementById('computer_cert').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('computer_cert_view');
        let maxSize = 200 * 1024; // Maximum file size: 200 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 200 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 200 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });


    // Add event listener for the Mechanic Experience Certificate input
    document.getElementById('mechanic_cert').addEventListener('change', function(e) {
        let file = e.target.files[0];
        let fileLink = document.getElementById('mechanic_cert_view');
        let maxSize = 200 * 1024; // Maximum file size: 20 KB (in bytes)

        if (file) {
            // Check if the file is a PDF
            if (file.type === 'application/pdf') {
                // Check if the file size is less than or equal to 20 KB
                if (file.size <= maxSize) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        let fileUrl = reader.result;
                        // Update the "View Document" link to point to the file URL
                        fileLink.href = fileUrl;
                        // Show the "View Document" link
                        fileLink.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file); // Read the PDF as a Data URL
                } else {
                    // If the file size is larger than 20 KB, show an alert
                    alert("File size is too large. Please select a file smaller than 200 KB.");
                    fileLink.classList.add('hidden'); // Hide the View Document link
                }
            } else {
                // If the file is not a PDF, show an alert
                alert("Please upload a valid PDF document.");
                fileLink.classList.add('hidden'); // Hide the View Document link
            }
        } else {
            // If no file is selected, hide the View Document link
            fileLink.classList.add('hidden');
        }
    });

    $(document).ready(function() {
        $('#save-proceed-btn').click(function(e) {
            e.preventDefault();
            $('#document-form').submit();
        });

        $('#document-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: '{{ route('document') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Success!",
                        text: response
                            .message,
                        icon: "success",
                        button: "OK",
                        confirmButtonColor: '#2DB325',
                    }).then(() => {
                        window.location.href =
                            '{{ route('getPayment') }}';
                    });
                },
                error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';

                    for (var field in errors) {
                        if (Array.isArray(errors[field])) {
                            errorMessage += errors[field].join(', ') +
                                '\n';
                        } else {
                            errorMessage += errors[field] +
                                '\n';
                        }
                    }

                    Swal.fire({
                        title: "Error!",
                        text: errorMessage,
                        icon: "error",
                        button: "OK",
                    });
                }
            });
        });
    });
</script>
