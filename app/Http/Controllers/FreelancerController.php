<?php

namespace App\Http\Controllers;

use App\Freelancer;
use Auth;
use DB;
use App\Portfolio;
use App\Skills;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index(){

      if (Auth::check())
        $id = Auth::user()->id;
      else $id=9;

      $skills = Skills::all();
      $portfolios = Freelancer::find($id)->portfolio;
      $freelancer = Freelancer::find($id);
      return view('freelancer.profile')->with('freelancer', $freelancer)->with('portfolios', $portfolios)->with('skills', $skills);
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

}
