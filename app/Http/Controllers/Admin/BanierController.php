<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banier;
use App\Models\Categorie;
use App\Models\Image;
use App\Services\ImagesServices;
use Illuminate\Http\Request;

class BanierController extends Controller
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
        $baniers = Banier::with("Categorie")->get();
        return view('admin.content.baniers.index', compact("baniers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.content.baniers.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "categorie" => "required",
            "Image" => "required|image|mimes:jpeg,png,jpg",
        ]);
        $picture = $request->Image;

        $image = $this->imagesServices->uploadImage($picture, "baniers");
        $banier = Banier::create([
            "categorie_id" => $request->categorie,
        ]);
        $new_image = new Image(["url" => $image]);

        $banier->Image()->save($new_image);
        return redirect()->route('admin.banier.index')->with([
            "success" => "banier added with success"
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
        $categories = Categorie::all();
        $banier = Banier::findOrFail($id);
        return view('admin.content.baniers.edit', compact(["banier", "categories"]));
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
        $categorie = Banier::findOrFail($id);

        // Validate the request data
        $this->validate($request, [
            'categorie' => 'required',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            try {
                $this->imagesServices->deleteImageFromDirectory($categorie->image->url, 'baniers');
            } catch (\Exception $e) {
            }
            $newImage = $this->imagesServices->uploadImage($request->file('image'), 'baniers');
            $categorie->image->update(['url' => $newImage]);
        }
        $categorie->update([
            'categorie_id' => $request->categorie,
        ]);

        return redirect()->route('admin.banier.index')->with([
            'success' => 'banier updated successfully',
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
        $categorie = Banier::findOrFail($id);

        // Delete the associated image from storage
        $this->imagesServices->deleteImageFromDirectory($categorie->image->url, 'baniers');

        // Delete the Banier record from the database
        $categorie->delete();

        return redirect()->route('admin.banier.index')->with([
            'success' => 'banier deleted successfully',
        ]);
    }
}
