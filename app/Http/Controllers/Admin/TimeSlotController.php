<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = TimeSlot::latest()->paginate(8);
        return view('admin.content.timeslot.index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "start_time" => "required",
            "end_time" => "required"
        ]);
        TimeSlot::create([
            "begin" => $request->start_time,
            "end" => $request->end_time
        ]);
        return redirect()->back()->with([
            "success" => "all good"
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
        $time = TimeSlot::findOrFail($id);
        return view('admin.content.timeslot.edit', compact('time'));
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
        $time = TimeSlot::findOrFail($id);
        $this->validate($request, [
            "start_time" => "required",
            "end_time" => "required"
        ]);
        $time->update([
            "begin" => $request->start_time,
            "end" => $request->end_time
        ]);
        return redirect()->route("admin.TimeSlot.index")->with([
            "success" => "time update with success"
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
        TimeSlot::findOrFail($id)->delete();
        return redirect()->route("admin.TimeSlot.index")->with([
            "success" => "time delete with success"
        ]);
    }
}
