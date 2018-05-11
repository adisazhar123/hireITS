<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request){
      if (!isset($request->keywords) && empty($request->keywords) )
        $jobs = Job::paginate(1);
      else{
        $jobs = Job::where('name', 'like', '%'.$request->keywords.'%')->orWhere('description', 'like', '%'.$request->keywords.'%')->get();
      }
      if($request->ajax()){
        return view('projects.project-list')->with('jobs', $jobs)->with('keyword', $request->keywords)->render();
      }
      return view('projects.browse-projects')->with('jobs', $jobs)->with('keyword', $request->keywords);
    }

    public function viewProject($slug){
      $job = Job::where('slug', $slug)->get();$job;
      return view('projects.view-project')->with('job', $job);
    }

    public function browseShowcase(){
      return view('showcase.browse-showcase');
    }
}
