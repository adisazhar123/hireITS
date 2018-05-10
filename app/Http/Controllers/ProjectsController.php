<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
      $jobs = Job::all();
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
