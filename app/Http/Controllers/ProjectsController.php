<?php

namespace App\Http\Controllers;

use App\Job;
use App\Bid;
use App\WonBy;
use App\ProfileFiles;
use App\JobFiles;
use App\Messages;
use App\Showcase;
use App\ShowcaseSkill;
use DB;
use Auth;
use Illuminate\Http\Request;

class ProjectsController extends Controller{

    public function index(Request $request){
      //gak ada keyword dan filter defaultnya gini
       if (empty($request->keywords) && empty($request->filter) ){
        $jobs = Job::orderBy('job_id','DESC')->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        if(!empty($request->min_price)){
          $jobs = Job::orderBy('job_id','DESC')->where('price_min','>=',$request->min_price)->where('price_max','<=',$request->max_price)->where('active',1)->with(['harusbisaskill','harusbisaskill.skills'])->paginate(1);
        }
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
      $job_images = JobFiles::where('job_id', $job[0]->job_id)->get();
      $bids=$job[0]->bid;

      $average_bid_price = DB::table('bid')->where('job_id', $job[0]->job_id)->avg('price');

      $hasUserBid = Bid::where('job_id', $job[0]->job_id)->where('freelancer_id', Auth::user()->id)->first();
      if ($hasUserBid) $hasBid = 0;
      else $hasBid = 1;
      if (!$bids->isEmpty())
        $pf = $bids[0]->freelancer->ProfileFiles;
      else $pf="";
      //return $pf;
      return view('projects.view-project')->with('job', $job)->with('skills', $skills)->with('bids', $bids)->with('pics', $pf)
                                          ->with('job_images', $job_images)->with('hasBid', $hasBid)->with('avg_price', $average_bid_price);
    }

    public function browseShowcase(Request $request){
       $showcases = DB::table('showcase')
                   ->join('showcase_skills', 'showcase.showcase_id', '=', 'showcase_skills.showcase_id')
                   ->join('skills', 'showcase_skills.skills_id', '=', 'skills.skills_id')
                   ->join('freelancer', 'showcase.freelancer_id', '=', 'freelancer.freelancer_id')
                   ->select('showcase.showcase_id','showcase.title','freelancer.username','showcase.price','showcase.description' ,'showcase.pic','showcase.pic_type')
                   ->distinct()
                   ->paginate(10, ['showcase.showcase_id']);

      if ($request->category && $request->keywords){
      $showcases = DB::table('showcase')
                  ->join('showcase_skills', 'showcase.showcase_id', '=', 'showcase_skills.showcase_id')
                  ->join('skills', 'showcase_skills.skills_id', '=', 'skills.skills_id')
                  ->join('freelancer', 'showcase.freelancer_id', '=', 'freelancer.freelancer_id')
                  ->select('showcase.title','freelancer.username','showcase.price','showcase.description' ,'showcase.pic','showcase.pic_type')
                  ->where('skills.name','like', '%'.$request->category.'%')
                  ->where('showcase.title','like', '%'.$request->keywords.'%')
                  ->distinct('showcase.showcase_id')
                  ->paginate(10);
    }
    else if ($request->keywords){
      $showcases = DB::table('showcase')
                  ->join('showcase_skills', 'showcase.showcase_id', '=', 'showcase_skills.showcase_id')
                  ->join('skills', 'showcase_skills.skills_id', '=', 'skills.skills_id')
                  ->join('freelancer', 'showcase.freelancer_id', '=', 'freelancer.freelancer_id')
                  ->select('showcase.title','freelancer.username','showcase.price','showcase.description' ,'showcase.pic','showcase.pic_type')
                  ->where('showcase.title','like', '%'.$request->keywords.'%')
                  ->distinct('showcase.showcase_id')
                  ->paginate(10);
    }
    else if($request->category){
      $showcases = DB::table('showcase')
                  ->join('showcase_skills', 'showcase.showcase_id', '=', 'showcase_skills.showcase_id')
                  ->join('skills', 'showcase_skills.skills_id', '=', 'skills.skills_id')
                  ->join('freelancer', 'showcase.freelancer_id', '=', 'freelancer.freelancer_id')
                  ->select('showcase.title','freelancer.username','showcase.price','showcase.description' ,'showcase.pic','showcase.pic_type')
                  ->where('skills.name','like', '%'.$request->category.'%')
                  ->distinct('showcase.showcase_id')
                  ->paginate(10);
    }


      return view('showcase.browse-showcase')->with('showcases', $showcases);
    }

    public function downloadFileMessage($id){
      $file = Messages::find($id);
      return response($file['file'])
        ->header('Cache-Control', 'no-cache private')
        ->header('Content-Description', 'File Transfer')
        ->header('Content-Type', 'application/octet-stream ')
        ->header('Content-Disposition', 'attachment; filename=attachment_msg_' . $file['msg_id']."." . $file['file_type'])
        ->header('Content-Transfer-Encoding', 'binary');
    }
}
