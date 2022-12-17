<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert([
            'nama'=>'Bu Sinta Nur Alifa',
            'NIP'=>'1353425',
            'matapelajaran'=>'MM',
            'jeniskelamin'=>'Perempuan',
        ]);
    }
}
