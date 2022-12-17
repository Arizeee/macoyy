<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Database\Seeders\GuruSeeder;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('guru.guru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahguru()
    {
        return view('guru.tambahguru');   
    }
    public function insertguru(Request $request)
    {
        // dd($request)->all();
        // Guru::create($request)->all();
        $this -> validate($request, 
            [
                'image' => 'mimes:jpeg,jpg,png',
            ]
        );
        if($request->hasfile('gambar')){
            $nm = $request->gambar;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/assets/img/gambar_guru/', $namaFile);

            $data = [
                'nama_guru'=>$request->nama_guru,
                'gambar'=>$request->gambar,
                'nip'=>$request->nip,
                'mata_pelajaran'=>$request->mata_pelajaran,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'alamat'=>$request->alamat,
            ];
        }
        else
        {
            $data = [
                'nama_guru'=>$request->nama_guru,
                'gambar'=>$request->namaFile,
                'nip'=>$request->nip,
                'mata_pelajaran'=>$request->mata_pelajaran,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'alamat'=>$request->alamat,
            ];  
        }

        Guru::create($data);
        return redirect()->intended('/guru');

    }

    public function editguru(Request $request, $id){
        $guru = Guru::findOrFail($id);
        return view('guru.editguru', ['guru'=>$guru], compact('guru'));
    }

    public function updateguru(Request $request, $id){
        $guru = Guru::find($id);
        $gambarAwal = $guru->gambar; 

        if($request->hasfile('gambar')){
        $request->gambar->move(public_path().'/assets/images/profile-picture/gambar_guru/', $gambarAwal);
        }

        $guru->update([   
            'nama_guru' => $request->nama_guru,
            'gambar' => $gambarAwal,
            'nip' => $request->nip,
            'jenis_kelamin' => $request->jenis_kelamin,
            'mata_pelajaran' => $request->mata_pelajaran,
            'alamat' => $request->alamat,
        ]);

        return redirect()->intended('/guru')->with('success', 'data berhasil di update');

        // $data = Guru::find($id);
        // $data->update($request->all());
        // return redirect()->intended('/guru')->with('success', 'data berhasil di update');

    }

    public function hapusguru($id)
    {
        $hapus = Guru::findorfail($id);

        $file = public_path('/assets/images/profile-picture/gambar_guru/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();

        return redirect('/guru');
    }
}
