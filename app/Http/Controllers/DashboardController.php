<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Layanan;
use App\Models\Penduduk;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all()->count();
        $layanan = Layanan::all()->count();
        $pengumuman = Pengumuman::all()->count();
        $penduduk = Penduduk::all()->count();
        return view('dashboard.index',[
            'menu' => 'Dashboard',
            'title' => 'Dashboard',
            'berita' => $berita,
            'pengumuman' => $pengumuman,
            'penduduk' => $penduduk,
            'layanan' => $layanan,
        ]);
    }

}
