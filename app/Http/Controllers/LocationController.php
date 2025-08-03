<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Thana;

class LocationController extends Controller
{
    public function showForm()
    {
        $districts = District::all();
        return view('location.form', compact('districts'));
    }

    public function getThanas($district_id)
    {
        $thanas = Thana::where('district_id', $district_id)->get();
        return response()->json($thanas);
    }
   /* public function storeLocation(Request $request)
    {
        $request->validate([
            'district_id' => 'required|exists:districts,id',
            'thana_id' => 'required|exists:thanas,id',
        ]);

        // Store the location data as needed
        // ...

        return redirect()->back()->with('success', 'Location saved successfully.');
    }*/
}
