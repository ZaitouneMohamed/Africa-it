<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->user['given_name'] ?? $googleUser->name,
                'email' => $googleUser->email,
                'password' => \Hash::make(rand(100000, 999999)),
            ])->assignRole('user');
            // $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000, 999999))]);
        }
        Auth::login($user);
        return redirect()->intended('/')->with([
            "success" => __("You are logged in successfully")
        ]);
    }
}
