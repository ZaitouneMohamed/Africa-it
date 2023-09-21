<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\SubCategorie;

class HomeController extends Controller
{
    function index()
    {
        $last_categories = Categorie::latest()->take(4)->get();
        $prenium_product = Product::Prenium()->get();
        $last_product = Product::latest()->get();
        $subCategories = SubCategorie::latest()->get();
        return view('landing.home')->with([
            "lastCategories" => $last_categories,
            "prenium_product" => $prenium_product,
            "last_products" => $last_product,
            "subCategories" => $subCategories
        ]);
    }
    function AllProducts()
    {
        return view('landing.ProductsIndex');
    }
}
