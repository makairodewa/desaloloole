<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jabatan::all();
        return view('jabatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJabatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJabatanRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:jabatans|min:3'
        ]);
        $jabatan = Jabatan::create([
            'jb_nama' => $request->name
        ]);
        return redirect()->route('jb.index')->with('success', 'Jabatan was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        return view('jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view("jabatan.edit", compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJabatanRequest  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJabatanRequest $request, Jabatan $jabatan)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string|unique:jabatans|min:3'
            ]
        );
        $data = Jabatan::where('jb_id', $jabatan)->update([
            'jb_nama' => $request->name
        ]);
        return redirect()->route('jb.index')->with('success', 'Jabatan was update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($jabatan)
    {
        $data = Jabatan::find($jabatan);
        $data->delete();
        return redirect()->route('jb.index')->with('success', 'Jabatan was deleted successfully');
    }
}
