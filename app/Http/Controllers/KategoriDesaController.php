<?php

namespace App\Http\Controllers;

use App\Models\KategoriDesa;
use Illuminate\Http\Request;

class KategoriDesaController extends Controller
{
    public function index()
    {
        $results = KategoriDesa::all();
        return view('kategori.index', compact('results'));
    }
}