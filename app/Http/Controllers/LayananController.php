<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Aparatur;
use App\Models\Identitas;
use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class LayananController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $datas = Layanan::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datas = Layanan::paginate(10);
        }
       
        return view('dashboard.layanan.index', [
            'menu' => 'Layanan',
            'title' => 'Daftar Layanan',
            'items' => $datas,
        ]);
    }

    public function create()
    {
        return view('dashboard.layanan.create', [
            'menu' => 'Layanan',
            'title' => 'Tambah Layanan',
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Layanan::class, 'slug', $request->judul);

        return response()->json(['slug' => $slug]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'isi' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

     
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 100, '...');

        Layanan::create($validatedData);

        return redirect('/dashboard/layanan')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        $post = Layanan::findOrFail($id);

        //render view with post
        return view('dashboard.layanan.edit', compact('post'), [
            'menu' => 'Layanan',
            'title' => 'Layanan',
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 100, '...');

        //get post by ID
        $post = Layanan::findOrFail($id);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/layanan')->with(['success' => 'Layanan Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Layanan::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/layanan')->with(['success' => 'Layanan Berhasil Dihapus!']);
    }




    public function show($slug)
    {
        $post = Layanan::where('slug', $slug)->firstOrFail();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        // You can pass the $post variable to a view or return it as JSON, depending on your needs.
        return view('public.layanan.detail', compact('post'), [
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'menu' => 'Layanan',
            'title' => 'Layanan',
      
        ]);
    }

    public function showw()
    {
        $data = Layanan::paginate(6);
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        // You can pass the $post variable to a view or return it as JSON, depending on your needs.
        return view('public.layanan.index', compact('data'), [
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'menu' => 'Layanan',
            'title' => 'Layanan',
            'datas' => $data
      
        ]);
    }
}
