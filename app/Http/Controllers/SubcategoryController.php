<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategory = Subcategory::all();
        return view('backend.subcategory.index',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.subcategory.create');
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
        $subcategory = new Subcategory;
        $validated = $request->validate([
            'cat_id' => 'required',
            'subcat_id' => 'required | unique:subcategories',
            'name' => 'required | unique:subcategories',
            'short_description' => 'required | max:50',
            'image' => 'required | mimes:jpeg,png,jpg,gif,svg',
        ]);

        $subcategory->cat_id = $request->input('cat_id');
        $subcategory->subcat_id = $request->input('subcat_id');
        $subcategory->name = $request->input('name');
        $subcategory->short_description = $request->input('short_description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/subcategory/', $filename);
            $subcategory->image = $filename;
        }
        
        $subcategory->save();
        return redirect()->back()->with('stutus','Subcategory created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        //
        $subcategory = Subcategory::find($id);
        return view('backend.subcategory.edit',compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
        $data = $request->all();
        $validated = $request->validate([
            'cat_id' => 'required',
            'subcat_id' => 'required',
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $subcategory->update($data);
        return redirect()->back()->with('stutus','Subcategory updated successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $subcategory = Subcategory::find($id);
        $subcategory->delete();

        return redirect()->back()->with('delete','Subcategory deleted successfully');
    }
}
