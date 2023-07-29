<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AparaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Aparatur::get();
        return view('dashboard.aparatur.index', [
            'menu' => 'Master Data',
            'title' => 'Aparatur Desa',
            'items' => $datas,
        ]);
    }

    public function create()
    {
        return view('dashboard.aparatur.create', [
            'menu' => 'Master Data',
            'title' => 'Tambah Aparatur Desa',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        Aparatur::create($validatedData);

        return redirect('/dashboard/aparaturdesa')->with('success', 'Aparatur berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        
        $post = Aparatur::findOrFail($id);
  
        //render view with post
        return view('dashboard.aparatur.edit', compact('post'), [
            'menu' => 'Master Data',
            'title' => 'Aparatur Desa',
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        //get post by ID
        $post = Aparatur::findOrFail($id);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/aparaturdesa')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Aparatur::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/aparaturdesa')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    /**
     * Show the form for creating a new resource.
     */
   
}