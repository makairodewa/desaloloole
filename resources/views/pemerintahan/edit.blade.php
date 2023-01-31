<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Edit Kontak Desa
@endsection
@section('content')
    <form action="{{ route('pmd.update', $kd->kd_id) }}" method="post">
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
                                name="name" id="name" value="{{ $kd->kd_nama }}">
                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"
                                class="form-control @error('email')
                is-invalid
            @enderror"
                                name="email" id="email" value="{{ $kd->kd_email }}">
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="notlp">No Tlpn</label>
                            <input type="number"
                                class="form-control @error('notlp')
                is-invalid
            @enderror"
                                name="notlp" id="notlp" value="{{ $kd->kd_notlp }}">
                            @error('notlp')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text"
                                class="form-control @error('alamat')
                is-invalid
            @enderror"
                                name="alamat" id="alamat" value="{{ $kd->kd_alamat }}">
                            @error('alamat')
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
