<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Kategori Berita
@endsection
@section('content')
    <form action="{{ route('kategori.store') }}" method="post">
        @if (isset($data))
            @method('put')
        @else
            @method('post')
        @endif
        @csrf
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-sm-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Kategori</label>
                            <input type="text"
                                class="form-control @error('name')
                is-invalid
            @enderror"
                                name="name" id="name" value="{{ old('name') }}">
                            @error('name')
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
