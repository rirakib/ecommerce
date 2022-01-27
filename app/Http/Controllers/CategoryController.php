<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.category.create');
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
        $category = new Category;

        $validated = $request->validate([
            'cat_id' => 'required | unique:categories',
            'name' => 'required | unique:categories',
            'short_description' => 'required | max:50',
            'image' => 'required | mimes:jpeg,png,jpg,gif,svg',
        ]);

        $category->cat_id = $request->input('cat_id');
        $category->name = $request->input('name');
        $category->short_description = $request->input('short_description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/category/', $filename);
            $category->image = $filename;
        }
        
        $category->save();
        return redirect()->back()->with('stutus','Category created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //

        $data = $request->all();
        $validated = $request->validate([
            'cat_id' => 'required',
            'name' => 'required',
            'short_description' => 'required | max:50',
        ]);

        
        $category->update($data);
        return redirect()->back()->with('stutus','Category updated successfullly');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('delete','Category deleted successfully');
    }

    public function getData(Request $request)
    {
        $data = $request->post('cat');
        $subcat= DB::table('subcategories')->where('cat_id',$data)->orderBy('name','asc')
        ->get();
        $html = "<option>Choose Option</option>";
        foreach($subcat as $data)
        {
            $html.= "<option value='$data->id'>$data->name</option>";
        }
        echo $html;
    }
}
