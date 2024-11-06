<?php

namespace App\Http\Controllers;

use App\Models\Questionary;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;


class QuestionariesController extends Controller
{
    public function questionaries(Request $request)
    {
        // Handle GET request (return form view)
        if ($request->isMethod('GET')) {
            $userId = $request->input('user_id');
            $questionary = Questionary::where('user_id', Auth::user()->id)->first();
            return view('pages.questionaries', [
                'data' => $questionary
            ]);
        } else {
            $questionary = Questionary::where('user_id', Auth::user()->id)->first();
            DB::beginTransaction();
            try {
                // Validate the request
                $validate = Validator::make(
                    $request->all(),
                    [
                        'user_id' => 'required|exists:users,id',
                        'ncc_grade' => 'required_if:ncc_cert,1',
                        'min_score_mizo' => 'required',
                        'class_x_mizo' => 'required',
                        'mizo_as_mil' => 'required',
                        'comp_cert' => 'required',
                        'ncc_cert' => 'required',
                        'home_guard' => 'required',
                        'iti_eqi' => 'required',
                        'auto_mobile' => 'required',
                    ],
                );
                if ($validate->fails()) {
                    return response()->json([
                        'status' => 400,
                        'success' => true,
                        'message' => 'All fields are required',
                    ]);
                }

                $formData = $request->input('formData');
                if ($questionary) {
                    $update_data = Questionary::where('user_id', Auth::user()->id)
                        ->update([
                            'ncc_grade' => $request->ncc_grade,
                            'min_score_mizo' => $request->min_score_mizo,
                            'class_x_mizo' => $request->class_x_mizo,
                            'mizo_as_mil' => $request->mizo_as_mil,
                            'comp_cert' => $request->comp_cert,
                            'ncc_cert' => $request->ncc_cert,
                            'home_guard' => $request->home_guard,
                            'iti_eqi' => $request->iti_eqi,
                            'auto_mobile' => $request->auto_mobile,
                        ]);
                    // $questionary->ncc_grade = $request->input('ncc_grade');
                    // $questionary->min_score_mizo = $request->min_score_mizo;
                    // $questionary->class_x_mizo = $request->class_x_mizo;
                    // $questionary->mizo_as_mil = $request->mizo_as_mil;
                    // $questionary->comp_cert = $request->comp_cert;
                    // $questionary->ncc_cert = $request->ncc_cert;
                    // $questionary->home_guard = $request->home_guard;
                    // $questionary->iti_eqi = $request->iti_eqi;
                    // $questionary->auto_mobile = $request->auto_mobile;
                    // $questionary->where('user_id', Auth::user()->id);

                } else {
                    // dd("sa");
                    $questionary = new Questionary();
                    $questionary->user_id = Auth::user()->id;
                    $questionary->ncc_grade = $request->input('ncc_grade');
                    $questionary->min_score_mizo = $request->min_score_mizo;
                    $questionary->class_x_mizo = $request->class_x_mizo;
                    $questionary->mizo_as_mil = $request->mizo_as_mil;
                    $questionary->comp_cert = $request->comp_cert;
                    $questionary->ncc_cert = $request->ncc_cert;
                    $questionary->home_guard = $request->home_guard;
                    $questionary->iti_eqi = $request->iti_eqi;
                    $questionary->auto_mobile = $request->auto_mobile;
                    // $questionary->$formData;
                    // dd($questionary);
                    $save = $questionary->save();
                }
                DB::commit();
                return response()->json([
                    'status' => 200,
                    'success' => true,
                    'message' => 'Data submitted successfully',
                    'data' => $questionary,
                ]);
            } catch (Exception $e) {
                dd($e->getMessage());
                DB::rollBack();
            }
        }
    }


    public function preference(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('pages.preference');
        } else {

        }
    }
}
