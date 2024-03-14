<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function popup()
    {
        return view('access');
    }
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    public function resume(){
        return view('resume');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
}
