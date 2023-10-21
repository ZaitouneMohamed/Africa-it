<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\livreur\CreateLivreurRequest;
use App\Http\Requests\Admin\livreur\UpdateLivreurRequest;
use App\Models\Livreur;
use Illuminate\Http\Request;

class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livreurs = Livreur::paginate(10);
        return view('admin.content.livreur.index', compact('livreurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.livreur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLivreurRequest $request)
    {
        Livreur::create([
            "full_name" => $request->name,
            "phone" => $request->phone,
            "adresse" => $request->adresse,
            "email" => $request->email,
            "cin" => $request->cin,
        ]);
        return redirect()->route("admin.livreur.index")->with([
            "success" => "livreur added with success"
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
        $livreur = Livreur::findOrFail($id);
        return view('admin.content.livreur.edit', compact('livreur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLivreurRequest $request, $id)
    {
        $livreur = Livreur::findOrFail($id);
        $livreur->update([
            "full_name" => $request->name,
            "phone" => $request->phone,
            "adresse" => $request->adresse,
            "email" => $request->email,
            "cin" => $request->cin,
        ]);
        return redirect()->route("admin.livreur.index")->with([
            "success" => "livreur update with success"
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
        Livreur::findOrFail($id)->delete();
        return redirect()->route("admin.livreur.index")->with([
            "success" => "livreur delete with success"
        ]);
    }
}
