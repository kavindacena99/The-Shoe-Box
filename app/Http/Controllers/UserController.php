<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupindex(){
        return view('auth.signup');
    }

    //handle user registration
    public function create(Request $request){
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //create user
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success','User created successfully');
    }

    public function loginindex(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('home')->with('success','Login successful');
        }
    
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Logout successful');
    }
}
