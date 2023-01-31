<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $results = ProfilDesa::all();
        return view('profilDesa.index', compact('results'));
    }

    public function create()
    {
        return view('profilDesa.create');
    }
    public function edit($id)
    {
        $pd = ProfilDesa::find($id);
        return view('profilDesa.edit', compact('pd'));
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $pd = new ProfilDesa();
        $pd->pd_nama = str()->title($validate['name']);
        $pd->pd_alamat = $validate['alamat'];
        $pd->pd_visi = $validate['visi'];
        $pd->pd_misi = $validate['misi'];
        $pd->pd_sejarah = $request->sejarah;
        $pd->pd_us_id = Auth::user()->us_id;
        $pd->save();
        return redirect()->route('pd.index')->with('success', 'Profil desa created successfully.');
    }

    public function update(Request $request, $pd)
    {
        $rules = [
            'name' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ];
        $validatedata = $request->validate($rules);
        $validate['pd_nama'] = str()->title($validatedata['name']);
        $validate['pd_alamat'] = $validatedata['alamat'];
        $validate['pd_visi'] = $validatedata['visi'];
        $validate['pd_misi'] = $validatedata['misi'];
        $validate['pd_sejarah'] = $request->sejarah;
        $validate['pd_us_id'] = Auth::user()->us_id;
        ProfilDesa::where('pd_id', $pd)->update($validate);
        return redirect()->route('pd.index')->with('success', 'Profil desa updated successfully.');
    }
    public function destroy($pd)
    {
        $data = ProfilDesa::find($pd);
        $data->delete();
        return redirect()->route('pd.index')->with('success', 'Profil desa deleted successfully.');
    }
}