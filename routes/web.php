<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    // Home Page
    Route::get('/', 'index');
});

Route::controller(CartController::class)->name("cart.")->group(function () {
    Route::middleware("auth")->group(function(){
        Route::get("/cart", "cartlist")->name("list");
    });
    Route::get('AddToCart/{id}', 'addToCart')->name('addProdustToCart');
});

// product show
Route::resource("product", ProductController::class)->only("show");

Route::prefix("admin")->middleware(['auth', 'role:admin'])->group(function () {
    // home
    Route::get('/', function () {
        return view('admin.index');
    });
    // product functions
    Route::resource("product", ProductController::class)->except("show");
});


// Auth Controller

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get("login", "LoginForm")->name("login");
        Route::get("register", "RegisterForm")->name("register");
        Route::post("login", "Login")->name("login");
        Route::post("register", "Register")->name("register");
    });
});
