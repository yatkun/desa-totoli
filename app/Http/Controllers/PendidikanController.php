<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PendidikanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            // Tambahkan validasi untuk kategori lainnya
        ]);

        // Simpan data ke dalam database
        Pendidikan::create([
            'nama' => $request->input('nama'),
            // Simpan kategori lainnya
        ]);

        return redirect()->back()->with('success', 'Pendidikan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            // Tambahkan validasi untuk kategori lainnya
        ]);

        // Cari data berdasarkan ID
        $dusun = Pendidikan::findOrFail($id);

        // Update data
        $dusun->update([
            'nama' => $request->input('nama'),
            // Update kategori lainnya
        ]);

        return redirect()->back()->with('success', 'Pendidikan berhasil diupdate');
    }
    public function destroy($id)
    {
        // Cari data dusun berdasarkan ID
        $dusun = Pendidikan::findOrFail($id);

        // Hapus data dusun
        $dusun->delete();

        return redirect()->back()->with('success', 'Data Pendidikan berhasil dihapus');
    }
}
