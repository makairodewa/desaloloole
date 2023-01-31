<!-- resources/views/kd/index.blade.php -->

@extends('layouts.admin.app')
@section('title')
    Pemerintahan
@endsection
@section('content')
    <a href="{{ route('pmd.create') }}" class="btn btn-primary mb-3">Add Pemerintahan</a>
    <div class="row">
        @foreach ($results as $row)
            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header"
                        style="background-color: #{{ str_pad(dechex(rand(0x000000, 0xffffff)), 6, 0, STR_PAD_LEFT) }}">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                        </div>
                        <h3 class="widget-user-username">{{ $row->pmd_nama }}</h3>
                        <h5 class="widget-user-desc">{{ $row->pmd_jabatan }}</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Projects <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Tasks <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Completed Projects <span class="float-right badge bg-success">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Followers <span class="float-right badge bg-danger">842</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
