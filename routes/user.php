<?php

use Illuminate\Support\Facades\Route;

// Define user-specific routes
Route::middleware(['auth'])->group(function () {
    Route::get('/',function(){
        return "User Profile";
    });
});
