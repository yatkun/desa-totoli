<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identitas')->insert([
            'nama' => 'Desa Lombang',
            'kecamatan' => 'Banggae',
            'kabupaten' => 'Majene',
            'nohp' => '085155103646',
            'email' => 'desalombang@gmail.com',
            'kodepos' => '90951',
            'logo' => 'post-images/logodesa.png',
            'gmap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.186615937865!2d118.98329677399244!3d-3.5443866422617067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d94bf0b28486581%3A0x54cc317db5bc3939!2sKantor%20Kelurahan%20Lembang!5e0!3m2!1sid!2sid!4v1683985177874!5m2!1sid!2sid',
           'facebook' => 'www.facebook.com/desalombang',
           'instagram' => 'www.instagram.com/desalombang'
           
        ]);
    }
}
