<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\Berita;
use App\Models\Slider;
use App\Models\Sejarah;
use App\Models\Aparatur;
use App\Models\Galeri;
use App\Models\Penduduk;
use App\Models\Identitas;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
      
        $post = Berita::all()->last();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $slider = Slider::all();
        $penduduk = Penduduk::all();
     
   
        $latestData = Berita::latest()->first(); // Mengambil data terbaru
        $data = Berita::latest()->where('id', '<>', $latestData->id)->paginate(6); // Mengambil data kecuali yang terbaru


        // dd($data);
        return view('public.index',[
            'post' => $post,
            'penduduk' => $penduduk,
            'datas' => $data,
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Beranda',
            'menu' => 'Beranda',
            'sliders' => $slider
        ]);
    }

    public function visimisi()
    {
        $post = Berita::all()->last();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $visi = Visi::find(1);
        // dd($data);
        return view('public.visimisi.index',[
            'post' => $post,
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Visi Misi',
            'menu' => 'Profil',
            'visi' => $visi
        ]);
     
    }

    public function sejarah()
    {
        $post = Berita::all()->last();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $sejarah = Sejarah::find(1);
        // dd($data);
        return view('public.sejarah.index',[
            'post' => $post,
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Sejarah',
            'menu' => 'Profil',
            'sejarah' => $sejarah
        ]);
     
    }

    public function pengumuman()
    {
        $post = Berita::all()->last();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $data = Pengumuman::paginate(6);
    
        // dd($data);
        return view('public.pengumuman.index',[
            'post' => $post,
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Pengumuman',
            'menu' => 'Pengumuman',
            'datas' => $data
        ]);
     
    }

    public function galeri()
    {
        $identitas = Identitas::find(1);
        $galeri = Galeri::paginate(12);

        return view('public.galeri.index',[
            
            'title' => 'Galeri',
            'menu' => 'Galeri',
            'identitas' => $identitas,
            'galeris' => $galeri,

        ]);
    }

    public function penduduk()
    {
        $post = Berita::all()->last();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $data = Pengumuman::paginate(6);
        $penduduk = Penduduk::all();
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
  
     
        // dd($data);
        return view('public.datadesa.index',[
            'post' => $post,
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Data Penduduk',
            'menu' => 'Data Penduduk',
            'datas' => $data,
            'penduduks' => $penduduk,
            'pendidikans' => $pendidikan,
            'pekerjaans' => $pekerjaan,
           
        ]);
     
    }

  
    

}
