<?php

namespace App\Http\Controllers\Auth;

use Auth;
use DB;
use App\Freelancer;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    protected $redirectTo = "";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
    protected function authenticated(\Illuminate\Http\Request $request, $user){
    if ($request->ajax()){
      if (Auth::check())
        if (Auth::user()->role === "freelancer") {
        	$freelancer = DB::table('freelancer')->where('freelancer_id', $user->id)->first();
        	if($freelancer->name){
        		$x = '/freelancer';
        	}
        	else{
        		$x = '/freelancer/fill-data';
        	}
          return response()->json([
              'auth' => auth()->check(),
              'user' => $user,
              'intended' => $x,
          ]);
        }else{
        	$employer = DB::table('employer')->where('employer_id', $user->id)->first();
        	//if($employer->age){
        	//	$x = '/employer';
        	//}
        	//else{
        	//	$x = '/employer/fill-data';
        	//}
          return response()->json([
            'auth' => auth()->check(),
            'user' => $user,
            'intended' => '/employer',
          ]);
        }
    }
  }
}
