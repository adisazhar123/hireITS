<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Job;
use App\Employer;
use App\HarusBisaSkill;
use App\ProfileFiles;
use App\WonBy;
use App\Messages;
use App\User;
use App\JobFiles;
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

    $this->validate($request, [
    'name' => 'required',
    'photos'=>'required',
    'description' => 'required',
    'min_price' => 'required',
    'max_price' => 'required',
    'date' => 'required',
    ]);

    $allowedfileExtension=['png','jpg','jpeg'];

    if ($request->hasFile('photos')){
      foreach ($request->photos as $photo) {
        $extension = $photo->getClientOriginalExtension();
        $check=in_array($extension,$allowedfileExtension);

        if (!$check){
          return redirect()->back()->withInput()->with('error', 'File has to be png or jpeg');
        }

      }

    }


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
      foreach ($request->photos as $photo) {
        $image = new JobFiles;
        $image->job_id = $job->job_id;
        $filename = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $contents = $photo->openFile()->fread($photo->getSize());
        $image->name = $contents;
        $image->type ="image/".$extension;
        $image->save();
      }
      return redirect()->back()->with('success', 'Project uploaded!');
    }
    else redirect()->back()->with('error', 'Project failed to upload!');
  }

  public function empget(){
  	return view('employer.egetdata');
  }

  public function getData(Request $request){
  	 $id = Auth::user()->id;
  	 $emp = Employer::find($id);
  	 $emp->name = $request->input('nama');
  	 $emp->title = $request->input('special');
  	 $emp->description = $request->input('details');
  	 $emp->address = $request->input('address');
  	 $emp->price = $request->input('number');
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

  public function getJobDetails(Request $request){
    $job = Job::find($request->job_id);
    return $job;
  }

  public function hireFreelancer(Request $request){
    $job = new Job;
    $job->active = 0;
    $wonby = new WonBy;
    $wonby->won_by_id = $request->won_by_id;
    $wonby->job_id = $request->job_id;
    if ($wonby->save() && $job->save()) return redirect()->back()->with('success', 'You successfully hired a freelancer. Check your dashboard for progress');
  }

  public function dashboard(){
    $projects = DB::table('won_by')
          ->join('job', 'won_by.job_id', '=', 'job.job_id')
          ->join('bid', 'job.job_id', '=', 'bid.job_id')
          ->select('*')->where('complete',0)->where('job.employer_id', Auth::user()->id)
          ->get();
      //return $projects;
     return view('employer.dashboard')->with('projects', $projects);
   }

   public function getMessages(Request $request){
     $messages = Messages::where('job_id', $request->job_id)->get();
     if(User::find($messages[0]->to_id)->role === "freelancer"){
       $name['freelancer_name']= User::find($messages[0]->to_id)->username;
       $name['freelancer_id']= User::find($messages[0]->to_id)->id;
       $name['employer_name'] = User::find($messages[0]->from_id)->username;
       $name['employer_id'] = User::find($messages[0]->from_id)->id;
     }else{
       $name['employer_name']= User::find($messages[0]->to_id)->username;
       $name['employer_id']= User::find($messages[0]->to_id)->id;
       $name['freelancer_name'] = User::find($messages[0]->from_id)->username;
       $name['freelancer_id'] = User::find($messages[0]->from_id)->id;
     }


     return response()->json([$messages, $name]);
   }

   public function sendProgress(Request $request){
     $message = new Messages;
     $message->from_id = $request->from_id;
     $message->to_id = (WonBy::where('job_id',$request->job_id)->get())[0]->won_by_id;
     $message->job_id = $request->job_id;
     $message->msg_text = $request->msg_text;
     if ($message->save())
       return redirect()->back()->with('success', 'Feedback sent to freelancer.');
     return redirect()->back()->with('error', 'Failed sending progress.');
   }

   public function storeProfilePic(Request $request){
     $file = $request->file('image');
     $contents = $file->openFile()->fread($file->getSize());
     $extension = "image/".$request->file('image')->extension();
     $pf=ProfileFiles::where('user_id',Auth::user()->id)->where('role','dp')->get();
     if ($pf->isEmpty()){
       $pf = new ProfileFiles;
       $pf->user_id = Auth::user()->id;
       $pf->name = $contents;
       $pf->img_type = $extension;
       $pf->role = "dp";
       if ($pf->save()){
         return redirect()->route('view.employer.profile');
       }
     }else{
       $pf=ProfileFiles::where('user_id',Auth::user()->id)->where('role','dp')->update([
         'name'=>$contents,
         'img_type'=>$extension
       ]);
         return redirect()->route('view.employer.profile');
     }
   }

}
