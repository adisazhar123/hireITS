<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfileFiles;
use DB;
use App\Employer;
use App\Freelancer;
use App\Review;
use App\TopFreelancer;
use App\TopEmployer;

class UsersController extends Controller
{
    public function index(){
      return view('users.profile');
    }

    public function test(Request $request){
      return $request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homepage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getImage(Request $request){
      $id = $request->id;
      $pf = ProfileFiles::where('user_id', $id)->where('role', 'dp')->get();
      if (!count($pf)) return "My Account";
      $name = base64_encode($pf[0]->name);
      $type = $pf[0]->img_type;
      return '<img style="height:30px; width:37px; border-radius: 3px" src="data:'.$type.';base64,'.$name.'"/>';
    }

    public function topuser(){
      $top_freelancers = TopFreelancer::all();
      $top_employers = TopEmployer::all();
    	return view('user.topuser')->with('top_freelancers', $top_freelancers)->with('top_employers', $top_employers);
    }
}
