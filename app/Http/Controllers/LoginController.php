<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{

    public function index()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view('auth.register');        
    }

    public function registerStore()
    {
        
    }
}
