<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategorieController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Profile\ProfileController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAdresse;
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
    Route::get('/', 'index')->name("home");
    Route::get('/contact', 'contact')->name("contact");
    Route::get('/about', 'about')->name("about");
    // All Products
    Route::get('/AllProducts', 'AllProducts')->name("allProducts");
    Route::get('/Product/{id} ', 'OneProduct')->name("oneProduct");
    Route::get('/categories/{id} ', 'ProductOfCategorie')->name("ProductOfCategorie");
    Route::get('/SwitchPreniumModeForProduct/{id} ', 'SwitchPreniumModeForProduct')->name("SwitchPreniumModeForProduct");
    Route::post('/AddReview/{id} ', 'AddReview')->name("AddReview");
});

Route::controller(CartController::class)->name("cart.")->group(function () {
    Route::middleware("auth")->group(function () {
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
// Route::resource("product", ProductController::class)->only("show");


// Auth Controller

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::middleware("guest")->group(function () {
            Route::get("login", "LoginForm")->name("login");
            Route::get("register", "RegisterForm")->name("register");
            Route::post("login", "Login")->name("login");
            Route::post("register", "Register")->name("register");
        });
        Route::get("logout", "logout")->name("logout")->middleware("auth");
    });
});

// User Profile Routes

Route::middleware(['auth'])->prefix("user")->name("user.profile.")->group(function () {
    Route::controller(ProfileController::class)->group(function() {
        Route::get('/', "index")->name("index");
        Route::get('/profile', "profile")->name("profile");
    });
    Route::resource("adresse",UserAdresse::class)->only(['index','create','store']);
});




// Admin Routes
Route::prefix("admin")->name("admin.")->group(function () {
    Route::middleware(['web', 'AdminRedirection', 'role:admin'])->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::resource("product", ProductController::class);
        Route::resource("categories", CategorieController::class);
        Route::resource("branch", BranchController::class);
        Route::resource("TimeSlot", TimeSlotController::class);
        Route::resource("SubCategorie", SubCategorieController::class);
    });
    // home
    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name("login")->middleware("guest");
});
