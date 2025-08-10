<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use App\Models\signup;
use App\Models\District;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;

class SignupController extends Controller
{
    public function signup()
    {
         $districts = District::all();
        return view('FrontEnd.pages.signup', compact('districts'));
    }

    public function checkReference(Request $request)
{
    $referenceId = $request->input('reference_id');
    $exists = Signup::where('registration_no', $referenceId)->exists();

    if ($exists) {
        return response()->json(['exists' => true]);
    } else {
        return response()->json(['exists' => false]);
    }
}

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name_bangla' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'present_address' => 'nullable|string',
            'permanent_address' => 'nullable|string',
            'telephone' => 'nullable|string|max:20',
            'education_qualification' => 'nullable|string|max:255',
            'district' => 'nullable|string',
            'thana' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'facebook_id' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'age' => 'nullable|numeric',
            'blood_group' => 'nullable|string|max:10',
            'nationality' => 'nullable|string|max:100',
            'national_id' => 'nullable|string|max:50',
            'reference_id' => 'nullable|string|max:100',
            'member_type' => 'nullable|string|max:100',
            'designation' => 'nullable|string|max:100',
            'member_img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'nid_img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // ✅ File Uploads
        if ($request->hasFile('member_img')) {
           $image = $request->file('member_img');
        $imageName = time() . '_' . $image->getClientOriginalName(); // ইউনিক নাম তৈরি
        $image->move(public_path('uploads/member_images'), $imageName);
        $validated['member_img'] = 'uploads/member_images/' . $imageName;
        } else {
            $validated['member_img'] = null; // যদি ফাইল না থাকে, তাহলে null সেট করুন
        }

        if ($request->hasFile('nid_img')) {
            $image = $request->file('nid_img');
            $imageName = time() . '_' . $image->getClientOriginalName(); // ইউনিক নাম তৈরি
            $image->move(public_path('uploads/nid_images'), $imageName);
            $validated['nid_img'] = 'uploads/nid_images/' . $imageName;
      }  else {
            $validated['nid_img'] = null; // যদি ফাইল না থাকে, তাহলে null সেট করুন
      }
         // Example registration number generation
         $plainPassword = 'default123';
         $validated['password'] = Hash::make($plainPassword);

          $member_type = $request->input('member_type');
          $lastUser = signup::where('member_type', $member_type)
                    ->orderByDesc('id')
                    ->first();
                    //print_r($lastUser);
        if ($lastUser) {

            $lastRegistrationNo = $lastUser->REGISTRATION_NO;
           
            $parts = explode(' ', $lastRegistrationNo);

    if (isset($parts[1])) {
        $number = (int)$parts[1];
        $newNumber = str_pad($number + 1, 2, '0', STR_PAD_LEFT);
        $newRegistrationNo = $parts[0] . ' ' . $newNumber;

       // echo $newRegistrationNo; // ✅ ঠিকভাবে কাজ করবে
         $validated['registration_no'] = $newRegistrationNo;
    } else {
        echo "Invalid format: Space ( ) not found in registration no.";
    }
          
           
        }else{
            if ($member_type == '1') {
                $validated['registration_no'] = 'BJHM 1001';
            } elseif ($member_type == '2') {
                $validated['registration_no'] = 'BJJM 2001';
            } 
             elseif ($member_type == '3') {
                $validated['registration_no'] = 'BJSM-3001';
            }else {
                $validated['registration_no'] = 'BJFM-4001';
            }
        }       
        
        
        // ✅ Save to DB
        Signup::create($validated);
    Mail::to($Signup->email)->send(new RegistrationMail($user, $plainPassword));
        return redirect('/member-login')->with('success', 'Signup successful! Please Check Your Email for Password');
    }
}