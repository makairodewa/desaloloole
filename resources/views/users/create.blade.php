<!-- resources/views/roles/create.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Users
@endsection
@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('us_name')
                is-invalid
            @enderror"
                name="us_name" id="name" value="{{ old('us_name') }}" required autofocus>
            @error('us_name')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control @error('us_email')
                is-invalid
            @enderror "
                name="us_email" id="us_email" value="{{ old('us_email') }}" required>
            @error('us_email')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password"
                class="form-control @error('us_password')
                is-invalid
            @enderror "
                name="us_password" id="us_password" required>
            @error('us_password')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="rs_id" required>
                @foreach ($roles as $role)
                    <option value="{{ $role->rs_id }}">{{ $role->rs_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
