<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Pemerintahan Desa
@endsection
@section('content')
    <form action="{{ route('pmd.update', $data->pmd_id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-sm-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text"
                                class="form-control @error('name')
                is-invalid
            @enderror"
                                name="name" id="name" value="{{ $data->pmd_nama }}">
                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text"
                                class="form-control @error('jabatan')
                is-invalid
            @enderror"
                                name="jabatan" id="jabatan" value="{{ $data->pmd_jabatan }}">
                            @error('jabatan')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
