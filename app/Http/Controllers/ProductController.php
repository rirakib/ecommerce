<?php namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $products = Product::orderBy('name','desc')->get();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $product = new Product();

            $product->product_id = $request->input('product_id');
            $product->cat_id =$request->input('cat_id');
            $product->subcat_id = $request->input('subcat_id');
            $product->color_id = $request->input('color_id');
            $product->brand_id = $request->input('brand_id');
            $product->size_id = $request->input('size_id');
            $product->unit_id = $request->input('unit_id');
            $product->name= $request->input('name');
            $product->short_description = $request->input('short_description');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->product_code = $request->input('product_code');
            $product->product_offer_price = $request->input('product_offer_price');
            $product->offer_start_date = $request->input('offer_start_date');
            $product->offer_end_date = $request->input('offer_end_date');
            $product->product_type = $request->input('product_type');
            $product->product_quantity = $request->input('product_quantity');
            $product->image=$request->input('image');
            $product->multiple_image = $request->input('multiple_image');
           
        // $data=$request->all([ 'product_id', 'cat_id',
        //     'subcat_id', 'color_id', 'brand_id', 'unit_id', 'size_id', 'name', 'short_description',
        //     'description', 'price', 'product_quantity', 'product_stutus', 'product_code', 'product_offer_price',
        //     'offer_start_date', 'offer_end_date', 'image', 'multiple_image'
        //     ]);
        // $validated = $request->validate([
        //     'product_id' => 'required',
        //     'cat_id' =>'required',
        //     'subcat_id' => 'required',
        //     'color_id' => 'required',
        //     'brand_id' => 'required',
        //     'unit_id' => 'required',
        //     'size_id' => 'required',
        //     'name'=> 'required',
        //     'short_description' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'product_quantity' => 'required',
        //     'image'=>'required',
        //     'multiple_image' => 'requried'
        // ]);
       
        if($file = $request->file('image'))
        {
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/product/title', $filename);
            $product->image = $filename;
        }
        else{
            echo "mian image";
        }
        
        $images = array();
        if($files = $request->file('multiple_image')){
            $i=0;
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
                $file->move('images/product/display/',$fileName);
                $image[]=$fileName;
                $i++;
            }
            $product['multiple_image'] = implode("|",$image);
        }
        else{
            echo "multiple";
        }
        
        
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $product = Product::find($id);
        return view('backend.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product) {
        //
        $data=$request->all([ 'product_id', 'cat_id',
             'subcat_id', 'color_id', 'brand_id', 'unit_id', 'size_id', 'name', 'short_description',
             'description', 'price', 'product_quantity', 'product_stutus', 'product_code', 'product_offer_price',
             'offer_start_date', 'offer_end_date', 'image', 'multiple_image'
             ]);

            if($file = $request->file('image'))
        {
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/product/title', $filename);
            $product->image = $filename;
        }
        $images = array();
        if($files = $request->file('multiple_image')){
            $i=0;
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
                $file->move('images/product/display/',$fileName);
                $image[]=$fileName;
                $i++;
            }
            $product['multiple_image'] = implode("|",$image);
        }
        
        $product->update($data);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}