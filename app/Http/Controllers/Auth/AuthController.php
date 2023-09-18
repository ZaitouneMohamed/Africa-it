<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    function LoginForm()
    {
        return view('auth.login');
    }
    function RegisterForm()
    {
        return view('auth.register');
    }
    function Login(LoginRequest $request)
    {
        dd($request->all());
    }
    function Register(RegisterRequest $request)
    {
        dd($request->all());
    }
}
