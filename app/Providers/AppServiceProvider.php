<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap() ;

        View::composer("landing.layouts.navbar", function ($view) {
                $view->with('categories', Categorie::latest()->with("subcategories")->get());
        });
        View::composer("profile.dash", function ($view) {
                $view->with('orders_count', Auth::user()->Orders->unique('order_number')->count());
                // $view->with('categories', Categorie::latest()->with("subcategories")->get());
                // $view->with('categories', Categorie::latest()->with("subcategories")->get());
        });
    }
}
