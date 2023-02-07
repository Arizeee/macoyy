<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('setting', compact('data'));
    }

    public function profileUser(Request $request){

        return redirect()->route('setting');
    }

    public function edit(Request $request)
    {
        $data = User::find(auth()->user()->id);

        $data->update($request -> all());
        if ($request->hasFile('foto')){
            $request->file('foto')->move('profile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
            
        }


        return redirect()->route('setting')->with('success', 'data berhasil ditambahkan');

    }

   
}
