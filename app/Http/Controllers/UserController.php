<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $post = User::all();
        //render view with post
        return view('dashboard.admin.index', compact('post'), [
            'menu' => 'Admin',
            'title' => 'Daftar Admin',
            'posts' => $post

        ]);
    }


    public function create()
    {
        return view('dashboard.admin.create', [
            'menu' => 'Admin',
            'title' => 'Tambah Admin',
        ]);
    }

    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);


        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        return redirect('/dashboard/admin')->with('success', 'Admin berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        //get post by ID
        $post = User::findOrFail($id);

        //render view with post
        return view('dashboard.admin.edit', compact('post'), [
            'menu' => 'Admin',
            'title' => 'Edit Admin',
        ]);
    }

    public function update(Request $request, $id)
    {
        //validate form
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'password' => 'required',
        ]);


        $validatedData['password'] = Hash::make($request->password);

        //get post by ID
        $post = User::findOrFail($id);

   
        $post->update($validatedData);
        //redirect to index
        return redirect('/dashboard/admin')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        //get post by ID
        $post = User::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

    
       
        //delete post
        $post->delete();

        //redirect to index
        return redirect('/dashboard/admin')->with(['success' => 'Data Berhasil Dihapus!']);
    }




   
}
