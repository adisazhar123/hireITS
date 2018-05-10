<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request){
      if (!isset($request->keywords) && empty($request->keywords) )
        $jobs = Job::all();
      else{
        $jobs = Job::where('name', 'like', '%'.$request->keywords.'%')->orWhere('description', 'like', '%'.$request->keywords.'%')->get();
      }
      return view('projects.browse-projects')->with('jobs', $jobs);
    }

    public function viewProject($slug){
      $job = Job::where('slug', $slug)->get();$job;
      return view('projects.view-project')->with('job', $job);
    }

    public function browseShowcase(){
      return view('showcase.browse-showcase');
    }
}
