<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            // Tambahkan validasi untuk kategori lainnya
        ]);

        // Simpan data ke dalam database
        Dusun::create([
            'nama' => $request->input('nama'),
            // Simpan kategori lainnya
        ]);

        return redirect()->back()->with('success', 'Dusun berhasil ditambahkan');
    }

    public function update(Request $request, $id)
{
    // Validasi input jika diperlukan
    $request->validate([
        'nama' => 'required',
        // Tambahkan validasi untuk kategori lainnya
    ]);

    // Cari data berdasarkan ID
    $dusun = Dusun::findOrFail($id);

    // Update data
    $dusun->update([
        'nama' => $request->input('nama'),
        // Update kategori lainnya
    ]);

    return redirect()->back()->with('success', 'Dusun berhasil diupdate');
}
public function destroy($id)
{
    // Cari data dusun berdasarkan ID
    $dusun = Dusun::findOrFail($id);

    // Hapus data dusun
    $dusun->delete();

    return redirect()->back()->with('success', 'Data dusun berhasil dihapus');
}


}
