<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggaran')->insert([
            'namapelanggaran'=>'Telat Masuk Kelas',
            'sanksi'=>'Di Beri Peringatan',
            'level'=>'Ringan',
            'poin'=>'10',
        ]);
    }
}
