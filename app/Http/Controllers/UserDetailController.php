<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function userdetail($id){
        $user = User::find($id); 
        return view('userdetail', ['user' => $user]);
        
    }
}
