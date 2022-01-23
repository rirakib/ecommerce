<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    //
    public function login(){
        if(session()->has('email')){
            return redirect()->route('home');
        }
        return view('auth.login.login');
    }
    public function register(){
        if(session()->has('email')){
            return redirect()->route('home');
        }
        return view('auth.register.register');
    }
}
