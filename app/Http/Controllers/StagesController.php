<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagesController extends Controller
{
    public function index(Request $request)
    {
        $request->stage_id;

        return view('stages')->with(['stage_id' => $request->stage_id]);
    }
    public function exams(Request $request)
    {
        $request->stage_id;

        return view('exams')->with(['stage_id' => $request->stage_id]);
    }
}
