<?php

use App\Http\Controllers\Api\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(HomeController::class)->group(function() {
    Route::get('GetSubCategories/{id}',"GetSubCategories")->name("getSubCategories");
    Route::get('GetProducte',"GetProduct")->name("GetProduct");
    Route::post('AddToFavorite',"AddToFavorite")->name("AddToFavorite");
    Route::post('DeleteFromWishList',"DeleteFromWishList")->name("DeleteFromWishList");
    Route::get('CheckCouponCode',"CheckCouponCode")->name("CheckCouponCode");
});
