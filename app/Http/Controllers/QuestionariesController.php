<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionariesController extends Controller
{
    public function questionaries(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('pages.questionaries');
        } else {

        }
    }
}
