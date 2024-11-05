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
                <a
                    class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR">Q</span></div>
                    <span class="hidden lg:inline-block">Questionaries</span>
                </a>
                <div class="flex h-6 ml-6">
                    <div class="h-full w-[2px] bg-green-600"></div>
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

    <div class="p-4 grow border border-gray-300 rounded-lg space-y-4">
        <p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate need to
            fillout all the mandatory <span class="text-red-600">*</span> questions.</p>
        <form action="" method="post">
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">MIZO Language Proficiency</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start 2xl:items-center">
                                    <i class="bi bi-1-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Have you achieved a minimum score in Mizo Language Proficiency
                                        qualifying test?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="min_score_display">Answer<i
                                    class="bi bi-1-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_min_score_mizo" value="0" type="radio" name="min_score_mizo"
                                    class="hidden peer">
                                <label for="no_min_score_mizo"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i haven't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_min_score_mizo" value="1" type="radio" name="min_score_mizo"
                                    class="hidden peer">
                                <label for="yes_min_score_mizo"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">MIZO Language Proficiency</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start 2xl:items-center">
                                    <i class="bi bi-2-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Have you studied Mizo subject in Class-X standard (HSLC) or
                                        above within Mizoram?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="class_x_display">Answer<i
                                    class="bi bi-2-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_class_x_mizo" value="0" type="radio" name="class_x_mizo"
                                    class="hidden peer">
                                <label for="no_class_x_mizo"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i haven't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_class_x_mizo" value="1" type="radio" name="class_x_mizo"
                                    class="hidden peer">
                                <label for="yes_class_x_mizo"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">MIZO Language Proficiency</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-3-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Have you studied Mizo subject as MIL in Class-X standard in
                                        outside Mizoram?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="mizo_as_mil_display">Answer<i
                                    class="bi bi-3-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_mizo_as_mil" value="0" type="radio" name="mizo_as_mil"
                                    class="hidden peer">
                                <label for="no_mizo_as_mil"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i haven't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_mizo_as_mil" value="1" type="radio" name="mizo_as_mil"
                                    class="hidden peer">
                                <label for="yes_mizo_as_mil"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">Certificate</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-4-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Do you have Computer Certificate?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="comp_cert_display">Answer<i
                                    class="bi bi-4-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_comp_cert" value="0" type="radio" name="comp_cert"
                                    class="hidden peer">
                                <label for="no_comp_cert"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i don't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_comp_cert" value="1" type="radio" name="comp_cert"
                                    class="hidden peer">
                                <label for="yes_comp_cert"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">Certificate</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-5-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Do you have NCC Certificate?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2 ncc_answer_div">
                            <p class="px-6 text-gray-500 hidden md:block" id="ncc_cert_display">Answer<i
                                    class="bi bi-5-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_ncc_cert" value="0" type="radio" name="ncc_cert"
                                    class="hidden peer">
                                <label for="no_ncc_cert"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i don't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_ncc_cert" value="1" type="radio" name="ncc_cert"
                                    class="hidden peer">
                                <label for="yes_ncc_cert"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                        <div class="m-2 flex lg:flex-col xl:flex-row items-center choose_ncc_div hidden">
                            <p class="px-6 text-gray-500 hidden md:block mr-auto xl:mr-0" id="ncc_grade_display">Choose NCC Grade:</p>
                            <div class="flex items-center gap-1 ml-auto">
                                <div class="xl:ml-auto flex items-center">
                                    <div
                                        class="flex items-center p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                        <input id="bordered-radio-1" type="radio" value="1"
                                            name="ncc_grade"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="bordered-radio-1" class="w-full ms-2 text-sm text-gray-900"><span
                                                class="hidden md:inline-block">NCC:</span><span
                                                class="ps-1 font-medium text-lg">A</span></label>
                                    </div>
                                    <div
                                        class="flex items-center p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                        <input checked id="bordered-radio-2" type="radio" value="2"
                                            name="ncc_grade"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="bordered-radio-2" class="w-full ms-2 text-sm text-gray-900"><span
                                                class="hidden md:inline-block">NCC:</span><span
                                                class="ps-1 font-medium text-lg">B</span></label>
                                    </div>
                                    <div
                                        class="flex items-center p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                        <input checked id="bordered-radio-3" type="radio" value="3"
                                            name="ncc_grade"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="bordered-radio-3" class="w-full ms-2 text-sm text-gray-900"><span
                                                class="hidden md:inline-block">NCC:</span><span
                                                class="ps-1 font-medium text-lg">C</span></label>
                                    </div>
                                </div>
                                <button type="button"
                                    class="p-2.5 border border-gray-300 hover:border-red-500 rounded-md hover:text-red-500 revert_ncc_choise"
                                    title="Revert NCC choise"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">Home Guard Volunteers</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-6-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Are you a Home Guard Volunteer (MRHG)?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="home_guard_display">Answer<i
                                    class="bi bi-6-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_home_guard" value="0" type="radio" name="home_guard"
                                    class="hidden peer">
                                <label for="no_home_guard"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i'm.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_home_guard" value="1" type="radio" name="home_guard"
                                    class="hidden peer">
                                <label for="yes_home_guard"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i'm not.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">Mechanic</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-7-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Have you completed 1 (one) year training course in concerned
                                        Trade at the Industrial Training Institute or its equivalent institution?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="iti_eqi_display">Answer<i
                                    class="bi bi-7-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="no_iti_eqi" value="0" type="radio" name="iti_eqi"
                                    class="hidden peer">
                                <label for="no_iti_eqi"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i haven't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="yes_iti_eqi" value="1" type="radio" name="iti_eqi"
                                    class="hidden peer">
                                <label for="yes_iti_eqi"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 p-0 md:p-6 md:py-8 border rounded-lg border-gray-300">
                    <div class="h-full">
                        <div class="flex items-center">
                            <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                            <div class="grow p-2 md:p-4 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-gray-500">
                                        <i class="bi bi-bezier text-lg pr-1"></i>
                                        <span class="text-xs font-semibold">Mechanic</span>
                                    </div>
                                    <div class="flex items-center text-gray-500">
                                        <span class="text-xs font-semibold"><span
                                                class="text-lg text-red-600 pr-1">*</span>Required</span>
                                        <i class="bi bi-align-top text-lg pr-1"></i>
                                    </div>
                                </div>
                                <div class="flex lg:items-start xl:items-center">
                                    <i class="bi bi-8-circle-fill text-blue-600 text-xl mr-2"></i>
                                    <p class="text-md">Do you have work experience of at least 5 (five) years in
                                        Government or private automobile Workshop as a mechanic?</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
                            <p class="px-6 text-gray-500 hidden md:block" id="auto_mobile_display">Answer<i
                                    class="bi bi-8-circle text-sm text-gray-400 px-1"></i>:</p>
                            <div class="ml-auto">
                                <input id="auto_mobile_1" type="radio" value="0" name="auto_mobile"
                                    class="hidden peer">
                                <label for="auto_mobile_1"
                                    class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No,
                                    i haven't.</label>
                            </div>
                            <div class="mr-2 md:mr-0">
                                <input id="auto_mobile_2" type="radio" value="1" name="auto_mobile"
                                    class="hidden peer">
                                <label for="auto_mobile_2"
                                    class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes,
                                    i have.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="px-4 mt-auto flex items-center">
    <a id="save_button" type="submit"
        class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito"><i
            class="bi bi-check-all pr-1"></i>Save & proceed</a>
