<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FrontEndController extends Controller
{
    public function index(){

    	$slider = DB::table('sliders')->get();
    	$videos = DB::table('front__videos')
    			->orderBy('id', 'desc')
    			->take(2)
    			->get();
        $projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.home', ['slider' => $slider, 'videos' => $videos, 'projects' => $projects]);
    }

    public function about(){

    	$projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.about', ['projects' => $projects]);
    }

	public function corporateinfo(){

    	$projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.corporateinfo', ['projects' => $projects]);
    }
	 public function investor_relation(){

    	$projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.investor_relation', ['projects' => $projects]);
    }
	public function news_events(){

    	$projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.news_events', ['projects' => $projects]);
    }
}