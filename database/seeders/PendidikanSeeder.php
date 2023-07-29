<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendidikan::create([
            'nama' => 'Belum/Tidak Sekolah',
        ]);
        Pendidikan::create([
            'nama' => 'SD/Sederajat',
        ]);
        Pendidikan::create([
            'nama' => 'SMP/Sederajat',
        ]);
    
    }
}
