<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenpribadiController extends Controller
{
    public function index()
    {
        return view('dashboard.dokumen.pribadi',[
            'menu' => 'Dokumen',
            'title' => 'Dokumen Pribadi',
        ]);
    }

}
