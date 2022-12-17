<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authincating(Request $request){
        
        $request->validate([
            
            'password'=>'required|min:6',
            'email'=>'required|max:255|email',

        ],[
        
            'email.required'=>'Tolong isi Email',
            'password.required'=>'Tolong isi Password',
        ]);
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }
        
        Session::flash('status', 'failed');
        Session::flash('message', 'Your email or password wrong!');

        return redirect('/login');  
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }

    public function register(){
        return view("register");
    }

    public function saveregister(Request $request){
        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email|unique:users',

        ],[
            'name.required'=>'Tolong isi Username',
            'email.required'=>'Tolong isi Email',
            'password.required'=>'Tolong isi Password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 3,
            'remember_token' => Str::random(60),

        ]);
        return redirect('/login');
    }
}
