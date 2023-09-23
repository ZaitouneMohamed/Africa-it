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
        $products = Product::latest()->take(20)->get();
        return view('landing.ProductsIndex', compact('products'));
    }
    function OneProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('landing.ProductDetail', compact("product"));
    }
    function ProductOfCategorie($id)
    {
        // Retrieve the category and its subcategories with their products
        $categoryWithProducts = Categorie::with(['subcategories.products'])->find($id);

        // You can access the products like this
        $products = $categoryWithProducts->subcategories->flatMap(function ($subcategory) {
            return $subcategory->products;
        });
        return view('landing.ProductsIndex', compact('products'));
    }
    function SwitchPreniumModeForProduct($id)
    {
        $product = Product::find($id);
        $product->prenium = !$product->prenium;
        $product->save();
        return redirect()->back()->with([
            "success" => "product updated sucessfly"
        ]);
    }
}
