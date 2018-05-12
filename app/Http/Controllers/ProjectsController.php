<?php

namespace App\Http\Controllers;

use App\Job;
use App\Bid;
use DB;
use Auth;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request){
      if (!isset($request->keywords) && empty($request->keywords) )
        $jobs = Job::where('active','1')->paginate(5);
      else{
        $jobs = Job::where('name', 'like', '%'.$request->keywords.'%')->orWhere('description', 'like', '%'.$request->keywords.'%')->where('active','1')->paginate(5);
      }
      if($request->ajax()){
        return view('projects.project-list')->with('jobs', $jobs)->with('keyword', $request->keywords)->render();
      }
      return view('projects.browse-projects')->with('jobs', $jobs)->with('keyword', $request->keywords);
    }

    public function viewProject($slug){
      $job = Job::where('slug', $slug)->get();
      $skills = DB::table('skills')
                ->join('harus_bisa_skill', 'skills.skills_id', '=', 'harus_bisa_skill.skills_id')
                ->where('harus_bisa_skill.job_id', $job[0]->job_id)
                ->select('harus_bisa_skill.skills_id', 'skills.name')
                ->get();

      $bids=$job[0]->bid;
      return view('projects.view-project')->with('job', $job)->with('skills', $skills)->with('bids', $bids);
    }

    public function browseShowcase(){
      return view('showcase.browse-showcase');
    }
}
