<?php

namespace App\Http\Controllers;

use App\Models\Banier;
use App\Models\Categorie;
use App\Models\Image;
use App\Models\Product;
use App\Models\Review;
use App\Models\SubCategorie;
use App\Services\ImagesServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $imagesServices;
    public function __construct(ImagesServices $imagesServices)
    {
        $this->imagesServices = $imagesServices;
    }
    function index()
    {
        $last_categories = Categorie::latest()->with('Image')->take(4)->get();
        $prenium_product = Product::Prenium()->Active()->with(["SubCategorie", "Images", "Reviews"])->get();
        $last_product = Product::latest()->Active()->with(["SubCategorie", "Images", "Reviews"])->get();
        $random_products = Product::inRandomOrder()
            ->Active()
            ->limit(5)
            ->get();
        $baniers = Banier::with("Categorie")->get();
        $subCategories = SubCategorie::latest()->get();
        return view('landing.home')->with([
            "lastCategories" => $last_categories,
            "prenium_product" => $prenium_product,
            "last_products" => $last_product,
            "random_products" => $random_products,
            "subCategories" => $subCategories,
            "baniers" => $baniers
        ]);
    }
    public function AllProducts(Request $request)
    {
        $query = Product::query();

        if ($request->min) {
            $query->where('price', '>=', $request->min);
        }

        if ($request->max) {
            $query->where('price', '<=', $request->max);
        }

        $products = $query->with("SubCategorie")->paginate(10);

        return view('landing.ProductsIndex', compact("products"));
    }

    function OneProduct($id)
    {
        $product = Product::with(['Reviews', 'SubCategorie', 'Images'])->findOrFail($id);
        return view('landing.ProductDetail', compact("product"));
    }
    function ProductOfCategorie(Request $request, $id)
    {
        // Retrieve the category and its subcategories with their products
        $categorie = Categorie::find($id);
        // Start with all products related to the category
        $query = $categorie->products();

        if ($request->min) {
            $query->where('price', '>=', $request->min);
        }

        if ($request->max) {
            $query->where('price', '<=', $request->max);
        }

        // Paginate the results
        $products = $query->with('subcategorie')->paginate(20);

        return view('landing.ProductsIndex', compact('products', 'id'));
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
            'review' => $request->body,
            'stars' => $request->rating,
        ]);
        return redirect()->back()->with([
            "success" => "review added successfully"
        ]);
    }
    function Contact()
    {
        return view('landing.contact');
    }
    function about()
    {
        return view('landing.about');
    }
    public function Search(Request $request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request->word . '%')->paginate(15);
        return view('landing.ProductsIndex', compact("products"));
    }

}
