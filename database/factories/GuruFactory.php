<?php

namespace Database\Factories;
use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'nama_guru' => $faker->name(),
            'nip' => mt_rand(000001, 99999),
            'mata_pelajaran' => Arr::random(['Matematika', 'Ilmu Pengetahuan Sosial', 'Multimedia', 'PPLG', 'TEI', 'Bahasa Indonesia', 'Bahasa Inggris']),
            'jenis_kelamin' => Arr::random(['Laki-laki', 'Perempuan']),
            'alamat' => $faker->address(),
        ];
    }
}
