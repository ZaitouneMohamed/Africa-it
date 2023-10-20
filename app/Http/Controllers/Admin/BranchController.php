<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::latest()->paginate(5);
        return view('admin.content.branch.index', compact("branches"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.content.branch.create");
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
            "name" => "required|unique:branches,name",
            "attitude" => "required",
            "longtitude" => "required",
            "distance" => "required",
            "charge_delivery" => "required"
        ]);
        $branch = Branch::create([
            "name" => $request->name,
            "attitude" => $request->attitude,
            "longtitude" =>$request->longtitude,
            "distance" => $request->distance,
            "charge_delivery" => $request->charge_delivery
        ]);
        return redirect()->route('admin.branch.index')->with([
            "success" => "branch added successfully"
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
        $branch = Branch::findOrFail($id);
        return view("admin.content.branch.edit",compact('branch'));
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
        $branch = Branch::findOrFail($id);
        $this->validate($request, [
            "name" => "required|unique:branches,name",
            "attitude" => "required",
            "longtitude" => "required",
            "distance" => "required",
            "charge_delivery" => "required"
        ]);
        $branch->update([
            "name" => $request->name,
            "attitude" => $request->attitude,
            "longtitude" =>$request->longtitude,
            "distance" => $request->distance,
            "charge_delivery" => $request->charge_delivery
        ]);
        return redirect()->route('admin.branch.index')->with([
            "success" => "branch update successfully"
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
        Branch::findOrFail($id)->delete();
        return redirect()->route('admin.branch.index')->with([
            "success" => "branch delete with success"
        ]);
    }
}
