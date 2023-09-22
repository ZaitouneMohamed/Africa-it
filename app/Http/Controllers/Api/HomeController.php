<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubCategorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function GetSubCategories($id)
    {
        $subcategories = SubCategorie::where('categorie_id',$id)->get();
        return response()->json( $subcategories);
    }
}
