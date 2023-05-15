<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->roles[0]->id) {
            case 1:
                return view('home');
                break;
            case 2:
                return view('chairman_home');
                break;
            case 2:
                return view('secretory');
                break;
            case 3:
                return view('exam_comm');
                break;
            case 4:
                return view('absens_comm');
                break;
        }
        return view('home');
    }
}
