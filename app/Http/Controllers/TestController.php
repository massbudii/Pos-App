<?php

namespace App\Http\Controllers;



class TestController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function login()
    {
        return view('auth.login');
    }
}
