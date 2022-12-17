<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'NISN'=>'1355635',
            'Nama'=>'Fariz Rachman',
            'Kelas'=>'XI',
            'Jurusan'=>'PPLG 1',
            'Walikelas'=>'Bu Sinta Nur Alifa',
            'Jeniskelamin'=>'Laki-Laki',
            'Alamat'=>'jl. Swadaya1',
        ]);
    }
}
