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
    public function district_add()
    {
        return view('BackEnd.pages.district_add');
    }
    public function thana_add()
    {
        $districts = District::all();
        return view('BackEnd.pages.thana_add', compact('districts'));
    }
    public function storeDistrict(Request $request)
    {
        $request->validate([
            'district_name' => 'required|string|max:255',
        ]);
        $district_name = $request->district_name;

         $exists = District::where('district_name', $district_name)->exists();

    if ($exists) {
        // যদি District ইতিমধ্যে অন্য রেকর্ডে থাকে, তাহলে একটি ত্রুটি বার্তা ফেরত দিন
		 return redirect()->back()->with('success', 'This District Name already exists!');
    }

        District::create(['district_name' => $request->district_name]);
        return redirect()->back()->with('success', 'District added successfully.');
    }
    public function storeThana(Request $request)
    {
        $request->validate([
            'thana_name' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
        ]);

         $thana_name = $request->thana_name;

         $exists = Thana::where('thana_name', $thana_name)->exists();

    if ($exists) {
        // যদি Thana ইতিমধ্যে অন্য রেকর্ডে থাকে, তাহলে একটি ত্রুটি বার্তা ফেরত দিন
		 return redirect()->back()->with('success', 'This Thana Name already exists!');
    }

        Thana::create([
            'district_id' => $request->district_id,
            'thana_name' => $request->thana_name,
        ]);
        return redirect()->back()->with('success', 'Thana added successfully.');
    }
    public function viewDistrict()
    {
        $districts = District::all();
        return view('BackEnd.pages.view_district', compact('districts'));
    }
    public function viewThana()
    {
        // Fetching all thanas with their respective district names
        // You can use Query  Builder or join queries as per your requirement
        //$thanas = DB::table('thanas')
       //->join('districts', 'thanas.district_id', '=', 'districts.id')
       //->select('thanas.id as thana_id', 'thanas.name as thana_name', 'districts.name as district_name')
       //->get();

        // Fetching thanas with their respective district names
        // You can use Eloquent relationships or join queries as per your requirement
        $thanas = Thana::join('districts', 'thanas.district_id', '=', 'districts.id')
        ->select('thanas.id', 'thanas.thana_name', 'districts.district_name')
        ->get();
        // $thanas = Thana::all(); // If you want to get all thanas without district info
        // $thanas = Thana::with('district')->get(); // If you want
        return view('BackEnd.pages.view_thana', compact('thanas'));

    }
    public function editDistrict($id)
    {
        $did=base64_decode($id);
        $district = District::findOrFail($did);
        return view('BackEnd.pages.edit_district', compact('district'));
    }

    public function updateDistrict(Request $request)
    {
        $request->validate([
            'district_name' => 'required|string|max:255',
            'id' => 'required|exists:districts,id',
        ]);

        $district = District::findOrFail($request->id);
        $district->district_name = $request->district_name;

        // Check if the district name already exists in another record
        $exists = District::where('district_name', $request->district_name)
                          ->where('id', '!=', $district->id)
                          ->exists();

        if ($exists) {
            return redirect()->back()->with('success', 'This District Name already exists!');
        }

        $district->save();
        return redirect()->back()->with('success', 'District updated successfully.');
    }

    public function editThana($id)
    {
        $tid=base64_decode($id);
         $thana = Thana::join('districts', 'thanas.district_id', '=', 'districts.id')
        ->select('thanas.id', 'thanas.thana_name', 'districts.district_name')
        ->where('thanas.id', $tid)
        ->first();
        //$thana = Thana::findOrFail($tid);
        $districts = District::all(); // Fetch all districts for the dropdown
        return view('BackEnd.pages.edit_thana', compact('thana', 'districts'));
    }

    
    public function updateThana(Request $request)
    {
        $request->validate([
            'thana_name' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
            'id' => 'required|exists:thanas,id',
        ]);

        $thana = Thana::findOrFail($request->id);
        $thana->thana_name = $request->thana_name;
        $thana->district_id = $request->district_id;

        // Check if the thana name already exists in another record
        $exists = Thana::where('thana_name', $request->thana_name)
                          ->where('district_id', $request->district_id)
                       ->where('id', '!=', $thana->id)
                       ->exists();

        if ($exists) {
            return redirect()->back()->with('success', 'This Thana Name already exists!');
        }

        $thana->save();
        return redirect()->back()->with('success', 'Thana updated successfully.');
    }


    
}