</div>
@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        // Object to store the selected values for all sections
        var formData = {};

        // Function to handle radio button selection and AJAX post for each section
        function submitRadioData(sectionName) {
            // Collect the selected value from the radio buttons for this section
            var selectedValue = $('input[name="' + sectionName + '"]:checked').val() ||
                ''; // Default to empty string if not selected

            console.log('Selected Value for ' + sectionName + ':', selectedValue);

            // Store the selected value in the formData object
            formData[sectionName] = selectedValue;

            // Determine display text for the selected value
            var displayText = selectedValue === '1' ? 'Yes, I have.' : 'No, I haven\'t.';

            // Update the corresponding <p> tag
            if (sectionName === 'min_score_mizo') {
                $('#min_score_display').text('Answer: ' + displayText);
            } else if (sectionName === 'class_x_mizo') {
                $('#class_x_display').text('Answer: ' + displayText);
            } else if (sectionName === 'mizo_as_mil') {
                $('#mizo_as_mil_display').text('Answer: ' + displayText);
            } else if (sectionName === 'comp_cert') {
                $('#comp_cert_display').text('Answer: ' + displayText);
            } else if (sectionName === 'ncc_cert') {
                $('#ncc_cert_display').text('Answer: ' + displayText);
            } else if (sectionName === 'home_guard') {
                $('#home_guard_display').text('Answer: ' + displayText);
            } else if (sectionName === 'iti_eqi') {
                $('#iti_eqi_display').text('Answer: ' + displayText);
            } else if (sectionName === 'auto_mobile') {
                $('#auto_mobile_display').text('Answer: ' + displayText);
            } else if (sectionName === 'ncc_grade') {
                $('#ncc_grade_display').text('Answer: ' + displayText);
            }
            // Check if formData has any values
            toggleSaveButton();

            // Check if 'ncc_cert' value is '1' and show or hide the NCC section
            if (formData['ncc_cert'] === '1') {
                $('.choose_ncc_div').removeClass('hidden'); // Show the NCC choice div
            } else {
                $('.choose_ncc_div').addClass('hidden'); // Hide the NCC choice div
            }
        }

        // Function to toggle visibility of the Save & Proceed button
        function toggleSaveButton() {
            // Check if formData is empty or contains any empty values
            var isEmpty = Object.keys(formData).length === 0; // Check if formData is empty
            var hasEmptyValue = Object.values(formData).includes(''); // Check if any value in formData is empty

            // If formData is empty or contains any empty values, hide the button
            if (isEmpty || hasEmptyValue) {
                $('#save_button').hide(); // Hide button if formData is empty or contains empty values
            } else {
                $('#save_button').show(); // Show button if formData contains all values
            }
        }
        // Function to submit all the collected data at once
        function submitAllData() {
            // Get CSRF token dynamically
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var userId = $('input[name="user_id"]').val();
            var nccGrade = $('input[name="ncc_grade"]').val();
            console.log($('input[name="ncc_grade"]').val())
            // Prepare the data to be sent in the AJAX request
            var data = {
                formData: formData,
                user_id: userId,
                ncc_grade: nccGrade,
                _token: csrfToken // Include CSRF token for security
            };

            console.log('Submitting all data:', data);

            // Send AJAX request to submit all the collected data at once
            $.ajax({
                url: '{{ route('questionaries') }}', // Replace with your actual route
                type: 'POST',
                data: data,
                success: function(response) {
                    // Handle success response
                    console.log(response.message); // Response message from server (if any)

                    // Show success alert with SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Data submitted successfully!',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Redirect to the 'questionaries' route after the alert is closed
                        window.location.href = '{{ route('preference') }}';
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('An error occurred:', status, error);

                    // Show error alert with SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'An error occurred. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }

        // Attach event listeners for each section to detect change
        $('input[name="min_score_mizo"]').change(function() {
            submitRadioData('min_score_mizo');
        });

        $('input[name="class_x_mizo"]').change(function() {
            submitRadioData('class_x_mizo');
        });

        $('input[name="mizo_as_mil"]').change(function() {
            submitRadioData('mizo_as_mil');
        });

        $('input[name="comp_cert"]').change(function() {
            submitRadioData('comp_cert');
        });

        $('input[name="ncc_cert"]').change(function() {
            submitRadioData('ncc_cert');
        });

        $('input[name="home_guard"]').change(function() {
            submitRadioData('home_guard');
        });

        $('input[name="iti_eqi"]').change(function() {
            submitRadioData('iti_eqi');
        });

        $('input[name="auto_mobile"]').change(function() {
            submitRadioData('auto_mobile');
        });

        $('input[name="ncc_grade"]').change(function() {
            submitRadioData('ncc_grade');
        });


        // Attach click event for the "Save & Proceed" button to submit all data
        $('#save_button').click(function() {
            submitAllData();
        });

        // On page load, hide NCC choice section if 'ncc_cert' is not selected or its value is not '1'
        if ($('input[name="ncc_cert"]:checked').val() === '1') {
            $('.choose_ncc_div').removeClass('hidden');
        } else {
            $('.choose_ncc_div').addClass('hidden');
        }

        // Revert NCC choice - hide NCC section when revert button is clicked
        $('.revert_ncc_choise').click(function() {
            // Hide the NCC choice section
            $('.choose_ncc_div').addClass('hidden');

            // Reset NCC selection in formData (set it to empty)
            $('input[name="ncc_cert"]').prop('checked', false); // Uncheck the radio buttons
            formData['ncc_cert'] = ''; // Clear the 'ncc_cert' value in formData

            // Toggle the save button visibility after resetting the value
            toggleSaveButton();
        });
    });
</script>
