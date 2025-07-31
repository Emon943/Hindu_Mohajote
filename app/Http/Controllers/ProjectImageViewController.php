<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\ProjectImage;
use DB;

class ProjectImageViewController extends Controller
{

	


    public function show_project(){

    	$projects = DB::table('projects')->get();
        return view('BackEnd.pages.showproject', ['projects' => $projects]);
    }

    public function info_project($id){

        $proid = base64_decode($id);

    	$project = Project::where('id',$proid)->first();
    	$images = DB::table('projects')

            ->join('project_images', 'projects.id', '=', 'project_images.p_id')
            ->select('project_images.*')
            ->where('projects.id', $proid)
            ->get();

            $videos = DB::table('projects')
            ->join('videos', 'projects.id', '=', 'videos.p_id')
            ->select('videos.*')
            ->where('projects.id', $proid)
            ->get();

    	return view('BackEnd.pages.projectinfo', ['project' => $project, 'images' => $images, 'videos' => $videos]);
    }
}
