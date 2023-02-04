<?php

namespace App\Http\Controllers;

use App\Models\PemerintahDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemerintahDesaController extends Controller
{
    public function index()
    {
        $results = PemerintahDesa::all();
        return view('pemerintahan.index', compact('results'));
    }

    public function create()
    {
        return view('pemerintahan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'jabatan' => 'required',
            ]
        );
        $data = new  PemerintahDesa();
        $data->pmd_nama = $validateData['name'];
        $data->pmd_jabatan = $validateData['jabatan'];
        $data->pmd_us_id = Auth::user()->us_id;
        $data->save();
        return redirect()->route('pmd.index')->with('success', 'Pemerintahan desa was created successfully');
    }
    public function edit($id)
    {
        $data = PemerintahDesa::find($id);
        return view('pemerintahan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'jabatan' => 'required',
            ]
        );
        $data['pmd_nama'] = str()->title($validateData['name']);
        $data['pmd_jabatan'] = str()->title($validateData['jabatan']);
        $data['pmd_us_id'] = Auth::user()->us_id;
        PemerintahDesa::where('pmd_id', $id)->update($data);
        return redirect()->route('pmd.index')->with('success', 'Pemerintahan desa was updated successfully');
    }


    public function destroy($id)
    {
        $data = PemerintahDesa::find($id);
        $data->delete();
        return redirect()->route('pmd.index')->with('success', 'Pemerintahan Desa was deleted susccessfully');
    }
}
