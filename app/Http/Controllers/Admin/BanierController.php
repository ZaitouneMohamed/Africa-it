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
        $this->validate($request,[
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
        //
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
        //
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
