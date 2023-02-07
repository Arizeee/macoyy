<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Valorant;
use Illuminate\Http\Request;
use Database\Seeders\ValorantSeeder;
use ParagonIE\Sodium\Compat;

class ValorantController extends Controller
{
    public function index(){
        $valo = Valorant::all();
        return view('valorant.valorant', compact('valo'));
    }

    public function dashvalo(){
        $valo = Valorant::all();
        return view('valorant.dashvalo', compact('valo'));
    }

    public function tdvalo(){
        $kategoris = Kategori::all();

        return view('valorant.tdvalo', compact('kategoris'));   
    }

    public function insertvalo(Request $request){
        // dd($request->all());
        $valo = Valorant::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('profilevalorant/', $request->file('foto')->getClientOriginalName());
            $valo->foto = $request->file('foto')->getClientOriginalName();
            $valo->save();
        }
        return redirect()->route('dashvalo')->with('success', 'data berhasil ditambahkan');
    }


    public function editvalo($id){
        $valo = Valorant::find($id);
        // dd($valo);
        return view('valorant.editvalo', compact('valo'));
    }

    public function updatevalo(Request $request, $id){
        $valo = Valorant::find($id);
        $valo->update($request->all());
        return redirect()->route('dashvalo')->with('success', 'data berhasil diupdate');
    }

    public function deletevalo($id){
        $valo = Valorant::find($id);
        $valo->delete();
        return redirect()->route('dashvalo')->with('success', 'data berhasil didelete');
    }
}

