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

    public function create()
    {
        return view('kategori.create');
    }

    public function edit($id)
    {
        $kategoriDesa = KategoriDesa::find($id);
        return view('kategori.edit', compact('kategoriDesa'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ]);
        $kat = new KategoriDesa();
        $kat->ktd_nama = str()->title($validateData['name']);
        $kat->ktd_slug = str()->slug($validateData['name']);
        $kat->save();
        return redirect()->route('kategori.index')->with('success', 'Kategori was created successfully');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ]);
        $data['ktd_nama'] =  str()->title($validateData['name']);
        $data['ktd_slug'] = str()->slug($validateData['name']);
        KategoriDesa::where('ktd_id', $id)->update($data);
        return redirect()->route('kategori.index')->with('success', 'Kategori was updated successfully');
    }
    public function destroy($id)
    {

        $data = KategoriDesa::find($id);
        $data->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori was deleted successfully');
    }
}
