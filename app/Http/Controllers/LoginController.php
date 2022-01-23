<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $data = $request->all(['email','password']);
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required | min:6 '
        ]);
        $email = $request->email;
        $password=$request->password;
        $result = User::where('email',$email)->where('password',$password)->first();
        
        if($result)
        {

            $email = $result->email;
            Session::put('email',$email);
            
            if($result->is_admin == 1)
            {
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->back()->with('error','Wrong email or password');
        }

    }

    public function logout(){
        session()->flush();
        return redirect()->route('home');
    }
}
