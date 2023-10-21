<?php

use App\Http\Controllers\Admin\BanierController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ParameterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategorieController;
use App\Http\Controllers\Admin\SwitchController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\Profile\ProfileController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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
    Route::get('/Search', "Search")->name("Search");
    Route::get('/Product/{id} ', 'OneProduct')->name("oneProduct");
    Route::get('/categories/{id} ', 'ProductOfCategorie')->name("ProductOfCategorie");
    Route::post('/AddReview/{id} ', 'AddReview')->name("AddReview");
});


Route::controller(CartController::class)->name("cart.")->group(function () {
    Route::middleware("auth")->group(function () {
        Route::get('checkout', 'cartlist')->name('list')->middleware("auth");
        Route::post('cart/store', 'addToCart')->name('store')->middleware("auth");
    });
    // Route::get('cart', 'cartlist')->name('cart.list');
    Route::post('cart/remove', 'removeCart')->name('remove.item');
    Route::get('AddToCart', 'addToCart')->name('addProdustToCart');
    Route::delete('deleteProduct',  'deleteProduct')->name('deleteProduct');
    Route::patch('updateCart',  'updateCart')->name('updateCart');
    Route::get('getCartCount',  'getCartCount')->name('getCartCount');
    Route::get('getCartContent',  'getCartContent')->name('getCartContent');
});

// Orders controller

// Route::controller(OrderController::class)->name("order.")->group(function () {
//     Route::post('placeOrder', "PlaceOrder")->name("place");
// });

Route::post('placeOrder', OrderController::class)->name("order.place");


// Auth Controller

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::middleware("guest")->group(function () {
            Route::get("login", "LoginForm")->name("login");
            Route::get("register", "RegisterForm")->name("register");
            Route::post("login", "Login")->name("login.function");
            Route::post("register", "Register")->name("register.function");
        });
        Route::get("logout", "logout")->name("logout")->middleware("auth");
    });
    // Google login & register
    Route::get('/google/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
});




// User Profile Routes

Route::middleware(['auth'])->prefix("user")->name("user.profile.")->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/', "index")->name("index");
        Route::get('/profile', "profile")->name("profile");
        Route::get('/myOrders', "MyOrders")->name("MyOrders");
        Route::get('/WishList', "WishList")->name("WishList");
        Route::get('/OrderDetails/{order_number}', "OrderDetails")->name("OrderDetails");
    });
    Route::resource("adresse", UserAdresse::class)->only(['index', 'create', 'store']);
});




// Admin Routes
Route::prefix("admin")->middleware(['web', 'AdminRedirection', 'role:admin'])->name("admin.")->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource("product", ProductController::class);
    Route::resource("categories", CategorieController::class);
    Route::resource("branch", BranchController::class);
    Route::resource("TimeSlot", TimeSlotController::class);
    Route::resource("banier", BanierController::class);
    Route::resource("SubCategorie", SubCategorieController::class);
    Route::controller(ParameterController::class)->name("parameter.")->group(function () {
        Route::get('parameter', "ParameterIndex")->name("show");
    });
    // orders
    Route::controller(AdminOrderController::class)->group(function () {
        Route::get('/orders', 'OrdersList')->name("orders.all");
        Route::get('/orders/confirmed', 'ConfirmedOrders')->name("orders.ConfirmedOrders");
        Route::get('/orders/annuller', 'AnnuledOrders')->name("orders.AnnuledOrders");
        Route::get('/order/{order_number}', 'ViewOrder')->name("order.view");
        Route::get('/ChangeStatue/{statue}-{order_number}', 'ChangeStatue')->name("order.ChangeStatue");
    });
    // SWITCH CONTROLLER
    Route::controller(SwitchController::class)->group(function () {
        Route::get('SwitchProductActive/{id}', 'SwitchActiveModeForProduct')->name("SwitchActiveModeForProduct");
        Route::get('SwitchPreniumModeForProduct/{id}', 'SwitchPreniumModeForProduct')->name("SwitchPreniumModeForProduct");
        Route::get('SwitchStatueOfTimeSlot/{id}', 'SwitchStatueOfTimeSlot')->name("SwitchStatueOfTimeSlot");
    });
    //
    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/deleteImage/{id}', 'deleteImage')->name("deleteimage");
        Route::get('/profile', 'profile')->name("profile");
        Route::post('/SetProfile', 'SetProfile')->name("SetProfile");
        Route::post('/updatePassword', 'updatePassword')->name("updatePassword");
        Route::get('/ReviewsList', 'ReviewsList')->name("ReviewsList");
    });
});

Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name("admin.login")->middleware("guest");
