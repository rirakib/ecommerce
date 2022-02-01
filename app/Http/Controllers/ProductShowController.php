<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductShowController extends Controller
{
    //
    public function productShow($id)
    {
        $product = Product::find($id);
        return view('frontend.show.shop',compact('product'));
    }
}
