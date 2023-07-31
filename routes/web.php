<?php

use App\Http\Controllers\AparaturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatadosenController;
use App\Http\Controllers\DokumenpribadiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VisiController;
use App\Models\Penduduk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Route::get('/', 'DesaController@index')->name('desa');

Route::get('/', [DesaController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profil/datapribadi', [ProfilController::class, 'index']);

//Dokumen Pribadi
Route::get('/dokumen/pribadi', [DokumenpribadiController::class, 'index'])->middleware('auth');

//MasterData - DataDosen
Route::get('/master-data/data-dosen', [DatadosenController::class, 'index']);

// Login Page
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin']);
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Dashboard Berita Pages
Route::get('/dashboard/berita', [BeritaController::class, 'index'])->name('berita')->middleware('auth');
Route::get('/dashboard/berita/checkSlug', [BeritaController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/berita/tambah', [BeritaController::class, 'create'])->name('create.berita')->middleware('auth');
Route::post('/dashboard/berita', [BeritaController::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/edit/{id}', [BeritaController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/berita/update/{id}', [BeritaController::class, 'update'])->middleware('auth')->name('berita.update');
Route::get('/dashboard/berita/hapus/{id}', [BeritaController::class, 'destroy'])->middleware('auth')->name('berita.hapus');
Route::get('/berita/{slug}', [BeritaController::class, 'show']);
// Route::get('/berita', [BeritaController::class, 'show']);


// Dashboard Aparatur
Route::get('/dashboard/aparaturdesa', [AparaturController::class, 'index'])->name('aparatur')->middleware('auth');
Route::post('/dashboard/aparaturdesa', [AparaturController::class, 'store'])->middleware('auth');
Route::get('/dashboard/aparaturdesa/tambah', [AparaturController::class, 'create'])->name('create.aparatur')->middleware('auth');
Route::get('/dashboard/aparaturdesa/edit/{id}', [AparaturController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/aparaturdesa/update/{id}', [AparaturController::class, 'update'])->middleware('auth')->name('aparatur.update');
Route::get('/dashboard/aparaturdesa/hapus/{id}', [AparaturController::class, 'destroy'])->middleware('auth')->name('aparatur.hapus');

// Dashboard Pengumuman
Route::get('/dashboard/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman')->middleware('auth');
Route::post('/dashboard/pengumuman', [PengumumanController::class, 'store'])->middleware('auth');
Route::get('/dashboard/pengumuman/tambah', [PengumumanController::class, 'create'])->name('create.pengumuman')->middleware('auth');
Route::get('/dashboard/pengumuman/edit/{id}', [PengumumanController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/pengumuman/update/{id}', [PengumumanController::class, 'update'])->middleware('auth')->name('pengumuman.update');
Route::get('/dashboard/pengumuman/hapus/{id}', [PengumumanController::class, 'destroy'])->middleware('auth')->name('pengumuman.hapus');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show']);

// Dashboard Identitas Desa
Route::get('/dashboard/identitasdesa', [IdentitasController::class, 'index'])->name('identitas')->middleware('auth');
Route::put('/dashboard/identitasdesa/update/{id}', [IdentitasController::class, 'update'])->middleware('auth')->name('identitas.update');

// Dashboard Penduduk
Route::get('/dashboard/penduduk', [PendudukController::class, 'index'])->name('penduduk')->middleware('auth');

Route::post('/dashboard/penduduk', [PendudukController::class, 'store'])->middleware('auth');
Route::get('/dashboard/penduduk/tambah', [PendudukController::class, 'create'])->name('create.penduduk')->middleware('auth');
Route::get('/dashboard/penduduk/edit/{id}', [PendudukController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/penduduk/update/{id}', [PendudukController::class, 'update'])->middleware('auth')->name('penduduk.update');
Route::get('/dashboard/penduduk/hapus/{id}', [PendudukController::class, 'destroy'])->middleware('auth')->name('penduduk.hapus');
Route::get('/penduduk/search', [PendudukController::class, 'search'])->name('penduduk.search');
Route::get('/penduduk/all', [PendudukController::class, 'all'])->name('penduduk.all');


// DUsun
Route::post('/dashboard/peduduk/dusun', [DusunController::class, 'store'])->name('dusun.store');
Route::put('/dashboard/peduduk/dusun/{id}', [DusunController::class, 'update'])->name('dusun.update');
Route::delete('/dashboard/peduduk/dusun/{id}', [DusunController::class, 'destroy'])->name('dusun.destroy');


// Pendidikan
Route::post('/dashboard/peduduk/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::put('/dashboard/peduduk/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::delete('/dashboard/peduduk/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

// Pekerjaan
Route::post('/dashboard/peduduk/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
Route::put('/dashboard/peduduk/pekerjaan/{id}', [PekerjaanController::class, 'update'])->name('pekerjaan.update');
Route::delete('/dashboard/peduduk/pekerjaan/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');

// PUBLIC
Route::get('/visi-misi', [DesaController::class, 'visimisi'])->name('visi');
Route::get('/sejarah', [DesaController::class, 'sejarah'])->name('sejarah');
Route::get('/pengumuman', [DesaController::class, 'pengumuman'])->name('pengumuman');
Route::get('/galeri', [DesaController::class, 'galeri'])->name('galeri');
Route::get('/data-penduduk', [DesaController::class, 'penduduk'])->name('penduduk');

// Dashboard Visi Misi
Route::get('/dashboard/visi-misi', [VisiController::class, 'index'])->middleware('auth');
Route::put('/dashboard/visi-misi/update/{id}', [VisiController::class, 'update'])->middleware('auth')->name('visi.update');

// Dashboard Sejarah
Route::get('/dashboard/sejarah', [SejarahController::class, 'index'])->middleware('auth');
Route::put('/dashboard/sejarah/update/{id}', [SejarahController::class, 'update'])->middleware('auth')->name('sejarah.update');


// Dashboard Slider
Route::get('/dashboard/slider', [SliderController::class, 'index'])->middleware('auth');
Route::post('/dashboard/slider', [SliderController::class, 'store'])->middleware('auth');
Route::get('/dashboard/slider/tambah', [SliderController::class, 'create'])->name('create.slider')->middleware('auth');
Route::get('/dashboard/slider/edit/{id}', [SliderController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/slider/update/{id}', [SliderController::class, 'update'])->middleware('auth')->name('slider.update');
Route::get('/dashboard/slider/hapus/{id}', [SliderController::class, 'destroy'])->middleware('auth')->name('slider.hapus');

// Dashboard Galeri
Route::get('/dashboard/galeri', [GaleriController::class, 'index'])->middleware('auth');
Route::post('/dashboard/galeri', [GaleriController::class, 'store'])->middleware('auth');
Route::get('/dashboard/galeri/tambah', [GaleriController::class, 'create'])->name('create.galeri')->middleware('auth');
Route::get('/dashboard/galeri/edit/{id}', [GaleriController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/galeri/update/{id}', [GaleriController::class, 'update'])->middleware('auth')->name('galeri.update');
Route::get('/dashboard/galeri/hapus/{id}', [GaleriController::class, 'destroy'])->middleware('auth')->name('galeri.hapus');

// Dashboard Layanan
Route::get('/dashboard/layanan', [LayananController::class, 'index'])->name('layanan')->middleware('auth');
Route::get('/dashboard/layanan/checkSlug', [LayananController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/layanan/tambah', [LayananController::class, 'create'])->name('create.layanan')->middleware('auth');
Route::post('/dashboard/layanan', [LayananController::class, 'store'])->middleware('auth');
Route::get('/dashboard/layanan/edit/{id}', [LayananController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/layanan/update/{id}', [LayananController::class, 'update'])->middleware('auth')->name('layanan.update');
Route::get('/dashboard/layanan/hapus/{id}', [LayananController::class, 'destroy'])->middleware('auth')->name('layanan.hapus');
Route::get('/layanan/{slug}', [LayananController::class, 'show']);
Route::get('/layanan', [LayananController::class, 'showw']);


// Dashboard Admin
Route::get('/dashboard/admin', [UserController::class, 'index'])->middleware('auth');
Route::post('/dashboard/admin', [UserController::class, 'store'])->middleware('auth');
Route::get('/dashboard/admin/tambah', [UserController::class, 'create'])->name('create.admin')->middleware('auth');
Route::get('/dashboard/admin/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/admin/update/{id}', [UserController::class, 'update'])->middleware('auth')->name('admin.update');
Route::get('/dashboard/admin/hapus/{id}', [UserController::class, 'destroy'])->middleware('auth')->name('admin.hapus');


// Upload & Export Excel
Route::post('penduduk-import', [PendudukController::class, 'import'])->name('penduduk.import')->middleware('auth');
Route::get('penduduk-export', [PendudukController::class, 'export'])->name('penduduk.export')->middleware('auth');