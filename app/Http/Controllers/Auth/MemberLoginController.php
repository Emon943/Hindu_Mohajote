<?php

namespace App\Http\Controllers\Auth;
use app\Http\Middleware\MemberAuthenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

use App\Models\Signup;

class MemberLoginController extends Controller
{

  
   public function member_login(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $signups = signup::where('email', $request->email)->first();
        //print_r($member);

        if ($signups && Hash::check($request->password, $signups->PASSWORD)) {
             /*dd([
    'input_email' => $request->email,
     'input_password' => $request->password,
    'db_password' => $signups->PASSWORD,
    'db_email' => $signups->EMAIL,
    'check' => Hash::check($request->password, $signups->PASSWORD),
   ]);*/
            
            $test=Auth::guard('member')->login($signups);
          // dd($test);
            return redirect('/member/dashboard');

        }
       

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    

    public function logout(Request $request)
    {
        Auth::guard('member')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/member-login');
    }

}
