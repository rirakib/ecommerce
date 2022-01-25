<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $color = Color::all();
        return view('backend.color.index',compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.color.create');
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
        
        $color = new Color;
        $validated = $request->validate([
            'name' => 'required | unique:colors',
            'short_description' => 'required | max:50',
        ]);

        $color->name = $request->input('name');
        $color->short_description = $request->input('short_description');
        $color->save();
        return redirect()->back()->with('stutus','Color created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $color = Color::find($id);
        return view('backend.color.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        //
        $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $color->update($data);
        return redirect()->back()->with('stutus','color updated successfullly');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $color = Color::find($id);
        $color->delete();

        return redirect()->back()->with('delete','Color deleted successfully');
    }
}
