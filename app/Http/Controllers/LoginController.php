<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loadLoginIndex(){
        return view('login');
    }
    public function loadRegisterIndex(){
        return view('register');
    }
}
