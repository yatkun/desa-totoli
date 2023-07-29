<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatadosenController extends Controller
{
    public function index()
    {
        return view('dashboard.master.dosen.index',[
            'menu' => 'Master',
            'title' => 'Data Dosen',
        ]);
    }
}
