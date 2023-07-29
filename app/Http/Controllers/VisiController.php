<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\Berita;
use App\Models\Aparatur;
use App\Models\Identitas;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class VisiController extends Controller
{
    
    public function index()
    {
        $post = Visi::find(1);
        //render view with post
        return view('dashboard.visimisi.index', compact('post'), [
            'menu' => 'Profil',
            'title' => 'Visi',

        ]);
    }

 

    public function update(Request $request, $id)
    {
        //validate form
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);


        //get post by ID
        $post = Visi::findOrFail($id);

       
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/visi-misi')->with(['success' => 'Sejarah Berhasil Diubah!']);
    }
}
