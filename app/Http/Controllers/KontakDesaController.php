<?php

namespace App\Http\Controllers;

use App\Models\KontakDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontakDesaController extends Controller
{
    public function index()
    {
        $results = KontakDesa::all();
        return view('kontak.index', compact('results'));
        return view('kontak.index', compact('results'));
    }

    public function create()
    {
        return view('kontak.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'notlp' => 'required',
        ];
        $validate = $request->validate($rules);
        $data['kd_nama'] = $validate['name'];
        $data['kd_email'] = $validate['email'];
        $data['kd_notlp'] = $validate['notlp'];
        $data['kd_alamat'] = $request['alamat'];
        $data['kd_us_id'] = Auth::user()->us_id;
        KontakDesa::create($data);
        return redirect()->route('kd.index')->with('success', 'Kontak desa created successfully.');
    }
    public function edit($id)
    {
        $kd = KontakDesa::find($id);
        return view('kontak.edit', compact('kd'));
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'notlp' => 'required',
        ];
        $validate = $request->validate($rules);
        $data['kd_nama'] = $validate['name'];
        $data['kd_email'] = $validate['email'];
        $data['kd_notlp'] = $validate['notlp'];
        $data['kd_alamat'] = $request['alamat'];
        $data['kd_us_id'] = Auth::user()->us_id;
        KontakDesa::where('kd_id', $id)->update($data);
        return redirect()->route('kd.index')->with('success', 'Kontak desa updated successfully.');
    }

    public function destroy($id)
    {
        $kd = KontakDesa::find($id);
        $kd->delete();
        return redirect()->route('kd.index')->with('success', 'Kontak desa deleted successfully.');
    }
}