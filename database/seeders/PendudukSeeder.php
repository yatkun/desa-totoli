<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
            'nama' => 'Bayu',
            'nik' => '123456',
            'nohp' => '085155103646',
            'dusun' => 'Dusun A',
            'kelamin' => 'Laki-laki',
            'pendidikan' => 'Strata II',
            'pekerjaan' => 'Polisi',
            'agama' => 'Islam',
            'perkawinan' => 'Menikah',
        ]);
    }
}
