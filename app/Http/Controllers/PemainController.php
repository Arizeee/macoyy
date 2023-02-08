<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function dpemain(){
        return view('data_pemain.dpemain');
    }

    public function edpemain(){
        return view('data_pemain.edpemain');
    }

    public function tdpemain(){
        return view('data_pemain.tdpemain');
    }
}
