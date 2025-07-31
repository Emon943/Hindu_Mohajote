<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use\App\Project;
use App\Models\Project;

use DB;

class ProjectInsertController extends Controller
{

	

    public function project_insert(){
    	return view('BackEnd.pages.projectinsert');
    }

    public function projectStore(Request $request){

    	$project_info = new Project();
    	$project_info->name = $request->name;
    	$project_info->date = $request->date;
    	$project_info->description = $request->description;
    	$project_info->save();
    	return redirect('/insert')->with('message','Project insert successfully done');	
    }

    public function update_project($id){

        $proid = base64_decode($id);

        $projects = Project::where('id',$proid)->first();
        return view('BackEnd.pages.updateproject', ['projects' => $projects]);
    }

    public function update(Request $request){
        
        $project_info = Project::find($request->proid);
        $project_info->name = $request->name;
        $project_info->date = $request->date;
        $project_info->description = $request->description;
        $project_info->save();
        return redirect('/view-project')->with('message','Project update successfully done');
    }
    
    public function delete_project($id){

        $proid = base64_decode($id);
        
        $project = Project::find($proid);
        $project->delete();
        return redirect('/view-project')->with('message','Project delete successfully done');

    }
}