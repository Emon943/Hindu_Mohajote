<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\signup;

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

	public function member_pending_info(){

    	 $PENDING = DB::table('signups')->where('STATUS', 'PENDING')->get();
    	return view('BackEnd.pages.member_pending_info', ['PENDING' => $PENDING]);
    }

	public function check($id){

		$signup = DB::table('signups')->where('id', $id)->first();
		if ($signup) {
			DB::table('signups')->where('id', $id)->update(['STATUS' => 'CHECKING']);
			return redirect()->back()->with('success', 'Member approved successfully.');
		}
		return redirect()->back()->with('error', 'Member not found.');
    }

public function member_info($id)
{

	$signup = DB::table('signups')
    ->join('districts', 'signups.DISTRICT', '=', 'districts.id')
    ->join('thanas', 'signups.THANA', '=', 'thanas.id')
    ->select(
        'signups.*',
        'districts.district_name',
        'thanas.thana_name'
    )
    ->where('signups.id', $id)
    ->first(); // single row নিতে চাইলে first(), multiple চাইলে get()
    return view('BackEnd.pages.member_info', compact('signup'));
}
public function member_update($id)
{
    $signup = Signup::findOrFail($id);
    return view('BackEnd.pages.edit_registration_no', compact('signup'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'REGISTRATION_NO' => 'required|string|max:255',
        ]);

        $signup = Signup::findOrFail($id);
        $signup->REGISTRATION_NO = $request->REGISTRATION_NO;
        $signup->save();

        return redirect()->back()->with('success', 'Registration number updated successfully!');
    }

}
