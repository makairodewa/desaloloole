<!-- resources/views/kd/index.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Pemerintahan
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('pmd.create') }}" class="btn btn-primary mb-3">Add Pemerintahan</a>
    <div class="row">
        @foreach ($results as $row)
            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header"
                        style="background-color: #{{ str_pad(dechex(rand(0x000000, 0xffffff)), 6, 0, STR_PAD_LEFT) }}">
                        <div class="widget-user-image">
                            @if (isset($row->pmd_photo))
                                <img class="img-circle elevation-2" src="{{ $row->pmd_photo }}" alt="User Avatar">
                            @else
                                <img class="img-circle elevation-2" src="{{ asset('dist/img/user7-128x128.jpg') }}"
                                    alt="User Avatar">
                            @endif
                        </div>
                        <h3 class="widget-user-username">{{ $row->pmd_nama }}</h3>
                        <h5 class="widget-user-desc">{{ $row->pmd_jabatan }}</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Notlpn <span class="float-right badge bg-primary">{{ $row->pmd_notlp }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Facebook <span class="float-right badge bg-info">{{ $row->pmd_fb }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-orange">
                                    Instagram <span class="float-right badge bg-success">{{ $row->pmd_ig }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-success">
                                    WhattsApp <span class="float-right badge bg-danger">{{ $row->pmd_wa }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pmd.edit', $row->pmd_id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pmd.destroy', $row->pmd_id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
