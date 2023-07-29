<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('dashboard.slider.index',[
            'title' => 'Slider',
            'menu' => 'Slider',
            'sliders' => $slider
        ]);
    }

    public function create()
    {
        return view('dashboard.slider.create', [
            'menu' => 'Slider',
            'title' => 'Tambah Slider',
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

        Slider::create($validatedData);

        return redirect('/dashboard/slider')->with('success', 'Slider berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        $post = Slider::findOrFail($id);

        //render view with post
        return view('dashboard.slider.edit', compact('post'), [
            'menu' => 'Slider',
            'title' => 'Edit Slider',
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:1024'
        ]);

    
        //get post by ID
        $post = Slider::findOrFail($id);

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
        $post = Slider::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/slider')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
