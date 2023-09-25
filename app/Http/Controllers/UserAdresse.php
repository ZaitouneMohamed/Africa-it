<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdresse extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.Adresse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.Adresse.create');
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
            'type' => "required",
            'name' => "required|max:200",
            'phone_number' => "required",
            'postel_code' => "required",
            'city' => "required",
            'adresse' => "required",
        ]);
        $adresse = new Adresse();
        $adresse->type = $request->type;
        $adresse->name = $request->name;
        $adresse->phone_number = $request->phone_number;
        $adresse->postel_code = $request->postel_code;
        $adresse->city = $request->city;
        $adresse->adresse = $request->adresse;
        $adresse->user_id = Auth::user()->id;
        $adresse->save();
        return redirect()->route('user.profile.adresse.index')->with([
            "success" => "adresse added successfully"
        ]);
    }
}
