<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Aparatur;

use App\Models\Identitas;
use Illuminate\View\View;
use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $datas = Berita::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datas = Berita::paginate(10);
        }
       
        return view('dashboard.berita.index', [
            'menu' => 'Berita',
            'title' => 'Berita',
            'items' => $datas,
        ]);
    }

    public function create()
    {
        return view('dashboard.berita.create', [
            'menu' => 'Berita',
            'title' => 'Tambah Berita',
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);

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
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 100, '...');

        Berita::create($validatedData);

        return redirect('/dashboard/berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        $post = Berita::findOrFail($id);

        //render view with post
        return view('dashboard.berita.edit', compact('post'), [
            'menu' => 'Berita',
            'title' => 'Berita',
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
        $post = Berita::findOrFail($id);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/berita')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Berita::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        if($post->gambar){
            Storage::delete($post->gambar);
        }

       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/berita')->with(['success' => 'Data Berhasil Dihapus!']);
    }




    public function show($slug)
    {
        $post = Berita::where('slug', $slug)->firstOrFail();
        $identitas = Identitas::find(1);
        $aparatur = Aparatur::all();
        $pengumuman = Pengumuman::latest()->take(5)->get();
        // You can pass the $post variable to a view or return it as JSON, depending on your needs.
        return view('public.berita', compact('post'), [
            'aparaturs' => $aparatur,
            'pengumumans' => $pengumuman,
            'identitas' => $identitas,
            'menu' => 'Berita',
            'title' => 'Berita',
        ]);
    }
}
