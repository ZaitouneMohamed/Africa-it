<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Review;
use App\Models\SubCategorie;
use Illuminate\Http\Request;

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
        $products = Product::with("SubCategorie")->paginate(20);
        return view('landing.ProductsIndex',compact("products"));
    }
    function OneProduct($id)
    {
        $product = Product::with(['Reviews', 'SubCategorie', 'Images'])->findOrFail($id);
        return view('landing.ProductDetail', compact("product"));
    }
    function ProductOfCategorie($id)
    {
        // Retrieve the category and its subcategories with their products
        $categorie = Categorie::find($id);
        dd($categorie->products);
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
    function AddReview($id, Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "body" => "required|min:1",
            "email" => "required|email|max:200",
            "name" => "required|max:200",
        ]);
        $review = Review::create([
            'product_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'review'=>$request->body,
            'stars'=> $request->rating,
        ]);
        return redirect()->back()->with([
            "success" => "review added successfully"
        ]);
    }
}
