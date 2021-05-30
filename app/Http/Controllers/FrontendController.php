<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        return view('frontend/home');
    }
    function course(){
        return view('frontend/course');
    }
    function success(){
        return view('frontend/success');
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
