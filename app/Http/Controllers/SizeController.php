<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $size = Size::all();
        return view('backend.size.index',compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.size.create');
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
        $size = new Size;
        $validated = $request->validate([
            'name' => 'required | unique:sizes',
            'short_description' => 'required | max:50',
        ]);

        $size->name = $request->input('name');
        $size->short_description = $request->input('short_description');
        $size->save();
        return redirect()->back()->with('stutus','Size created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $size = Size::find($id);
        return view('backend.size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        //
        $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $size->update($data);
        return redirect()->back()->with('stutus','Size updated successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $size = Size::find($id);
        $size->delete();

        return redirect()->back()->with('delete','Size deleted successfully');
    }
}
