<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    public function index()
    {
        $kelas = Kelas::with('guru')->get();
        return view('kelas.kelas', compact(['kelas']));
    }

    public function tambahkelas()
    {
        $wali_kelas = Guru::all();
        return view('kelas.tambahkelas', compact('wali_kelas'));
    }

    public function insertkelas(Request $request)
    {
        $data = [
            'kelas_jurusan' => $request->kelas_jurusan,
            'guru_id'=>$request->guru_id,
        ];  

        Kelas::create($data);
        return redirect()->intended('/kelas');
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, Kelas $id)
    {
        //
    }

    public function hapuskelas( $id)
    {
        $hapus = Kelas::findorfail($id);
        $hapus->delete();
        return redirect('/siswa');
    }
}
