<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
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
    }
}
