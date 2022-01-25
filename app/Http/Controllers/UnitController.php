<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unit = Unit::all();
        return view('backend.unit.index',compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $unit = new Unit;
        $validated = $request->validate([
            'name' => 'required | unique:units',
            'short_description' => 'required | max:50',
        ]);

        $unit->name = $request->input('name');
        $unit->short_description = $request->input('short_description');
        $unit->save();
        return redirect()->back()->with('stutus','Unit created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $unit = Unit::find($id);
        return view('backend.unit.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
        $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $unit->update($data);
        return redirect()->back()->with('stutus','Unit updated successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $unit = Unit::find($id);
        $unit->delete();

        return redirect()->back()->with('delete','Unit deleted successfully');
    }
}
