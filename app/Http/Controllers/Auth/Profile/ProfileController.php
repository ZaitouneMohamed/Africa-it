<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()
    {
        return view('profile.index');
    }
    function profile()
    {
        return view('profile.profile');
    }
}
