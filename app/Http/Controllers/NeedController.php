<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\NeedHelp;

use DB;


class NeedController extends Controller
{


    public function view_need(){

    	$need = DB::table('need_helps')->get();
    	return view('BackEnd.pages.viewneed', ['need' => $need]);
    }

    public function info_need($id){

        $ndid = base64_decode($id);

    	$need = NeedHelp::where('id',$ndid)->first();
    	return view('BackEnd.pages.infoneed', ['need' => $need]);
    }
}
