public function profile(Request $request)
{
    if ($request->isMethod('GET')) {
        $userId = Auth::user()->id;
        $states = State::orderBy('name')->get();
        $districts = District::orderBy('name')->get();
        $registerDetails = User::leftJoin('castes', 'castes.id', '=', 'users.category_id')
            ->select('castes.name as c', 'users.*')
            ->where('users.id', Auth::user()->id)
            ->first();

        $userProfiles = Profile::leftJoin('states as st1', 'st1.id', '=', 'profiles.p_state_id')
            ->leftJoin('states as st2', 'st2.id', '=', 'profiles.c_state_id')
            ->leftJoin('districts as dist1', 'dist1.id', '=', 'profiles.p_district_id')
            ->leftJoin('districts as dist2', 'dist2.id', '=', 'profiles.c_district_id')
            ->select('profiles.*', 'st1.name as s1', 'st2.name as s2', 'dist1.name as d1', 'dist2.name as d2')
            ->where('user_id', $registerDetails->id)
            ->first();

        return view('pages.profile', compact('registerDetails', 'districts', 'states', 'userProfiles'));
    } else {
        $validatedData = $request->validate([
            'permanent_address.street1' => 'required|string|max:255',
            'permanent_address.street2' => 'nullable|string|max:255',
            'permanent_address.pincode' => 'required|numeric|digits:6',
            'permanent_address.state_id' => 'required',
            'permanent_address.district' => 'required',
            'permanent_address.police_station' => 'required|string|max:255',
            'permanent_address.post_office' => 'required|string|max:255',
            'correspondence_address.street1' => 'required|string|max:255',
            'correspondence_address.street2' => 'nullable|string|max:255',
            'correspondence_address.pincode' => 'required|numeric|digits:6',
            'correspondence_address.state_id' => 'required',
            'correspondence_address.district' => 'required',
            'correspondence_address.police_station' => 'required|string|max:255',
            'correspondence_address.post_office' => 'required|string|max:255',
            'education.board_school' => 'required|string|max:255',
            'education.school_name' => 'nullable|string|max:255',
            'education.roll_no' => 'required|string|max:50',
            'education.yop' => 'required|integer|digits:4',
            'education.percentage' => 'required|numeric|between:0,100',
        ]);

        // Check if permanent or correspondence district is updated along with state/district text
        $p_state_id = $request->input('permanent_address.state_id');
        $c_state_id = $request->input('correspondence_address.state_id');
        $p_other_district = $request->input('permanent_address.district_text');
        $c_other_district = $request->input('correspondence_address.district_text');

        $p_district_id = $request->input('permanent_address.district');
        $c_district_id = $request->input('correspondence_address.district');

        // Prepare data for saving the profile
        $data = [
            'religion' => $request->input('religion'),
            'nationality' => $request->input('nationality'),
            'adhar_no' => $request->input('adhar_no'),
            'p_address1' => $request->input('permanent_address.street1'),
            'p_address2' => $request->input('permanent_address.street2'),
            'p_pin' => $request->input('permanent_address.pincode'),
            'p_state_id' => $p_state_id,
            'p_district_id' => $p_district_id,
            'p_other_district' => $p_other_district,
            'p_police_id' => $request->input('permanent_address.police_station'),
            'p_post_office' => $request->input('permanent_address.post_office'),
            'c_address1' => $request->input('correspondence_address.street1'),
            'c_address2' => $request->input('correspondence_address.street2'),
            'c_pin' => $request->input('correspondence_address.pincode'),
            'c_state_id' => $c_state_id,
            'c_district_id' => $c_district_id,
            'c_other_district' => $c_other_district,
            'c_police_id' => $request->input('correspondence_address.police_station'),
            'c_post_office' => $request->input('correspondence_address.post_office'),
            'board_id' => $request->input('education.board_school'),
            'school_name' => $request->input('education.school_name'),
            'roll_no' => $request->input('education.roll_no'),
            'year_of_passing' => $request->input('education.yop'),
            'percentage' => $request->input('education.percentage'),
        ];

        // Nullify the district fields if the state or district_text is being updated
        if ($p_state_id || $p_other_district) {
            $data['p_district_id'] = null; // Nullify p_district_id if state or district_text is updated
        }

        if ($c_state_id || $c_other_district) {
            $data['c_district_id'] = null; // Nullify c_district_id if state or district_text is updated
        }

        // Update or create the profile
        $userProfile = Profile::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        // Return a response (JSON in case of AJAX submission)
        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully'
        ]);
    }
}

 <!-- Display uploaded signature if available -->
 @if (isset($documents->signature) && !empty($documents->signature))
 <!-- Assuming 'signature' is stored under the public storage path -->
 <div class="mt-4">
     <a href="{{ asset('storage/public/uploads/upload_signature/' . $documents->signature) }}" target="_blank" class="block p-2 bg-gray-200 hover:bg-blue-600 hover:text-white rounded-md text-xs text-center">
         View Uploaded Signature
     </a>
     <!-- Optionally, you can show the image itself if it's an image file (e.g. PNG, JPG) -->
     <div class="mt-2">
         <img src="{{ asset('storage/public/uploads/upload_signature/' . $documents->signature) }}" alt="Uploaded Signature" class="max-w-[200px] max-h-[150px] object-contain">
     </div>
 </div>
@else
 <p class="mt-4 text-sm text-gray-500">No signature uploaded yet.</p>
@endif
