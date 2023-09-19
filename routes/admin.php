<?php
// In routes/admin.php
use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('admin.index');
});

// product functions
Route::resource("product", ProductController::class)->except("show");

Route::get('/login', function () {
    return view('admin.auth.login');
})->name("login");

