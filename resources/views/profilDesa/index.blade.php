@extends('layouts.admin.app')

@section('title')
    Profil Desa
@endsection
@section('content')
    @if ($results->count() > 0)
    @else
        <a href="{{ route('pd.create') }}" class="btn btn-primary mb-3">Add Profil Desa</a>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                {{-- <th>Visi</th>
                <th>Misi</th>
                <th>Sejarah</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->pd_nama }}</td>
                    <td>{{ $result->pd_alamat }}</td>
                    {{-- <td>{{ $result->pd_visi }}</td> --}}
                    {{-- <td>{{ $result->pd_misi }}</td> --}}
                    {{-- <td>{{ $result->pd_sejarah }}</td> --}}
                    <td>
                        {{-- <a href="{{ route('pd.edit', $result->pd_id) }}" class="btn btn-sm btn-info">View</a> --}}
                        <a href="{{ route('pd.edit', $result->pd_id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pd.destroy', $result->pd_id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
