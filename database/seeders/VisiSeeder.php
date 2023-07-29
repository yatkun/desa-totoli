<?php

namespace Database\Seeders;

use App\Models\Sejarah;
use App\Models\Visi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visi::create([
            'visi' => 'Dengan Semangat Persaudaraan, Gotong Royong dan Akhlak Mulia Guna Mewujudkan Desa Lengkap Yang Luar Biasa',
            'misi' => 'misi',
        ]);

        Sejarah::create([
            
            'sejarah' => 'Data tidak tersedia.',
        ]);
    }
}
