<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //method fro auth login
    public function index(){
        return view('auth.login');
    }
}
