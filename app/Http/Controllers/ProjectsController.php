<?php

namespace App\Http\Controllers;

use App\Job;
use App\Bid;
use DB;
use Auth;
use Illuminate\Http\Request;

class ProjectsController extends Controller{

    public function index(Request $request){
      //gak ada keyword dan filter defaultnya gini
      if (empty($request->keywords) && empty($request->filter) ){
        $jobs = Job::orderBy('job_id','DESC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
      }
      //gak ada keyword tapi ada filter//
      else if (empty($request->keywords) && !empty($request->filter)){
        if ($request->filter === "newest-first")
          $jobs = Job::orderBy('job_id', 'DESC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if ($request->filter === "lowest-budget-first")
          $jobs = Job::orderBy('price_max','ASC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if($request->filter === "highest-budget-first")
          $jobs = Job::orderBy('price_max','DESC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if($request->filter === "lowest-bid")
          $jobs = Job::orderBy('no_of_bids','ASC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if($request->filter === "highest-bid")
          $jobs = Job::orderBy('no_of_bids','DESC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
      }
      //ada keyword dan filter
      else if(!empty($request->keywords) && !empty($request->filter)){
        if ($request->filter === "newest-first")
          $jobs = Job::orderBy('job_id', 'DESC')->where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->orWhere('description', 'like', '%'.$request->keywords.'%')
          ->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if ($request->filter === "lowest-budget-first")
          $jobs = Job::orderBy('price_max','ASC')->where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->orWhere('description', 'like', '%'.$request->keywords.'%')
          ->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if ($request->filter === "highest-budget-first")
          $jobs = Job::orderBy('price_max','DESC')->where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->orWhere('description', 'like', '%'.$request->keywords.'%')
          ->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if ($request->filter === "lowest-bid")
          $jobs = Job::orderBy('no_of_bids','ASC')->where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->orWhere('description', 'like', '%'.$request->keywords.'%')
          ->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        else if ($request->filter === "highest-bid")
          $jobs = Job::orderBy('no_of_bids','DESC')->where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->orWhere('description', 'like', '%'.$request->keywords.'%')
          ->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
      }
      //ada keyword gak ada filter
      else if (!empty($request->keywords)){
        if (empty($request->min_price)) $request->min_price=0;
        if(empty($request->max_price)) $request->max_price=9999999999;
        $jobs = Job::where('name', 'like', '%'.$request->keywords.'%')->where('active', 1)->where('price_min','>=',$request->min_price)->orWhere('description', 'like', '%'.$request->keywords.'%')
        ->where('active', 1)->where('price_max','<=',$request->max_price)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
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
