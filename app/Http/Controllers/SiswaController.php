<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::with(['kelas'])->get();
        return view('siswa.siswa', compact('data'));
    }


    public function tambahsiswa()
    {
        $kelas_jurusan = Kelas::all();
        return view('siswa.tambahsiswa', compact(['kelas_jurusan']));   
    }

    public function insertsiswa(Request $request)
    {
        // dd($request)->all();
        // Siswa::create($request)->all();
        $this -> validate($request, 
            [
                'image' => 'mimes:jpeg,jpg,png',
            ]
        );
        if($request->hasfile('gambar')){
            $nm = $request->gambar;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/assets/img/gambar_siswa/', $namaFile);

            $data = [
                'nama_siswa'=>$request->nama_siswa,
                'gambar'=>$request->gambar,
                'nisn'=>$request->nisn,
                'kelas_id'=>$request->kelas_id,
                'no_telp'=>$request->no_telp,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'alamat'=>$request->alamat,
            ];
        }
        else
        {
            $data = [
                'nama_siswa'=>$request->nama_siswa,
                'gambar'=>$request-> namaFile,
                'nisn'=>$request->nisn,
                'kelas_id'=>$request->kelas_id,
                'no_telp'=>$request->no_telp,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'alamat'=>$request->alamat,
            ];  
        }
 
        Siswa::create($data);
        return redirect()->intended('/siswa')->with('success', 'data berhasil di tambahkan');
    }

    public function editsiswa($id){
        $kelas = Kelas::all();
        $data = Siswa::findOrFail($id);
        return view('siswa.editsiswa', compact('data','kelas'));
    }

    public function updatesiswa(Request $request, $id){
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->intended('/siswa')->with('success', 'data berhasil di update');
    }

    public function hapussiswa($id)
    {
        $hapus = Siswa::find($id);
        $hapus->delete();
        return redirect('/siswa');
    }

    public function detailsiswa($id){
        $data = Siswa::find($id);
        return view('siswa.detail', compact('data'));
    }
}
