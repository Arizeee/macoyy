<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ValorantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valorant')->insert([
            'username' => 'Arizeee',
            'foto' => 'Arizeee.jpg',
            'jeniskelamin' => 'laki-laki',
            'rank' => 'radiant',
            'deskripsi' => 'ayo bermain bersama'
        ]);
    }
}
