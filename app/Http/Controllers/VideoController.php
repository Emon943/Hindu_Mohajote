<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Front_Video;


use DB;

class VideoController extends Controller
{
   

    public function add(){
    	return view('BackEnd.pages.video_add');
    }

    public function store(Request $request){

    	$video = new Front_Video();
        $video->url = $request->url;
    	$video->save();
    	return redirect('/video')->with('message','Video upload successfully done');
    }

    public function show(){

    	$videos = DB::table('front__videos')->get();
    	return view('BackEnd.pages.video_view', ['videos' => $videos]);
    }

    public function delete($id){

    	$video = Front_Video::find($id);
        $video->delete();
        return redirect('/video-view')->with('message','Video delete successfully done');
    }
}
