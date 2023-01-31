<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Create Profil Desa
@endsection
@section('content')
    <form action="{{ route('pd.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Create Profil Desa
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Desa</label>
                            <input type="text"
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                name="name" id="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat</label>
                            <textarea name="alamat" rows="3"
                                class="form-control @error('alamat')
                                is-invalid
                                @enderror
                                "
                                id="alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Visi</label>
                            <textarea id="visi" name="visi">
                                {{ old('visi') }}
                            </textarea>
                            @error('visi')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <textarea type="text" id="misi" name="misi">
                                {{ old('misi') }}
                            </textarea>
                            @error('misi')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Sejarah Desa</label>
                            <textarea id="sejarah" name="sejarah">
                                {{ old('sejarah') }}
                            </textarea>
                            @error('sejarah')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
