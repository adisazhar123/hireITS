<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\HarusBisaSkill;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
  public function postProject(){
    return view('employer.post-project');
  }
  public function storeProject(Request $request){
    $job=new Job;
    $job->name = $request->name;
    $job->description = $request->description;
    $job->employer_id = Auth::user()->id;
    $job->price_min = $request->min_price;
    $job->price_max = $request->max_price;
    $job->active = 1;
    $job->deadline = date_format(date_create($request->date), 'Y-m-d');
    $job->slug = str_replace(' ', '-', strtolower($request->name))."-".time();
    if ($job->save()){
      for ($i=0; $i <count($request->search_skills) ; $i++) {
        $harus_bisa = new HarusBisaSkill;
        $harus_bisa->job_id = $job->job_id;
        $harus_bisa->skills_id = $request->search_skills[$i];
        $harus_bisa->save();
      }
      return redirect()->back();
    }
    else return "ERROR";
  }

  public function empget(){
  	return view('employer.egetdata');
  }
}
