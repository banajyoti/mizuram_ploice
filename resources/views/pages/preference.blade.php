@include('layouts.header')
@include('layouts.nav-2')

<div class="px-4 grow flex flex-col">
	<div class="flex gap-3">
		<div class="grow flex flex-col group">
			<div class="h-full flex flex-col items-center md:items-start">
				<a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs" href="{{ route('questionaries') }}">
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
				<a class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-2 flex items-center text-green-600 font-medium transition-all text-xs">
					<div class="h-8 w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span class="m-auto text-sm TimesNR"><i class="bi bi-arrow-down-up"></i></span></div>
					<span class="hidden lg:inline-block">Post Preferences</span>
				</a>
				<div class="flex h-6 ml-6">
				<div class="h-full w-[2px] bg-green-600"></div>
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



	<div class="p-4 grow border border-gray-300 rounded-lg space-y-8">
		<p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidate are requested to slect the post as per their preference</p>
		<div class="flex flex-col items-center justify-center">
			<p class=" text-gray-600 border-b">List of eligible post's</p>
			<div class="w-[60vw] grid grid-cols-12">
				<div class="col-span-2 border">
					<div class="h-full p-2 text-center">
						Preference Number
					</div>
				</div>
				<div class="col-span-7 border">
					<div class="h-full p-2">
						Post Name
					</div>
				</div>
				<div class="col-span-3 border">
					<div class="h-full p-2 text-center">
						#
					</div>
				</div>
			</div>
			<div class="">
				<div class="w-[60vw] grid grid-cols-12">
					<div class="col-span-2 border">
						<div class="h-full p-2 text-center">
							01
						</div>
					</div>
					<div class="col-span-7 border">
						<div class="h-full p-2">
							Mizoram Police Armed Branch (AB)
						</div>
					</div>
					<div class="col-span-3 border">
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
				<div class="w-[60vw] grid grid-cols-12">
					<div class="col-span-2 border">
						<div class="h-full p-2 text-center">
							02
						</div>
					</div>
					<div class="col-span-7 border">
						<div class="h-full p-2">
							Mizoram Police Armed Branch (AB)
						</div>
					</div>
					<div class="col-span-3 border">
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
				<div class="w-[60vw] grid grid-cols-12">
					<div class="col-span-2 border">
						<div class="h-full p-2 text-center">
							03
						</div>
					</div>
					<div class="col-span-7 border">
						<div class="h-full p-2">
							Mizoram Police Armed Branch (AB)
						</div>
					</div>
					<div class="col-span-3 border">
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
			</div>
		</div>
	</div>
</div>

<div class="mt-auto px-4 flex items-center">
	<a class="inline-block bg-gray-600 hover:bg-gray-700 text-white p-2 rounded-md Nunito" href="{{ route('questionaries') }}"><i class="bi bi-arrow-left-short pr-1"></i>Go Back</a>
	<a class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito" href="document.php"><i class="bi bi-check-all pr-1"></i>Save & proceede</a>
</div>
@include('layouts.footer')
