<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Order;
use App\Models\Parameter;
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
        Paginator::useBootstrap();

        View::composer("landing.layouts.navbar", function ($view) {
            $categories = Categorie::latest()->with("subcategories")->get();
            $parameter = Parameter::take(1);

            $view->with([
                'categories' => $categories,
                'otherVariable' => $parameter,
            ]);
        });
        View::composer("profile.dash", function ($view) {
            $view->with('orders_count', Auth::user()->Orders->unique('order_number')->count());
        });
        View::composer("admin.content.parameters", function ($view) {
            $view->with('parameter', Parameter::take(1) );
        });
    }
}
