<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with([
                "error" => "these information do not match any one of our records"
            ]);
        }
    }
    function Register(RegisterRequest $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ])->assignRole("user");
        Auth::login($user);
        // $user->notify(new WelcomeEmail());
        return redirect()->intended('/auth/profile')->with([
            "success" => __("Registration successful. You can now log-in.")
        ]);
    }
}
