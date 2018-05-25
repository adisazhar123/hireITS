<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Showcase;
use App\Job;
use App\User;
use App\Review;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('complete', 1)->get();
        $showcases = Showcase::limit(3)->orderBy('showcase_id', 'desc')->get();
        $users = intval(User::count());
        $happy_clients = Review::where('rating','>=','3')->get();
        return view('tes')->with('showcases', $showcases)->with('jobs', $jobs)->with('users', intval($users))
                ->with('ratings', $happy_clients);
    }
}
