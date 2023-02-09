<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemain;
class PemainController extends Controller
{
    public function pemain(Request $request){
        if($request->has('search')){
            $data = pemain::where('name','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $pagination = 5;
            $data = pemain::paginate($pagination);
        }

        return view('data_pemain.datapemain',compact('data'));
    }

    public function tambahpemain(){
        return view('data_pemain.tambahdatapemain');
    }

    public function insertpemain(Request $request){
        // Dd($request->all());
        $data = pemain::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopemain/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pemain')->with('success','Data berhasil ditambahkan');
    }

    public function tampilkandata($id){
        $data = pemain::find($id);
        // dd($data);
        return view('data_pemain.editdatapemain',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pemain::find($id);
        $data->update($request->all());
        return redirect()->route('pemain')->with('success','Data berhasil diubah');
    }

    public function deletedata($id){
        $data = pemain::find($id);
        $data->delete();
        return redirect()->route('pemain')->with('success','Data berhasil dihapus');
    }
}
