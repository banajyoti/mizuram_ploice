<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Profile;
use App\Models\State;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        if ($request->isMethod('GET')) {
            $userId = Auth::user()->id;
            $states = State::orderBy('name')->get();
            $districts = District::orderBy('name')->get();
            $registerDetails = User::where('id', Auth::user()->id)->first();
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

            $userProfile = Profile::updateOrCreate(
                ['user_id' => Auth::user()->id],
                [
                    'religion' => $request->input('religion'),
                    'nationality' => $request->input('nationality'),
                    'adhar_no' => $request->input('adhar_no'),
                    'p_address1' => $request->input('permanent_address.street1'),
                    'p_address2' => $request->input('permanent_address.street2'),
                    'p_pin' => $request->input('permanent_address.pincode'),
                    'p_state_id' => $request->input('permanent_address.state_id'),
                    'p_district_id' => $request->input('permanent_address.district'),
                    'p_police_id' => $request->input('permanent_address.police_station'),
                    'p_post_office' => $request->input('permanent_address.post_office'),
                    'c_address1' => $request->input('correspondence_address.street1'),
                    'c_address2' => $request->input('correspondence_address.street2'),
                    'c_pin' => $request->input('correspondence_address.pincode'),
                    'c_state_id' => $request->input('correspondence_address.state_id'),
                    'c_district_id' => $request->input('correspondence_address.district'),
                    'c_police_id' => $request->input('correspondence_address.police_station'),
                    'c_post_office' => $request->input('correspondence_address.post_office'),
                    'board_id' => $request->input('education.board_school'),
                    'school_name' => $request->input('education.school_name'),
                    'roll_no' => $request->input('education.roll_no'),
                    'year_of_passing' => $request->input('education.yop'),
                    'percentage' => $request->input('education.percentage'),
                ]
            );

            // Return a response (JSON in case of AJAX submission)
            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully'
            ]);
        }
    }
}
