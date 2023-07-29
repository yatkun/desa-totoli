<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Identitas;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $datas = Pengumuman::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datas = Pengumuman::paginate(10);
        }
      
        return view('dashboard.pengumuman.index', [
            'menu' => 'Pengumuman',
            'title' => 'Daftar Pengumuman',
            'items' => $datas,
        ]);
    }

    public function create()
    {
        return view('dashboard.pengumuman.create', [
            'menu' => 'Pengumuman',
            'title' => 'Tambah Pengumuman',
        ]);
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pengumuman::class, 'slug', $request->judul);

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

        $validatedData['user_id'] = auth()->user()->id;
      

        Pengumuman::create($validatedData);

        return redirect('/dashboard/pengumuman')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        $post = Pengumuman::findOrFail($id);

        //render view with post
        return view('dashboard.pengumuman.edit', compact('post'), [
            'menu' => 'Pengumuman',
            'title' => 'Edit Pengumuman',
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


        //get post by ID
        $post = Pengumuman::findOrFail($id);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/pengumuman')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Pengumuman::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/pengumuman')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function show($slug)
    {
        $post = Pengumuman::where('slug', $slug)->firstOrFail();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        // You can pass the $post variable to a view or return it as JSON, depending on your needs.
        return view('public.pengumuman', compact('post'), [
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'title' => 'Pengumuman',
            'menu' => 'Pengumuman',
        ]);
    }
   
}
