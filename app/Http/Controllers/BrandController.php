<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brand = Brand::all();
        return view('backend.brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.brand.create');
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
        $brand = new Brand;

        $validated = $request->validate([
            'name' => 'required',
            'short_description' => 'required | max:50',
            'image' => 'required | mimes:jpeg,png,jpg,gif,svg',
        ]);

        $brand->name = $request->input('name');
        $brand->short_description = $request->input('short_description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/brand/', $filename);
            $brand->image = $filename;
        }
        
        $brand->save();
        return redirect()->back()->with('stutus','Brand created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $brand = Brand::find($id);
        return view('backend.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $brand->update($data);
        return redirect()->back()->with('stutus','Brand updated successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->back()->with('delete','Brand deleted successfully');
    }
}
