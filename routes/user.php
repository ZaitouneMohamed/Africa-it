<?php

use App\Http\Controllers\Auth\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

// Define user-specific routes
Route::middleware(['auth'])->controller(ProfileController::class)->name("profile.")->group(function () {
    Route::get('/', "index")->name("index");
    Route::get('/profile', "profile")->name("profile");
});
