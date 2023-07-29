<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = Identitas::find(1);
    
        return view('dashboard.identitas.index', [
            'menu' => 'Master Data',
            'title' => 'Identitas Desa',
           'datas' => $data
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'nama' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'email' => '',
            'gmap' => '',
            'facebook' => '',
            'instagram' => '',
            'nohp' => 'required',
            'kodepos' => 'required',
            'logo' => 'image|file|max:1024'
        ]);

        //get post by ID
        $post = Identitas::findOrFail($id);

        if($request->file('logo')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['logo'] = $request->file('logo')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/identitasdesa')->with(['success' => 'Data Berhasil Diubah!']);
    }

    
}
