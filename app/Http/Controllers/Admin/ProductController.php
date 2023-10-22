<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\products\CreateProductRequest;
use App\Http\Requests\Admin\products\UpdateProductRequest;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Services\ImagesServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $imagesservices;

    public function __construct(ImagesServices $ImagesServices)
    {
        $this->imagesservices = $ImagesServices;
    }
    public function index()
    {
        $products = Product::with("SubCategorie")->paginate(15);
        return view('admin.content.products.index', compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = Product::create([
            "title" => $request->title,
            "description" => $request->description,
            "slug" => Str::slug($request->title),
            "price" => $request->price,
            "active" => 1,
            "old_price" => $request->old_price,
            "sub_categorie_id" => $request->sub_categorie,
        ]);
        if ($request->has('images')) {
            foreach ($request->file('images') as $picture) {
                $image = $this->imagesservices->uploadImage($picture, "products");
                $new_image = new Image(["url" => $image]);
                $product->Images()->save($new_image);
            }
        }

        return redirect()->route('admin.product.index')->with([
            "success" => "produc added successfly"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('landing.ProductDetail', compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.content.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($request->has('images')) {
            foreach ($request->file('images') as $picture) {
                $image = $this->imagesservices->uploadImage($picture, "products");
                $newImage = new Image(["url" => $image]);
                $product->images()->save($newImage);
            }
        }
        if ($request->has('fiche_technique')) {
            $fichetechnique = $request->fiche_technique;
            $file = $this->imagesservices->uploadImage($fichetechnique, "fiches_technique");
            $product->update(['fiche_technique' => $file]);
        }
        $product->update([
            "title" => $request->title,
            "description" => $request->description,
            "slug" => Str::slug($request->title),
            "price" => $request->price,
            "old_price" => $request->old_price,
            "sub_categorie_id" => $request->sub_categorie,
        ]);
        // Handle image updates

        return redirect()->route('admin.product.index')->with([
            "success" => "Product updated successfully",
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
