<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\Employer;
use App\HarusBisaSkill;
use App\ProfileFiles;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
  public function index(){
    if (Auth::check())
      $id = Auth::user()->id;
    else $id=9;

    $employer = Employer::find($id);
    $pf = ProfileFiles::where('user_id', $id)->where('role', 'dp')->get();
    $cover=ProfileFiles::where('user_id', $id)->where('role', 'cover')->get();

  	return view('employer.profile')->with('employer', $employer)->with('pf', $pf)->with('cover', $cover);
  }

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

  public function getData(Request $request){
  	 $id = Auth::user()->id;
  	 $emp = Employer::find($id);
  	 $emp->age = $request->input('number');
  	 $emp->major = $request->input('special');
  	 $user = Auth::user();
     $user->hassetprofile = 1;

     if($emp->save() && $user->save()){
     	return view('employer.profile');
     }
  }

  public function getProfile(Request $request){
    if (Auth::check())
      $id = Auth::user()->id;
    else $id=9;
    $employer = Employer::find($id);
    return response()->json($employer);
  }
  public function updateProfile(Request $request){
    $employer = Employer::find($request->input('id'));
    $employer->name = $request->input('name');
    $employer->title = $request->input('title');
    $employer->description = $request->input('description');
    $employer->price = $request->input('price');
    $employer->address = $request->input('address');
    $user = Auth::user();
    $user->hassetprofile = 1;

    if ($employer->save() && $user->save())
      return response()->json(["success"=>1]);
    else return response()->json(["success"=>0]);

  }
}
