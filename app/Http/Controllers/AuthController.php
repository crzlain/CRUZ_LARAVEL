<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }
    function showlogin(){
        return view('authentication.login');
    }

    function performlogin(){

    }
    function performregister(){

    }
}