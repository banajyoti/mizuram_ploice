@include('layouts.header')
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
                <a
                    class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
                    <div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-person"></i></span></div>
                    <span class="hidden lg:inline-block">Profile</span>
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
    <form id="profile-form" action="" method="POST">
        @csrf
        <div class="p-4 grow border border-gray-300 rounded-lg space-y-8">
            <p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate
                need to fillout all the mandatory <span class="text-red-600">*</span> marked feilds.</p>
            <div class="space-y-3">
                <p class="text-md text-center">Personal Details</p>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="sal"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Salutation</label>
                            <input type="text" id="sal" value="{{ $registerDetails->salutation }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="Smt." required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="can_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Candidate
                                Name</label>
                            <input type="text" id="can_name" value="{{ $registerDetails->first_name }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="Xyaa Triwedi Shriwastav" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="cast_cat" class="block mb-auto px-1 text-sm font-medium text-gray-600">Cast/
                                Category</label>
                            <input type="text" id="cast_cat" value="{{ $registerDetails->category_id }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="General" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="gender"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Gender</label>
                            <input type="text" id="high_qual"
                                value="{{ $registerDetails->gender_id == 1 ? 'Male' : ($registerDetails->gender_id == 2 ? 'Female' : 'Others') }}"
                                class="bg-gray-200 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="dob" class="block mb-auto px-1 text-sm font-medium text-gray-600">Date of
                                Birth</label>
                            <input type="text" id="dob" value="{{ $registerDetails->dob }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="27-08-20000" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="age_asOn" class="block mb-auto px-1 text-sm font-medium text-gray-600">Age as
                                on 01-01-2025</label>
                            <input type="text" id="age_asOn" value="{{ $registerDetails->age }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="24 Yr, 11 Mnt, 29 D" placeholder="" disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="father_name"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Father Name</label>
                            <input type="text" id="father_name" {{ $registerDetails->first_name }}
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="Papa Triwedi Shriwastav" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="mother_name"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Mother Name</label>
                            <input type="text" id="mother_name" {{ $registerDetails->mother_name }}
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="Maa Triwedi Shriwastav" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="high_qual"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Highest
                                Qualification</label>
                            <input type="text" id="high_qual"
                                value="{{ $registerDetails->high_qual == 1 ? 'HSLC' : ($registerDetails->high_qual == 2 ? 'HS' : ($registerDetails->high_qual == 3 ? 'Diploma' : ($registerDetails->high_qual == 4 ? 'Graduation' : ($registerDetails->high_qual == 5 ? 'Post Graduation' : 'PhD')))) }}"
                                class="bg-gray-200 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="p_number" class="block mb-auto px-1 text-sm font-medium text-gray-600">Phone
                                Number</label>
                            <input type="text" id="p_number" value="{{ $registerDetails->phone }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="+91 86542 54XXX" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="alt_Pnumber" class="block mb-auto px-1 text-sm font-medium text-gray-600">Alt.
                                Phone Number</label>
                            <input type="text" id="alt_Pnumber"
                                class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="" placeholder="Alternate number" required />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="email"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Email</label>
                            <input type="text" id="email" value="{{ $registerDetails->email }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="dummieemail432@domain.com" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="ex-ser" class="block mb-auto px-1 text-sm font-medium text-gray-600">Are you
                                an Ex-Serviceman?</label>
                            <input type="text" id="ex-ser"
                                value="{{ $registerDetails->ex_ser == 1 ? 'YES' : 'NO' }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="YES" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-8 lg:col-span-6 xl:col-span-4">
                        <div class="h-full flex flex-col">
                            <label for="X-inMizo" class="block mb-auto px-1 text-sm font-medium text-gray-600">Have
                                you completed your Class-X Standard (HSLC) in Mizoram?</label>
                            <input type="text" id="X-inMizo"
                                value="{{ $registerDetails->X_inMizo == 1 ? 'YES' : 'NO' }}"
                                class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="" value="NO" required disabled />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="religion"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Religion<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="religion"
                                class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="religion" value="" placeholder="Religion" required />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="nation"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Nationality<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="nation"
                                class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="nationality" value="" placeholder="Nationality" required />
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="adhar" class="block mb-auto px-1 text-sm font-medium text-gray-600">Aadhaar
                                Number</label>
                            <input type="text" id="adhar"
                                class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                name="adhar_no" value="" placeholder="Aadhaar Number" required />
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <p class="text-md text-center">Communication Details</p>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="h-full flex flex-col">
                            <p class=" text-xs font-semibold text-gray-400">Permanent Address</p>
                        </div>
                    </div>

                    <!-- Street 1 -->
                    <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="street1" class="block mb-auto px-1 text-sm font-medium text-gray-600">Address
                                Line
                                1<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="p_address1" name="permanent_address[street1]"
                                value="{{ old('permanent_address.street1', $userProfiles->p_address1 ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Street 1" required />
                        </div>
                    </div>

                    <!-- Street 2 -->
                    <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="street2" class="block mb-auto px-1 text-sm font-medium text-gray-600">Address
                                Line
                                2</label>
                            <input type="text" id="p_address2" name="permanent_address[street2]"
                                value="{{ old('permanent_address.street2', $userProfiles->p_address2 ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Street 2" />
                        </div>
                    </div>
                    <!-- State -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="State" class="block mb-auto px-1 text-sm font-medium text-gray-600">
                                State<span class="ps-1 text-red-500">*</span>
                            </label>
                            <select id="p_state_id" name="permanent_address[state_id]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}"
                                        {{ old('permanent_address.state_id', $userProfiles->p_state_id ?? '') == $state->id ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <!-- District -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2" id="district-container">
                        <div class="h-full flex flex-col">
                            <label for="district" class="block mb-auto px-1 text-sm font-medium text-gray-600">
                                District<span class="ps-1 text-red-500">*</span>
                            </label>
                            <select id="p_district_id" name="permanent_address[district]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required>
                                <option value="">Select</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Text box for District (initially hidden) -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2 hidden"
                        id="district-textbox-container">
                        <div class="h-full flex flex-col">
                            <label for="district-text" class="block mb-auto px-1 text-sm font-medium text-gray-600">
                                District (Please specify)<span class="ps-1 text-red-500">*</span>
                            </label>
                            <input type="text" id="district-text" name="permanent_address[district_text]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" />
                        </div>
                    </div>


                    <!-- Police Station -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="police_station"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Police Station<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="p_police_id" name="permanent_address[police_station]"
                                value="{{ old('permanent_address.police_station', $userProfiles->p_police_id ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Police Station" required />
                        </div>
                    </div>

                    <!-- Post Office -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="post_office" class="block mb-auto px-1 text-sm font-medium text-gray-600">Post
                                Office<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="p_post_office" name="permanent_address[post_office]"
                                value="{{ old('permanent_address.post_office', $userProfiles->p_post_office ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Post Office" required />
                        </div>
                    </div>

                    <!-- Pincode -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="pincode"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Pincode<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="p_pin" name="permanent_address[pincode]"
                                value="{{ old('permanent_address.pincode', $userProfiles->p_pin ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Pincode" required />
                        </div>
                    </div>
                </div>
                <div class="inline-block flex items-center">
                    <input type="checkBox" onclick="FillAddressInput()" id="addr" value="add"
                        class="mt-0.5 w-5 h-5 rounded-md text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label for="address_same" class="ms-2 text-sm font text-gray-900">
                        Please check if Permanent Address is the same as Correspondence Address.
                    </label>
                </div>

                <!-- Correspondence Address Fields -->
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="h-full flex flex-col">
                            <p class="text-xs font-semibold text-gray-400">Correspondence Address</p>
                        </div>
                    </div>

                    <!-- Correspondence Street 1 -->
                    <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="C-street1"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Address Line
                                1<span class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="c_address1" name="correspondence_address[street1]"
                                value="{{ old('permanent_address.street1', $userProfiles->c_address1 ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Street 1" required />
                        </div>
                    </div>

                    <!-- Correspondence Street 2 -->
                    <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="C-street2"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Address Line
                                2</label>
                            <input type="text" id="c_address2" name="correspondence_address[street2]"
                                value="{{ old('permanent_address.street2', $userProfiles->c_address2 ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Street 2" />
                        </div>
                    </div>

                    <!-- State -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="State"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">State<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="c_state_id" name="correspondence_address[state_id]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Correspondence District -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2" id="c_district-container">
                        <div class="h-full flex flex-col">
                            <label for="C-district"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">District<span
                                    class="ps-1 text-red-500">*</span></label>
                            <select id="c_district_id" name="correspondence_address[district]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                required>
                                <option value="">Select</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Text box for District (initially hidden) -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2 hidden"
                        id="c_district-textbox-container">
                        <div class="h-full flex flex-col">
                            <label for="district-text" class="block mb-auto px-1 text-sm font-medium text-gray-600">
                                District (Please specify)<span class="ps-1 text-red-500">*</span>
                            </label>
                            <input type="text" id="c_district-text" name="permanent_address[district_text]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" />
                        </div>
                    </div>


                    <!-- Correspondence Police Station -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
                        <div class="h-full flex flex-col">
                            <label for="C-police_station"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Police Station<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="c_police_id" name="correspondence_address[police_station]"
                                value="{{ old('permanent_address.police_station', $userProfiles->c_police_id ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Police Station" required />
                        </div>
                    </div>

                    <!-- Correspondence Post Office -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="C-post_office"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Post Office<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="c_post_office" name="correspondence_address[post_office]"
                                value="{{ old('permanent_address.post_office', $userProfiles->c_post_office ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Post Office" required />
                        </div>
                    </div>

                    <!-- Correspondence Pincode -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div class="h-full flex flex-col">
                            <label for="C-pincode"
                                class="block mb-auto px-1 text-sm font-medium text-gray-600">Pincode<span
                                    class="ps-1 text-red-500">*</span></label>
                            <input type="text" id="c_pin" name="correspondence_address[pincode]"
                                value="{{ old('permanent_address.pincode', $userProfiles->c_pin ?? '') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Pincode" required />
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <p class="text-md text-center">Education Qualification</p>

                    <!-- School and Education Details -->
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="h-full flex flex-col">
                                <label for="board_school"
                                    class="block mb-auto px-1 text-sm font-medium text-gray-600">Board/ School<span
                                        class="ps-1 text-red-500">*</span></label>
                                <input type="text" id="board_school" name="education[board_school]"
                                    value="{{ old('permanent_address.board_school', $userProfiles->board_id ?? '') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    placeholder="Board/ School" required />
                            </div>
                        </div>

                        <div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="h-full flex flex-col">
                                <label for="school_name"
                                    class="block mb-auto px-1 text-sm font-medium text-gray-600">School Name</label>
                                <input type="text" id="school_name" name="education[school_name]"
                                    value="{{ old('permanent_address.school_name', $userProfiles->school_name ?? '') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    placeholder="School Name" />
                            </div>
                        </div>

                        <div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
                            <div class="h-full flex flex-col">
                                <label for="roll_no"
                                    class="block mb-auto px-1 text-sm font-medium text-gray-600">Roll
                                    Number<span class="ps-1 text-red-500">*</span></label>
                                <input type="text" id="roll_no" name="education[roll_no]"
                                    value="{{ old('permanent_address.roll_no', $userProfiles->roll_no ?? '') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    placeholder="Roll Number" required />
                            </div>
                        </div>

                        <div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
                            <div class="h-full flex flex-col">
                                <label for="yop"
                                    class="block mb-auto px-1 text-sm font-medium text-gray-600">Year of
                                    Passing<span class="ps-1 text-red-500">*</span></label>
                                <input type="text" id="yop" name="education[yop]"
                                    value="{{ old('permanent_address.yop', $userProfiles->year_of_passing ?? '') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    placeholder="Year of Passing" required />
                            </div>
                        </div>

                        <div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
                            <div class="h-full flex flex-col">
                                <label for="percentage"
                                    class="block mb-auto px-1 text-sm font-medium text-gray-600">Percentage %<span
                                        class="ps-1 text-red-500">*</span></label>
                                <input type="text" id="percentage" name="education[percentage]"
                                    value="{{ old('permanent_address.percentage', $userProfiles->percentage ?? '') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    placeholder="Percentage %" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>

<div class="mt-auto px-4 flex items-center">
    <a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito"
        href="{{ route('preference') }}"><i class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
    <a id="save-proceed-btn"
        class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito"><i
            class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>
@include('layouts.footer')
<!-- Include jQuery (only if it's not already included in your layout) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    // AJAX Form Submission
    $(document).ready(function() {
        $('#save-proceed-btn').on('click', function(e) {
            e.preventDefault();

            var formData = new FormData($('#profile-form')[0]);

            // Send AJAX POST request
            $.ajax({
                url: '{{ route('profile') }}',
                type: 'POST',
                data: formData,
                processData: false, // Important for file uploads
                contentType: false, // Important for file uploads
                success: function(response) {
                    if (response.success) {
                        alert("Form submitted successfully!");
                        // Optionally, you can redirect or handle response here
                    } else {
                        alert("There was an error submitting the form.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                    alert("An error occurred while submitting the form.");
                }
            });
        });
    });
</script>

<script>
    // JavaScript to handle dynamic change
    document.getElementById('p_state_id').addEventListener('change', function() {
        var stateId = this.value;
        var districtSelect = document.getElementById('district-container');
        var districtTextbox = document.getElementById('district-textbox-container');

        if (stateId != '2') { // If state ID is 2, show text box and hide select
            districtSelect.classList.add('hidden');
            districtTextbox.classList.remove('hidden');
        } else {
            districtSelect.classList.remove('hidden');
            districtTextbox.classList.add('hidden');
        }
    });
</script>

<script>
    // JavaScript to handle dynamic change
    document.getElementById('c_state_id').addEventListener('change', function() {
        var stateId = this.value;
        var districtSelect = document.getElementById('c_district-container');
        var districtTextbox = document.getElementById('c_district-textbox-container');

        if (stateId != '2') { // If state ID is 2, show text box and hide select
            districtSelect.classList.add('hidden');
            districtTextbox.classList.remove('hidden');
        } else {
            districtSelect.classList.remove('hidden');
            districtTextbox.classList.add('hidden');
        }
    });
</script>
<script>
    /** jQuery for append address */
    function FillAddressInput() {
        let checkBox = document.getElementById('checkBox');

        let pAddress1 = document.getElementById("p_address1");
        let pAddress2 = document.getElementById("p_address2");
        let postOffice1 = document.getElementById("p_post_office");
        let policeStation1 = document.getElementById("p_police_id");
        let disrtric1 = document.getElementById("p_district_id");
        let state1 = document.getElementById("p_state_id");
        let pin1 = document.getElementById("p_pin");
        let dsitrict1text = document.getElementById("district-text");

        let cAddress1 = document.getElementById("c_address1");
        let cAddress2 = document.getElementById("c_address2");
        let postOffice2 = document.getElementById("c_post_office");
        let policeStation2 = document.getElementById("c_police_id");
        let disrtric2 = document.getElementById("c_district_id");
        let state2 = document.getElementById("c_state_id");
        let pin2 = document.getElementById("c_pin");
        let dsitrict2text = document.getElementById("c_district-text");
        let addr = document.getElementById("addr");

        if (addr.checked == true) {

            let pAddress1Value = pAddress1.value;
            let pAddress2Value = pAddress2.value;
            let postOffice1Value = postOffice1.value;
            let policeStation1Value = policeStation1.value;
            let disrtric1Value = disrtric1.value;
            let state1Value = state1.value;
            let pin1Value = pin1.value;
            let dsitrict1textValue = dsitrict1text.value;

            cAddress1.value = pAddress1Value;
            cAddress2.value = pAddress2Value;
            postOffice2.value = postOffice1Value;
            policeStation2.value = policeStation1Value;
            disrtric2.value = disrtric1Value;
            state2.value = state1Value;
            pin2.value = pin1Value;
            dsitrict2text.value = dsitrict1textValue;
        } else {
            cAddress1.value = "";
            cAddress2.value = "";
            postOffice2.value = "";
            policeStation2.value = "";
            disrtric2.value = "";
            state2.value = "";
            pin2.value = "";
            dsitrict2text.value = "";
        }
    }
</script>
