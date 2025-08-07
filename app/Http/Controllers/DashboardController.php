<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use DB;

class DashboardController extends Controller
{


    public function home(){
    if(Auth::check() && Auth::user()->role_id ==1){
	
    	$project = DB::table('projects')->count();
    	$need = DB::table('need_helps')->count();
    	$want = DB::table('want_helps')->count();
    	return view('BackEnd.pages.home',['project' => $project, 'need' => $need, 'want' => $want,]);
		}
	if(Auth::check() && Auth::user()->role_id ==2){
        $PENDING = DB::table('signups')->where('STATUS', 'PENDING')->count();
		$CHECKING = DB::table('signups')->where('STATUS', 'CHECKING')->count();
		$APPROVED = DB::table('signups')->where('STATUS', 'APPROVED')->count();
		return view('BackEnd.pages.home',['PENDING' => $PENDING, 'CHECKING' => $CHECKING, 'APPROVED' => $APPROVED,]);
		}
		
    }
}
