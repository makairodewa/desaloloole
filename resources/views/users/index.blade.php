@extends('layouts.admin.app')

@section('title')
    Users
@endsection
@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add Users</a>
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
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->us_name }}</td>
                    <td>{{ $user->us_email }}</td>
                    <td>{{ $user->role->rs_name }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->us_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.destroy', $user->us_id) }}" method="post" class="d-inline">
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
