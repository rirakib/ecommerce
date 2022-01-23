<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->all(['name','email','password']);
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required | min:6 '
        ]);

        User::create($data);
        return redirect()->back()->with('stutus','Account Created Successfully');
    }
}
