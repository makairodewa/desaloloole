<!-- resources/views/roles/edit.blade.php -->

@extends('layouts.admin.app')

@section('content')
    <form action="{{ route('users.update', $user->us_id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="us_name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" name="us_email" id="us_email">
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="us_password" id="us_password">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="rs_id">
                @foreach ($roles as $role)
                    <option value="{{ $role->rs_id }}">{{ $role->rs_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
