<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Project;
use DB;

class ProjectInfoController extends Controller
{

    public function projectShow(){
        $projects = DB::table('projects')->get();
        $slider = DB::table('sliders')->get();
        $videos = DB::table('front__videos')
                ->orderBy('id', 'desc')
                ->take(2)
                ->get();
        return view('FrontEnd.pages.project', ['projects' => $projects, 'slider' => $slider, 'videos' => $videos]);
    }

    public function project($id){

        $proid = base64_decode($id);

    	$projects = DB::table('projects')->get();
    	$project = Project::where('id',$proid)->first();

    	$images = DB::table('projects')
            ->join('project_images', 'projects.id', '=', 'project_images.p_id')
            ->select('project_images.filename as photo')
            ->where('projects.id', $proid)
            ->get();

        $videos = DB::table('projects')
            ->join('videos', 'projects.id', '=', 'videos.p_id')
            ->select('videos.*')
            ->where('projects.id', $proid)
            ->orderBy('videos.id', 'desc')
            ->take(2)
            ->get();
            
        return view('FrontEnd.pages.project_info', ['project' => $project, 'projects' => $projects, 'images' => $images, 'videos' => $videos]);
    }
}
