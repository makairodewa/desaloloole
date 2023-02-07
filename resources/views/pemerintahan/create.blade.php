<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Pemerintahan Desa
@endsection
@section('content')
    <form action="{{ route('pmd.store') }}" method="post">
        @csrf
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
                                name="name" id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                name="jabatan">
                                <option selected disabled>Pilih Jabatan</option>
                                @foreach ($jabatan as $position)
                                    <option value="{{ $position->jb_id }}"
                                        {{ old('jabatan') == $position->jb_id ? 'selected' : '' }}>{{ $position->jb_nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jabatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
