<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function index(){
      return view('projects.browse-projects');
    }

    public function viewProject(){
      return view('projects.view-project');
    }

    public function browseShowcase(){
      return view('showcase.browse-showcase');
    }
}
