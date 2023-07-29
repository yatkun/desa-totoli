<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pekerjaan::create([
            'nama' => 'Belum/Tidak Bekerja',
        ]);
        Pekerjaan::create([
            'nama' => 'Pelajar/Mahasiswa',
        ]);
        Pekerjaan::create([
            'nama' => 'Ibu Rumah Tangga',
        ]);
    }
}
