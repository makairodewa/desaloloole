<?php

namespace App\Http\Controllers;

use App\Models\PemerintahDesa;
use Illuminate\Http\Request;

class PemerintahDesaController extends Controller
{
    public function index()
    {
        $results = PemerintahDesa::all();
        return view('pemerintahan.index', compact('results'));
    }
}