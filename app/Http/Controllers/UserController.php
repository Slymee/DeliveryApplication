<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;

class UserController extends Controller
{
    public function loginFormDisplay()
    {
        return view('login');
    }

    public function signupFormDisplay()
    {
        return view('register');
    }

    public function login(LoginFormRequest $request)
    {

    }

    public function register(RegisterFormRequest $request)
    {

    }
}
