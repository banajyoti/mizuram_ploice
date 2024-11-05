<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            // Show login form (if the request is GET)
            return view('pages.notification-login');
        }

        // Validate the incoming request
        $data = $request->validate([
            'rec_id' => 'nullable|string|exists:users,registration_number',
            'mobile_no' => 'nullable|digits:10|exists:users,phone',
            'dob' => 'required|date|exists:users,dob',  // dob is required in both cases
        ]);

        // If both Recruitment ID and Date of Birth are provided
        if ($data['rec_id'] && $data['dob']) {
            $user = User::where('registration_number', $data['rec_id'])
                ->where('dob', $data['dob'])
                ->first();
        }
        // If both Mobile Number and Date of Birth are provided
        elseif ($data['mobile_no'] && $data['dob']) {
            $user = User::where('phone', $data['mobile_no'])
                ->where('dob', $data['dob'])
                ->first();
        } else {
            // If neither condition is met, return an error
            return response()->json([
                'status' => 'error',
                'message' => 'Please provide valid Recruitment ID or Mobile Number with Date of Birth.'
            ], 400);
        }

        // Check if user exists and log them in
        if ($user) {
            // Log the user in using Laravel's built-in Auth system
            Auth::login($user);

            // Return a success response
            return response()->json([
                'status' => 'success',
                'message' => 'Login successful!',
                'user_id' => $user->id
            ]);
        }

        // If no matching user is found, return error
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials or details.'
        ], 401);
    }

    public function logout(Request $request)
    {
        if (!Auth::guest()) {
            Auth::logout();
        }
        return redirect()->route('login')->with('success', 'You have Successfully logged out of the system.');
    }
}
