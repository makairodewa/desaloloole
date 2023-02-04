<!-- resources/views/roles/index.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Kategori
@endsection
@section('content')
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Add Kategori</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $row)
                <tr>
                    {{-- <td>{{ $role->rs_id }}</td> --}}
                    <td>{{ $row->ktd_nama }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $row->ktd_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kategori.destroy', $row->ktd_id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick=" return confirm('Hapus {{ $row->ktd_nama }} ? ')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
