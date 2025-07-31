<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

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
        $project = DB::table('projects')->count();
    	$need = DB::table('need_helps')->count();
    	$want = DB::table('want_helps')->count();
    	return view('BackEnd.pages.home',['project' => $project, 'need' => $need, 'want' => $want,]);
    }
    
}
