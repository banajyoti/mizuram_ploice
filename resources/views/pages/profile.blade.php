@include('layouts.header')
@include('layouts.nav-2')
<div class="px-4 grow flex flex-col">
	<div class="flex gap-3">
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="questionaries.php">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR">Q</span></div>
					<span class="hidden lg:inline-block">Questionaries</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="preference.php">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-arrow-down-up"></i></span></div>
					<span class="hidden lg:inline-block">Post Preferences</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-person"></i></span></div>
					<span class="hidden lg:inline-block">Profile</span>
				</a>
				<div class="flex h-6 ml-6">
				<div class="h-full w-[2px] bg-green-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="#">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-file-earmark-pdf"></i></span></div>
					<span class="hidden lg:inline-block">Document's</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="#">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR">₹</span></div>
					<span class="hidden lg:inline-block">Payment</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="#">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-download"></i></span></div>
					<span class="hidden lg:inline-block">Download</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="p-4 grow border border-gray-300 rounded-lg space-y-8">
		<p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate need to fillout all the mandatory <span class="text-red-600">*</span> marked feilds.</p>
		<div class="space-y-3">
			<p class="text-md text-center">Personal Details</p>
			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="sal" class="block mb-auto px-1 text-sm font-medium text-gray-600">Salutation</label>
						<input type="text" id="sal" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Smt." required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="can_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Candidate Name</label>
						<input type="text" id="can_name" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Xyaa Triwedi Shriwastav" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="cast_cat" class="block mb-auto px-1 text-sm font-medium text-gray-600">Cast/ Category</label>
						<input type="text" id="cast_cat" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="General" required  disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="gender" class="block mb-auto px-1 text-sm font-medium text-gray-600">Gender</label>
						<input type="text" id="gender" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Female" required  disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="dob" class="block mb-auto px-1 text-sm font-medium text-gray-600">Date of Birth</label>
						<input type="text" id="dob" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="27-08-20000" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="age_asOn" class="block mb-auto px-1 text-sm font-medium text-gray-600">Age as on 01-01-2025</label>
						<input type="text" id="age_asOn" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="24 Yr, 11 Mnt, 29 D" placeholder="" disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="father_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Father Name</label>
						<input type="text" id="father_name" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Papa Triwedi Shriwastav" required disabled/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="mother_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">Mother Name</label>
						<input type="text" id="mother_name" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Maa Triwedi Shriwastav" required  disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="high_qual" class="block mb-auto px-1 text-sm font-medium text-gray-600">Highest Qualification</label>
						<input type="text" id="high_qual" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="Matriculation" required  disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="p_number" class="block mb-auto px-1 text-sm font-medium text-gray-600">Phone Number</label>
						<input type="text" id="p_number" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="+91 86542 54XXX" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="alt_Pnumber" class="block mb-auto px-1 text-sm font-medium text-gray-600">Alt. Phone Number</label>
						<input type="text" id="alt_Pnumber" class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Alternate number" required />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="email" class="block mb-auto px-1 text-sm font-medium text-gray-600">Email</label>
						<input type="text" id="email" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="dummieemail432@domain.com" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="ex-ser" class="block mb-auto px-1 text-sm font-medium text-gray-600">Are you an Ex-Serviceman?</label>
						<input type="text" id="ex-ser" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="YES" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-8 lg:col-span-6 xl:col-span-4">
					<div class="h-full flex flex-col">
						<label for="X-inMizo" class="block mb-auto px-1 text-sm font-medium text-gray-600">Have you completed your Class-X Standard (HSLC) in Mizoram?</label>
						<input type="text" id="X-inMizo" class="bg-gray-200  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="NO" required disabled />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="religion" class="block mb-auto px-1 text-sm font-medium text-gray-600">Religion<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="religion" class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Religion" required />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="nation" class="block mb-auto px-1 text-sm font-medium text-gray-600">Nationality<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="nation" class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Nationality" required />
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="adhar" class="block mb-auto px-1 text-sm font-medium text-gray-600">Aadhaar Number</label>
						<input type="text" id="adhar" class="bg-gray-50  border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Aadhaar Number" required />
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
				<div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
					<div class="h-full flex flex-col">
						<label for="street1" class="block mb-auto px-1 text-sm font-medium text-gray-600">Street 1<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="street1" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Street 1" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="street2" class="block mb-auto px-1 text-sm font-medium text-gray-600">Street 2<span class="ps-1 text-red-500"></span></label>
						<input type="text" id="street2" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Street 2"/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="district" class="block mb-auto px-1 text-sm font-medium text-gray-600">District<span class="ps-1 text-red-500">*</span></label>
						<select id="district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
						    <option selected>select</option>
						    <option value="00">YES</option>
						    <option value="01">NO</option>
						</select>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="police_Station" class="block mb-auto px-1 text-sm font-medium text-gray-600">Police Station<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="police_Station" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Police Station" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="post_Office" class="block mb-auto px-1 text-sm font-medium text-gray-600">Post Office<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="post_Office" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Post Office" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-1">
					<div class="h-full flex flex-col">
						<label for="Pincode" class="block mb-auto px-1 text-sm font-medium text-gray-600">Pincode<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="Pincode" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Pincode" required/>
					</div>
				</div>
			</div>
			<div class="inline-block flex items-center">
			    <input id="address_same" type="checkbox" value="" class="mt-0.5 w-5 h-5 rounded-md text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
			    <label for="address_same" class="ms-2 text-sm font text-gray-900 ">
			    	Please check is Permanent Address is as same as Correspondance Address.<span class="ps-1 text-red-500">*</span>
			    </label>
			</div>
			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-12">
					<div class="h-full flex flex-col">
						<p class=" text-xs font-semibold text-gray-400">Correspondance Address</p>
					</div>
				</div>
				<div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-3">
					<div class="h-full flex flex-col">
						<label for="C-street1" class="block mb-auto px-1 text-sm font-medium text-gray-600">Street 1<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="C-street1" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Street 1" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="C-street2" class="block mb-auto px-1 text-sm font-medium text-gray-600">Street 2<span class="ps-1 text-red-500"></span></label>
						<input type="text" id="C-street2" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Street 2"/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="C-district" class="block mb-auto px-1 text-sm font-medium text-gray-600">District<span class="ps-1 text-red-500">*</span></label>
						<select id="C-district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
						    <option selected>select</option>
						    <option value="00">YES</option>
						    <option value="01">NO</option>
						</select>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="C-police_Station" class="block mb-auto px-1 text-sm font-medium text-gray-600">Police Station<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="C-police_Station" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Police Station" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="C-post_Office" class="block mb-auto px-1 text-sm font-medium text-gray-600">Post Office<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="C-post_Office" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Post Office" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-1">
					<div class="h-full flex flex-col">
						<label for="C-Pincode" class="block mb-auto px-1 text-sm font-medium text-gray-600">Pincode<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="C-Pincode" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Pincode" required/>
					</div>
				</div>
			</div>
		</div>

		<div class="space-y-3">
			<p class="text-md text-center">Education Qualification</p>
			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
					<div class="h-full flex flex-col">
						<label for="Board_school" class="block mb-auto px-1 text-sm font-medium text-gray-600">Board/ School<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="Board_school" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Board/ School" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
					<div class="h-full flex flex-col">
						<label for="school_name" class="block mb-auto px-1 text-sm font-medium text-gray-600">School Name<span class="ps-1 text-red-500"></span></label>
						<input type="text" id="school_name" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="School Name"/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="roll_no" class="block mb-auto px-1 text-sm font-medium text-gray-600">Roll Number<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="roll_no" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Roll Number"/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="yop" class="block mb-auto px-1 text-sm font-medium text-gray-600">Year of Passing<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="yop" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Year of Passing" required/>
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 lg:col-span-2 xl:col-span-2">
					<div class="h-full flex flex-col">
						<label for="Percentage" class="block mb-auto px-1 text-sm font-medium text-gray-600">Percentage %<span class="ps-1 text-red-500">*</span></label>
						<input type="text" id="Percentage" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" name="" value="" placeholder="Percentage %" required/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mt-auto px-4 flex items-center">
	<a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito" href="{{ route('preference') }}"><i class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
	<a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito" href="document.php"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>
@include('layouts.footer')
