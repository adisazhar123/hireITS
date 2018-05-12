<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Freelancer;
use App\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role'=> $data['role'],
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'username' => 'required|max:50|unique:users',
             'email' => 'required|email|max:255|unique:users',
             'password' => 'required|min:6|confirmed',
         ]);

        $role = $request->input('role');
	        if ($validator->passes()) {
	          event(new Registered($user = $this->create($request->all())));
            if($user->role==="freelancer"){
              $freelancer = new Freelancer();
              $freelancer->freelancer_id = $user->id;
              $freelancer->username = $user->username;
              if ($freelancer->save())
                return response()->json(['success' => "Registration succesful"]);
            }else{
              $employer = new Employer();
              $employer->employer_id = $user->id;
              $employer->username = $user->username;
              if($employer->save())
                return response()->json(['success' => "Registration succesful"]);
            }
	        }
	        return response()->json(['errors' => $validator->errors()]);
        	}
        }
