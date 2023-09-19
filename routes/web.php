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
        Route::get('checkout', 'cartlist')->name('list')->middleware("auth");
        Route::post('cart/store', 'addToCart')->name('store')->middleware("auth");
    });
    // Route::get('cart', 'cartlist')->name('cart.list');
    Route::post('cart/remove', 'removeCart')->name('remove.item');
    Route::get('AddToCart/{id}', 'addToCart')->name('addProdustToCart');
    Route::delete('deleteProduct',  'deleteProduct')->name('deleteProduct');
    Route::patch('updateCart',  'updateCart')->name('updateCart');
    Route::get('getCartCount',  'getCartCount')->name('getCartCount');
    Route::get('getCartContent',  'getCartContent')->name('getCartContent');
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
        Route::get("logout", "logout")->name("logout");
    });
});
