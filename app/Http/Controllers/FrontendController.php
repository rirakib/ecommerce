<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home(){
        return view('frontend.home.home');
    }

    public function shop(){
        return view('frontend.shop.shop');
    }
    public function about(){
        return view('frontend.about.about');
    }
    public function cart(){
        return view('frontend.cart.cart');
    }
    public function checkout(){
        return view('frontend.checkout.checkout');
    }
    public function contact(){
        return view('frontend.contact.contact');
    }
    public function profile(){
        return view('frontend.profile.profile');
    }
    public function privacy(){
        return view('frontend.privacy.privacy');
    }
    public function term(){
        return view('frontend.term.term');
    }
    public function return(){
        return view('frontend.return.return');
    }
}
