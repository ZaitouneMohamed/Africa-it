<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    function ParameterIndex()
    {
        return view('admin.content.parameters');
    }
    function UpdateAccounts(Request $request)
    {
        $parameter = Parameter::take(1);
        $parameter->update([
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
        ]);
        return redirect()->back()->with([
            "success" => "link updated with success"
        ]);
    }
}
