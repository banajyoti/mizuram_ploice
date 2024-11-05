<?php

namespace App\Http\Controllers;

use App\Models\Questionary;
use Illuminate\Http\Request;
use Validator;

class QuestionariesController extends Controller
{
    public function questionaries(Request $request)
    {
        // Handle GET request (return form view)
        if ($request->isMethod('GET')) {
            return view('pages.questionaries');
        }

        // Validate the request
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',  // Ensure user exists
            'formData' => 'required|array',  // Ensure formData is an array
        ]);

        // Extract form data
        $formData = $request->input('formData');

        // Log the incoming data for debugging
        \Log::info('Form Data:', $formData);

        // Check if the record already exists based on user_id
        $questionary = Questionary::where('user_id', $request->input('user_id'))->first();
        // If the record exists, update it
        if ($questionary) {
            // Update the existing record with the new data
            $formData['ncc_grade'] = $request->input('ncc_grade');
            // dd($request->input('ncc_grade'));
            $questionary->update($formData);  // Update only the non-empty values from formData
        } else {
            // If the record does not exist, create a new record
            $questionary = new Questionary();
            $questionary->user_id = $request->input('user_id');
            $questionary->ncc_grade = $request->input('ncc_grade');
            $questionary->fill($formData);  // Fill in the rest of the fields
            $questionary->save();  // Save the new record
        }

        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'Data submitted successfully',
            'data' => $questionary,  // Return the saved/updated data
        ]);
    }


    public function preference(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('pages.preference');
        } else {

        }
    }
}
