<?php

namespace Database\Seeders;

use App\Models\Dusun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dusun::create([
            'nama' => 'Dusun A',
        ]);
        Dusun::create([
            'nama' => 'Dusun B',
        ]);
        Dusun::create([
            'nama' => 'Dusun C',
        ]);
        Dusun::create([
            'nama' => 'Dusun D',
        ]);
    }
}
