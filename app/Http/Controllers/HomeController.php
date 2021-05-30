<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
    public function index()
    {
        return view('home');
    }*/
    function main(){
        return view('frontend/home');
    }
    function course(){
        return view('frontend/course');
    }
    function success(){
        return view('frontend/success');
    }
    function successP2(){
        return view('frontend/successP2');
    }
    function successP3(){
        return view('frontend/successP3');
    }
    function blogs(){
        return view('frontend/blogs');
    }
    function contact(){
        return view('frontend/contact');
    }
    function login(){
        return view('frontend/login');
    }
    function register(){
        return view('frontend/register');
    }
}
