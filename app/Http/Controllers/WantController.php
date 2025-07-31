<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WantHelp;

use DB;

class WantController extends Controller
{

    public function view_want(){

    	$want = DB::table('want_helps')->get();
    	return view('BackEnd.pages.viewwant', ['want' => $want]);
    }

    public function info_want($id){

        $wtid = base64_decode($id);

    	$want = WantHelp::where('id',$wtid)->first();
    	return view('BackEnd.pages.infowant', ['want' => $want]);
    }
}
