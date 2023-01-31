<?php

namespace App\Http\Controllers;

use App\Models\BeritaDesa;
use Illuminate\Http\Request;

class BeritaDesaController extends Controller
{
    public function index()
    {
        $results = BeritaDesa::all();
        return view('berita.index', compact('results'));
    }
}