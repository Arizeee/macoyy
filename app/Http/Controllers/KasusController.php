<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class KasusController extends Controller
{

    public function index()
    {
        $kasus = Kasus::with('pelanggaran','siswa')->get();
        return view('kasus.kasus', compact(['kasus']));
    }

    public function tambahkasus()
    {
        $dtsiswa = Siswa::all();
        $dtpelanggaran = Pelanggaran::all();
        return view('kasus.tambahkasus', compact(['dtsiswa','dtpelanggaran']));
    }

    public function insertkasus(Request $request)
    {
        Kasus::create([
            "siswa_id" => $request->siswa_id,
            "pelanggaran_id" => $request->pelanggaran_id,
        ]); 

        return redirect()->intended('/kasus')->with('success', 'Data Berhasil di tambahkan');
    }

    public function editkasus(Kasus $kasus, $id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.editkasus', ['kasus'=>$kasus], compact('kasus'));
    }

    public function updatekasus(Request $request, Kasus $kasus, $id)
    {
        $kasus = Kasus::find($id);
        $gambarAwal = $kasus->gambar;

        $data = [
            'siswa_id' => $request['siswa_id'],
            'pelanggaran_id' => $request['pelanggaran_id'],
        ];

        $kasus->update($data);
        return redirect()->intended('/kasus')->with('success', 'data berhasil di update');

    }

    public function hapuskasus(Kasus $kasus, $id)
    {
        $hapus = Kasus::findorfail($id);
        $hapus->delete();
        return redirect('/kasus');
    }
}
