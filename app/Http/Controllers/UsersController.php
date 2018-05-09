<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use DB;

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
        /*$this->validate($request,[
            'login_username' => 'required',
            'login_password' => 'required'
        ]);

        $user = new Users([
            'email' => $request->get('login_username'),
            'password' => $request->get('login_password')
        ]);
        $user->save();*/

        $mail = $request->input('email');
        $passwd = $request->input('password');
        $name = ''; $role ='';
        $data = array('name'=>$name, 'email'=>$mail, 'password'=>$passwd, 'role'=>$role);

        echo $mail; echo '<br>';
        echo $passwd;
        DB::table('users')->insert($data);
        echo 'Insert success';
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
}
