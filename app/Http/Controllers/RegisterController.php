<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Adjust the model based on your application
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.index');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('pages.register');
        } else {
            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'salutation' => 'required|string|max:10',
                'first_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'last_name' => 'required|string|max:255',
                'father_name' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'high_qual' => 'required|string|max:10',
                'gender_id' => 'required|max:10',
                'category_id' => 'required|max:10',
                'dob' => 'required|date',
                'age' => 'required',
                'email' => 'required|email|max:255|unique:users,email', // Ensure the email is unique
                // 'phone' => 'required|string|max:15',
                // 'otp' => 'nullable|string|max:4', // Allow for OTP field in validation
                // Add more validation rules as necessary
            ]);

            $uniqueFormId = $this->generateUniqueFormId();

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
            }

            // Create a new user (or adjust based on your data model)
            $user = User::create([
                'registration_number' => $uniqueFormId,
                'salutation' => $request->salutation,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'high_qual' => $request->high_qual,
                'gender_id' => $request->gender_id,
                'category_id' => $request->category_id,
                'dob' => $request->dob,
                'age' => $request->age,
                'email' => $request->email,
                // 'phone' => $request->phone,
                'ex-ser' => $request->ex_ser,
                'X-inMizo' => $request->X_inMizo,
                // Add more fields as necessary
            ]);

            // Return a success response
            if ($user->save()) {
                return response()->json([
                    'success' => true,
                    'registration_number' => $user->registration_number,
                    'message' => 'Registration successful!'
                ]);
            }
            // Return an error response if save fails
            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again.'
            ], 500);
        }
    }
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|regex:/^[0-9]{10}$/', // Validate phone number
        ]);

        $phone = $request->input('phone');
        $otp = rand(1000, 9999); // Generate a random OTP

        // Here, send the OTP to the user's phone number using your SMS service
        $this->sendSms($phone, $otp);

        // Store OTP in session for verification later
        Session::put('otp', $otp);
        Session::put('phone', $phone);

        return response()->json(['success' => true, 'message' => 'OTP sent successfully!']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:4', // Validate OTP
        ]);

        $otp = $request->input('otp');

        // Retrieve OTP from session
        $storedOtp = Session::get('otp');
        $phone = Session::get('phone');

        if ($otp == $storedOtp) {
            // OTP is verified
            // Here you might want to proceed with the registration or other logic
            return response()->json(['success' => true, 'message' => 'OTP verified successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid OTP. Please try again.']);
    }

    protected function sendSms($mobile, $otp)
    {
        $message = $otp . " is your OTP to continue.

Rgds,
SCERT ASSAM
Tech Provider
Cognitive Tech";
        $message = urlencode($message);
        $url = 'https://m.xsms.in/api/sendhttp.php?authkey=330245AEQsKPqSZdB5eccbd74&mobiles=' . $mobile . '&sender=SCERTP&route=4&country=91&DLT_TE_ID=1207168111786016349&message=' . $message . '';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if ($result == true) {
            curl_close($ch);
            return 1;
        } else {
            curl_close($ch);
            return 0;
        }
    }

    public static function generateUniqueFormId()
    {
        $date = date('Y');
        $lasRequestFormNo = User::orderBy('id', 'desc')->first();
        if ($lasRequestFormNo != null) {
            $lastRequestNo = $lasRequestFormNo->registration_number;
            $ltstRequestNo = (int) substr($lastRequestNo, -5) + 1;

            $value = 'APRECN' . $date . '' . str_pad($ltstRequestNo, 5, 0, STR_PAD_LEFT);
            if ($value == "APRECN2024") {
                $ltstRequestNo = (int) substr($ltstRequestNo, -5) + 1;
                $value = 'APRECN' . $date . '' . str_pad($ltstRequestNo, 5, 0, STR_PAD_LEFT);
            }
        } else {
            $value = 'APRECN' . $date . '00001';
        }
        return $value;
    }
}
