<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function games(Request $request){
        if($request->has('search')){
            $data = Game::where('nama_game','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $pagination = 5;
            $data = Game::paginate($pagination);
        }
        // $data = Game::withCount('games')->orderBy('name_game', 'asc')->paginate(10);

        // $data = Game::count();
        // $data = Game::where('id')->count(); 
        return view('data_game.games',compact('data'));
    }

    public function tambahgames(){
        return view('data_game.tambahgames');
    }

    public function insertgames(Request $request){
        // Dd($request->all());
        $data = Game::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopemain/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('games')->with('success','Data berhasil ditambahkan');
    }

    public function tampilgames($id){
        $data = Game::find($id);
        // dd($data);
        return view('data_game.tampilgames',compact('data'));
    }

    public function updategames(Request $request, $id){
        $data = Game::find($id);
        $data->update($request->all());
        return redirect()->route('data_game.games')->with('success','Data berhasil diubah');
    }

    public function deletegames($id){
        $data = Game::find($id);
        $data-> delete();
        return redirect()->route('games')->with('success','Data berhasil dihapus');
    }
}
