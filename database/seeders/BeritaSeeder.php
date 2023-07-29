<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan1',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan2',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan3',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan4',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan5',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan6',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan7',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan8',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan9',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
        Berita::create([
            'user_id' => 1,
            'judul' => 'Penyaluran BLT DD tahap V bulan Mei Desa Ketowan',
            'slug' => 'penyaluran-blt-dd-tahap-v-bulan-mei-desa-ketowan10',
            'kategori' => 'Berita',
            'isi' => 'Ketowan- Pemerintah Desa Ketowan Berkomitmen bersama Multistakeholder untuk menurunkan angka Stunting khususnya di Desa Ketowan di Kabupaten Situbondo pada umumnya.

            Komitmen itu merupakan hasil dari kegiatan rembuk Stunting yang dilaksanakan Pemerintah Desa Ketowan bersama Dinas Kesehatan Kecamatan Arjasa, Ibu" PKK dan Ibu" Kader Posyandu di Balai Desa Ketowan.
            
            Rapat Stunting di Desa Ketowan di buka oleh Bapak Rendi Yanuar selaku perwakilan Kecamatan Arjasa beliau berharap dengan adanya rapat Stunting ini bisa bermanfaat bagi masyarakat dan bisa memberikan wawasan yang lebih luas.
            
            Seterusnya sambutan dari Bapak Kadis DP3AP2KB Drs. Muhammad Imam Darmaji,M.Si beliau mengatakan Rembuk Stunting ini akan mempresentasikan hasil analisa situasi dan rancangan rencana kegiatan untuk penurunan Stunting Khususnya di Desa Ketowan Umumnya di Kabupaten Situbondo.
            
            "Kita disini untuk berembuk dan mencari solusi dalam menyelesaikan persoalan Stunting. saya berharap agar kita bisa berkolaborasi menyelesaikan Stunting di Desa Ketowan Khususnya di Kabupaten Situbondo pada Umumnya dan Kami siap memberikan fasilitas secara exstra agar penerus Bangsa ini sehat dan cerdas", Ungkap Kepala Desa Ketowan Bapak Eryanto.
            
            Dalam Rapat Rembuk Stunting di Desa Ketowan di Hadiri Oleh Drs. Muhammad Imam Darmaji, M.Si Kadis DP3AP2KB Kabupaten Situbondo,Bapak Kepala Desa Ketowan,Perwakilan Bapak Camat Arjasa Bapak Rendi Yanuar,Bapak Anshori,Pendamping Desa Ketowan,Dinas Kesehatan Kecamatan Arjasa,Perangkat Desa Ketowan,Ibu PKK dan Ibu Kader Posyandu Desa Ketowan.
            
            Kepala Desa Ketowan Berharap dengan adanya Rembuk Stunting di Desa Ketowan bisa Mengurangi Tingkat Stunting yang ter Indikasi awalnya 3% menjadi 0%.
            
            ',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa obcaecati sint, ipsa itaque laudantium minima quos voluptas earum quasi quas exercitationem quae unde reiciendis adipisci eos in necessitatibus? Magni facilis enim ipsam eius consectetur tenetur repellat ullam corporis assumenda commodi, quaerat dicta fugiat sint ducimus soluta! Quos molestias quam necessitatibus. Nemo adipisci consequatur minima velit recusandae. Unde cumque corrupti dolorum quidem quo ipsam exercitationem repellendus magnam expedita at dolorem, perferendis veniam asperiores, repellat laudantium! Harum commodi sed ex quae ad autem facilis nobis omnis sequi impedit ipsum, nihil quas reprehenderit porro voluptas. Dolorem odit commodi ad autem qui eum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);
    }
}
