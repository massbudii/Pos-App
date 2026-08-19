<?php

namespace App\Http\Controllers;



class AuthController extends Controller
{
    public function FormLogin()
    {
        return view('auth.login');
    }
}
