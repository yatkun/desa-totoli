<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SejarahController extends Controller
{
    public function index()
    {
        $post = Sejarah::find(1);
        //render view with post
        return view('dashboard.sejarah.index', compact('post'), [
            'menu' => 'Profil',
            'title' => 'Sejarah',

        ]);
    }

 

    public function update(Request $request, $id)
    {
        //validate form
        $validatedData = $request->validate([
            'sejarah' => 'required',
        ]);


        //get post by ID
        $post = Sejarah::findOrFail($id);

       
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/sejarah')->with(['success' => 'Visi Misi Berhasil Diubah!']);
    }
}
