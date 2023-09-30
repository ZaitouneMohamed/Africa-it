<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categorie\CreateCategorieRequest;
use App\Models\Categorie;
use App\Models\Image;
use App\Services\ImagesServices;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    protected $imagesServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ImagesServices $imagesServices)
    {
        $this->imagesServices = $imagesServices;
    }
    public function index()
    {
        $categories = Categorie::latest()->withCount(["products", "subcategories"])->paginate(7);
        return view('admin.content.categories.index', compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategorieRequest $request)
    {
        $picture = $request->image;

        $image = $this->imagesServices->uploadImage($picture, "categories");

        $categorie = Categorie::create([
            "name" => $request->name,
        ]);
        $new_image = new Image(["url" => $image]);

        $categorie->Image()->save($new_image);

        return redirect()->route("admin.categories.index")->with([
            "success" => "categorie added successfly"
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('admin.content.categories.edit', compact("categorie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        // Validate the request data
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image', // Ensure 'image' is a valid image file (optional)
        ]);

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            try {
                $this->imagesServices->deleteImageFromDirectory($categorie->image->url, 'categories');
            } catch (\Exception $e) {
                // Handle any exceptions that may occur during image deletion
                // You can log the error or perform other error handling here
            }

            // Upload and save the new image
            $newImage = $this->imagesServices->uploadImage($request->file('image'), 'categories');
            $categorie->image->update(['url' => $newImage]);
        }

        // Update the category's name
        $categorie->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with([
            'success' => 'Category updated successfully',
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
        $categorie = Categorie::find($id);
        $image = $categorie->image;
        $image = $this->imagesServices->DeleteImageFromDirectory($image, "categories");
        $categorie->delete();
        return redirect()->route('admin.categories.index')->with([
            "success" => "categorie deleted successfly"
        ]);
    }
}
