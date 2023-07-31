<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exports\PendudukExport;
use App\Imports\PendudukImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
       
        if ($request->has('search')) {
            $datas = Penduduk::where('nama', 'LIKE', '%' . $request->search . '%')
            ->orWhere('nik', 'LIKE', '%' . $request->search . '%')
            ->orWhere('nohp', 'LIKE', '%' . $request->search . '%')
            ->orWhere('pekerjaan', 'LIKE', '%' . $request->search . '%')->paginate(15);
        } else {
            $datas = Penduduk::paginate(15);
        }
        

        return view('dashboard.penduduk.index', [
            'menu' => 'Penduduk',
            'title' => 'Daftar Penduduk',
            'items' => $datas,
        ]);
    }

    public function create()
    {
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $dusun = Dusun::all();
        return view('dashboard.penduduk.create', [
            'menu' => 'Penduduk',
            'title' => 'Daftar Penduduk',
            'pendidikans' => $pendidikan,
            'pekerjaans' => $pekerjaan,
            'dusuns' => $dusun,
        ]);
    }

    public function store(Request $request)
    {
   

        $rules = [
            'nama' => 'required',
            'nik' => 'required|unique:penduduks',
            'nohp' => 'required',
            'pekerjaan' => 'required',
        ];

        $messages = [
            // Definisikan pesan error kustom untuk setiap aturan validasi di sini
            'nik.unique' => 'NIK sudah terdaftar pada sistem',
            'nama.required' => 'Nama wajib diisi',
            'nohp.required' => 'No.HP wajib diisi',
            'pekerjaan.required' => 'Pekerjaan wajib diisi',
            'nik.required' => 'NIK wajib diisi',
           
            // ...
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // Jika validasi berhasil, simpan data ke database
        $data = new Penduduk();
        $data->nama = $request->input('nama');
        $data->nik = $request->input('nik');
        $data->nohp = $request->input('nohp');
        $data->kelamin = $request->input('kelamin');
        $data->pendidikan = $request->input('pendidikan');
        $data->agama = $request->input('agama');
        $data->perkawinan = $request->input('perkawinan');
        $data->pekerjaan = $request->input('pekerjaan');
        // ...

        $data->save();
     

        return redirect('/dashboard/penduduk')->with('success', 'Penduduk berhasil ditambahkan');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'nik' => 'required',
            'kelamin' => '',
            'pendidikan' => '',
            'agama' => '',
            'perkawinan' => '',
            'pekerjaan' => 'required',
        ]);

        //get post by ID
        $post = Penduduk::findOrFail($id);

      
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/penduduk')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function edit(string $id)
    {
        //get post by ID
        
        $post = Penduduk::findOrFail($id);
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $dusun = Dusun::all();
        //render view with post
        return view('dashboard.penduduk.edit', compact('post'), [
            'menu' => 'Penduduk',
            'title' => 'Edit Penduduk',
            'pendidikans' => $pendidikan,
            'pekerjaans' => $pekerjaan,
            'dusuns' => $dusun,
        ]);
    }

    public function pengaturan()
    {
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $dusun = Dusun::all();
        $datas = Penduduk::all();
        return view('dashboard.penduduk.pengaturan', [
            'menu' => 'Penduduk',
            'title' => 'Pengaturan Penduduk',
            'items' => $datas,
            'pendidikans' => $pendidikan,
            'pekerjaans' => $pekerjaan,
            'dusuns' => $dusun,
        ]);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Penduduk::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/penduduk')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // Import
    public function import(){
        

        Excel::import(new PendudukImport, request()->file('file'));
       
        
        return back();
    }




    // Export
    public function export(){
        return Excel::download(new PendudukExport, 'penduduk.xlsx');
      
    }

 

}
