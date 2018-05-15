<?php

namespace App\Http\Controllers;

use App\Freelancer;
use Auth;
use App\User;
use DB;
use App\Portfolio;
use App\Skills;
use App\Job;
use App\Bid;
use App\ProfileFiles;
use App\Diberkati;
use App\WonBy;
use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FreelancerController extends Controller
{
    public function index(){

      if (Auth::check())
        $id = Auth::user()->id;
      else $id=9;

      $skills = DB::table('skills')
                ->join('diberkati', 'skills.skills_id', '=', 'diberkati.skills_id')
                ->where('diberkati.freelancer_id', $id)
                ->select('diberkati.skills_id', 'diberkati.freelancer_id', 'skills.name')
                ->get();
      $portfolios = Freelancer::find($id)->portfolio;
      $freelancer = Freelancer::find($id);
      $pf = ProfileFiles::where('user_id', $id)->where('role', 'dp')->get();
      $cover=ProfileFiles::where('user_id', $id)->where('role', 'cover')->get();
      return view('freelancer.profile')->with('freelancer', $freelancer)->with('portfolios', $portfolios)->with('skills', $skills)->with('pf', $pf)
      ->with('cover', $cover);
    }

    public function getProfile(Request $request){
      if (Auth::check())
        $id = Auth::user()->id;
      else $id=9;
      $freelancer = Freelancer::find($id);
      return response()->json($freelancer);
    }

    public function updateProfile(Request $request){
      $freelancer = Freelancer::find($request->input('id'));
      $freelancer->name = $request->input('name');
      $freelancer->title = $request->input('title');
      $freelancer->description = $request->input('description');
      $freelancer->price = $request->input('price');
      $user = Auth::user();
      $user->hassetprofile = 1;

      for ($i=0; $i <count($request->skills) ; $i++) {
        $diberkati = new Diberkati;
        $diberkati->freelancer_id=$request->input('id');
        $diberkati->skills_id = $request->skills[$i];
        $diberkati->save();
      }

      if ($freelancer->save() && $user->save())
        return response()->json(["success"=>1]);
      else return response()->json(["success"=>0]);

    }

    public function portfolio(){
      //$portfolios = Freelancer::find(Auth::user()->id)->portfolio;
      $portfolio = Portfolio::where('portfolio_id','5')->get();

      echo '<img src="data:'.$portfolio[0]->img_type.';base64,'.base64_encode( $portfolio[0]->img_name ).'"/>';

    }

    public function addPortfolio(Request $request){
      $file = $request->file('image');
      $contents = $file->openFile()->fread($file->getSize());

      $extension = "image/".$request->file('image')->extension();

      $portfolio = new Portfolio;

      $portfolio->name = $request->input('port_name');
      $portfolio->freelancer_id = Auth::user()->id;
      $portfolio->description = $request->input('port_desc');
      $portfolio->img_type=$extension;
      $portfolio->img_name = $contents;
      if ($portfolio->save())
        return "success";

    }

    public function deletePortfolio($id){
      $portfolio = Portfolio::find($id);
      if($portfolio->isEmprt()) return "gaono";
      if ($portfolio->delete())
        return "success";
    }

    public function getSkills(Request $request){
      $term = trim($request->q);
     if (empty($term)) {
         return \Response::json([]);
     }
     $tags = Skills::where('name','like','%'.$term.'%')->limit(5)->get();


     return response()->json($tags);
   }

   public function dashboard(){
     $projects = DB::table('won_by')
           ->join('job', 'won_by.job_id', '=', 'job.job_id')
           ->join('bid', 'job.job_id', '=', 'bid.job_id')
           ->select('*')->where('complete',0)->where('won_by.won_by_id', Auth::user()->id)
           ->get();
      return view('freelancer.dashboard')->with('projects', $projects);
    }

    public function bidProject(Request $request){
      $bid = Bid::where('job_id', $request->job_id)->where('freelancer_id', Auth::user()->id)->get();
      if (!$bid->isNotEmpty()){
        $bid = new Bid;
        $job_id = $request->job_id;
        $bid->job_id = $job_id;
        $bid->freelancer_id = Auth::user()->id;
        $bid->price = $request->bidding_price;
        $bid->comment = $request->comment;
        $bid->deadline = date_format(date_create( $request->deadline), 'Y-m-d');
        if ($bid->save())
          return response()->json(["success"=> 1]);
        else {
          return response()->json(["success"=> 0]);

        }
      }
      return response()->json(["success"=> -1]);
    }

     	public function freeget(){
     		return view('freelancer.fgetdata');
     	}

     	public function getData(Request $request){
     		$validator = Validator::make($request->all(), [
             'nama' => 'required',
             'age' => 'required',
             'major' => 'required',
         	]);

     		if($validator->passes()){
     			$id = Auth::user()->id;
	     		$fl = Freelancer::find($id);
	     		$fl->name = $request->input('nama');
	     		$fl->age = $request->input('age');
	     		$fl->major = $request->input('major');
	     		$fl->description = $request->input('description');
	     		$fl->title = $request->input('title');
	    		$user = Auth::user();
	         	$user->hassetprofile = 1;

	     		if($fl->save() && $user->save()){
	     			return view('freelancer.profile');
	     		}
     		}
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
            return redirect()->route('view.freelancer.profile');
          }
        }else{
          $pf=ProfileFiles::where('user_id',Auth::user()->id)->where('role','dp')->update([
            'name'=>$contents,
            'img_type'=>$extension
          ]);
            return redirect()->route('view.freelancer.profile');
        }
      }

      public function addnewSkills(Request $request){
        $freelancer_id = $request->id;
        for ($i=0; $i <count($request->skills) ; $i++) {
          $diberkati = new Diberkati;
          $diberkati->freelancer_id=$freelancer_id;
          $diberkati->skills_id = $request->skills[$i];
          $diberkati->save();
        }
        return "OK";
      }
      public function deleteSkill(Request $request){
        $skill = Diberkati::where('skills_id', $request->skill_id)->where('freelancer_id', Auth::user()->id);
        if($skill->delete())
          return "ok";
        return "fail";
      }

      public function viewFreelancer($username){
        $id = User::where('username', $username)->first();
        if ($id === null) return "No freelancer found with the given username: ". $username;
        $freelancer = Freelancer::find($id);
        $portfolios = Freelancer::find($freelancer[0]->freelancer_id)->portfolio;

        $skills = DB::table('skills')
                  ->join('diberkati', 'skills.skills_id', '=', 'diberkati.skills_id')
                  ->where('diberkati.freelancer_id', $freelancer[0]->freelancer_id)
                  ->select('diberkati.skills_id', 'diberkati.freelancer_id', 'skills.name')
                  ->get();

        $pf = ProfileFiles::where('user_id',$id->id)->where('role', 'dp')->get();
        $cover=ProfileFiles::where('user_id', $id->id)->where('role', 'cover')->get();
        return view('freelancer.view-freelancer')->with('freelancer', $freelancer)->with('portfolios',$portfolios)->with('skills', $skills)->with('pf', $pf)
        ->with('cover', $cover);
      }

      public function getOngoingProjects(){
      //  $projects = WonBy::where('won_by_id', Auth::user()->id)->get();
        //$projects = WonBy::with('won_by_id', Auth::user()->id)->get();

        $projects = DB::table('won_by')
              ->join('job', 'won_by.job_id', '=', 'job.job_id')
              ->join('bid', 'job.job_id', '=', 'bid.job_id')
              ->select('*')->where('complete',0)
              ->get();
        return $projects;
      }

      public function sendProgress(Request $request){
        $message = new Messages;
        $message->from_id = $request->from_id;
        $message->to_id = $request->to_id;
        $message->job_id = $request->job_id;
        $message->msg_text = $request->msg_text;
        $message->progress = $request->exampleRadios;
        if ($message->save())
          return redirect()->back()->with('success', 'Progress sent to employer.');
        return redirect()->back()->with('error', 'Failed sending progress.');
      }

      public function getJobDetails(Request $request){
        $job = Job::find($request->job_id);
        return $job;
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
	 }
