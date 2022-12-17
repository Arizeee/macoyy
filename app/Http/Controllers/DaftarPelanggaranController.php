<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class DaftarPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = Pelanggaran::all();
        return view('pelanggaran.pelanggaran', compact('pelanggaran'));
    }

    public function tambahpelanggaran()
    {
        return view('pelanggaran.tambahpelanggaran');   
    }

    public function insertpelanggaran(Request $request)
    {  
        // dd($request->all( ));
        // $data = [
        //     'bentuk_pelanggaran'=>$request->bentuk_pelanggaran,
        //     'jenis_pelanggaran'=>$request->jenis_pelanggaran,
        //     'sanksi'=>$request->sanksi,
        //     'poin'=>$request->poin,
        // ];

        Pelanggaran::create([
            "bentuk_pelanggaran" => $request->bentuk_pelanggaran,
            "jenis_pelanggaran" => $request->jenis_pelanggaran,
            "sanksi" => $request->sanksi,
            "poin" => $request->poin,
        ]); 

        return redirect()->intended('/pelanggaran')->with('success', 'Data Berhasil di tambahkan');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
