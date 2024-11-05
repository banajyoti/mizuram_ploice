@include('layouts.header')
@include('layouts.nav-2')

<div class="px-4 grow flex flex-col">
	<div class="flex gap-3">
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR">Q</span></div>
					<span class="hidden lg:inline-block">Questionaries</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-green-600"></div>
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
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="profile.php">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-person"></i></span></div>
					<span class="hidden lg:inline-block">Profile</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="document.php">
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
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="payment.php">
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
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="download.php">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-download"></i></span></div>
					<span class="hidden lg:inline-block">Download</span>
				</a>
				<div class="flex h-6 ml-6">
					<div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
				</div>
			</div>
		</div>
	</div>



	<div class="p-4 grow border border-gray-300 rounded-lg space-y-4">
		<p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate need to fillout all the mandatory <span class="text-red-600">*</span> questions.</p>
		<form action="">
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start 2xl:items-center">
									<i class="bi bi-1-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Have you achieved a minimum score in Mizo Language Proficiency qualifying test?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-1-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_min_score_mizo" type="radio" name="min_score_mizo" class="hidden peer">
								<label for="no_min_score_mizo" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i haven't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_min_score_mizo" type="radio" name="min_score_mizo" class="hidden peer">
								<label for="yes_min_score_mizo" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start 2xl:items-center">
									<i class="bi bi-2-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Have you studied Mizo subject in Class-X standard (HSLC) or above within Mizoram?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-2-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_class_x_mizo" type="radio" name="class_x_mizo" class="hidden peer">
								<label for="no_class_x_mizo" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i haven't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_class_x_mizo" type="radio" name="class_x_mizo" class="hidden peer">
								<label for="yes_class_x_mizo" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start xl:items-center">
									<i class="bi bi-3-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Have you studied Mizo subject as MIL in Class-X standard in outside Mizoram?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-3-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_mizo_as_mil" type="radio" name="mizo_as_mil" class="hidden peer">
								<label for="no_mizo_as_mil" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i haven't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_mizo_as_mil" type="radio" name="mizo_as_mil" class="hidden peer">
								<label for="yes_mizo_as_mil" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
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
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-4-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_comp_cert" type="radio" name="comp_cert" class="hidden peer">
								<label for="no_comp_cert" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i don't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_comp_cert" type="radio" name="comp_cert" class="hidden peer">
								<label for="yes_comp_cert" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start xl:items-center">
									<i class="bi bi-5-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Do you have NCC Certificate?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-5-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_ncc_cert" type="radio" name="ncc_cert" class="hidden peer">
								<label for="no_ncc_cert" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i don't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_ncc_cert" type="radio" name="ncc_cert" class="hidden peer">
								<label for="yes_ncc_cert" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
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
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-6-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_home_guard" type="radio" name="home_guard" class="hidden peer">
								<label for="no_home_guard" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i'm.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_home_guard" type="radio" name="home_guard" class="hidden peer">
								<label for="yes_home_guard" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i'm not.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start xl:items-center">
									<i class="bi bi-7-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Have you completed 1 (one) year training course in concerned Trade at the Industrial Training Institute or its equivalent institution?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-7-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_itt_eqi" type="radio" name="itt_eqi" class="hidden peer">
								<label for="no_itt_eqi" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i haven't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_itt_eqi" type="radio" name="itt_eqi" class="hidden peer">
								<label for="yes_itt_eqi" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
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
										<span class="text-xs font-semibold"><span class="text-lg text-red-600 pr-1">*</span>Required</span>
										<i class="bi bi-align-top text-lg pr-1"></i>
									</div>
								</div>
								<div class="flex lg:items-start xl:items-center">
									<i class="bi bi-8-circle-fill text-blue-600 text-xl mr-2"></i>
									<p class="text-md">Do you have work experience of at least 5 (five) years in Government or private automobile Workshop as a mechanic?</p>
								</div>
							</div>
						</div>
						<div class="my-2 md:mt-2 flex items-center gap-1 md:gap-2">
							<p class="px-6 text-gray-500 hidden md:block">Answer<i class="bi bi-8-circle text-sm text-gray-400 px-1"></i>:</p>
							<div class="ml-auto">
								<input id="no_5years" type="radio" name="5years" class="hidden peer">
								<label for="no_5years" class="inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">No, i haven't.</label>
							</div>
							<div class="mr-2 md:mr-0">
								<input id="yes_5years" type="radio" name="5years" class="hidden peer">
								<label for="yes_5years" class="inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-11 w-28 flex items-center justify-center text-sm">Yes, i have.</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="px-4 mt-auto flex items-center">
	<a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito" href="preference.php"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>
@include('layouts.footer')
