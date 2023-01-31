<!-- resources/views/kd/index.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Kontak Desa
@endsection
@section('content')
    <a href="{{ route('kd.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus">
            Kontak
            Desa</i></a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No.Tlpn</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $row)
                <tr>
                    <td>{{ $row->kd_nama }}</td>
                    <td>{{ $row->kd_email }}</td>
                    <td>{{ $row->kd_alamat }}</td>
                    <td>{{ $row->kd_notlp }}</td>
                    <td>
                        <a href="{{ route('kd.edit', $row->kd_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kd.destroy', $row->kd_id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
