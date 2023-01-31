@extends('layouts.admin.app')
@section('title')
    Udpdate Profil Desa
@endsection
@section('content')
    <form action="{{ route('pd.update', $pd->pd_id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Desa</label>
                            <input type="text"
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                name="name" id="name" value="{{ $pd->pd_nama }}" autofocus>
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
                                id="alamat">{{ $pd->pd_alamat }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">

                            <label for="name">Visi</label>
                            <textarea id="visi" name="visi">
                                {{ $pd->pd_visi }}
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
                                {{ $pd->pd_misi }}
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
                                {{ $pd->pd_sejarah }}
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
