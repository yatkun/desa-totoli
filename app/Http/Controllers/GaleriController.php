<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::paginate(3);
        return view('dashboard.galeri.index',[
            'title' => 'Galeri',
            'menu' => 'Galeri',
            'galeris' => $galeri
        ]);
    }

    public function create()
    {
        return view('dashboard.galeri.create', [
            'menu' => 'Galeri',
            'title' => 'Tambah Galeri',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        Galeri::create($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Slider berhasil ditambahkan');
    }
    public function edit(string $id)
    {
        //get post by ID
        $post = Galeri::findOrFail($id);

        //render view with post
        return view('dashboard.galeri.edit', compact('post'), [
            'menu' => 'Galeri',
            'title' => 'Edit Galeri',
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:1024'
        ]);

    
        //get post by ID
        $post = Galeri::findOrFail($id);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/slider')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Galeri::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/galeri')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
