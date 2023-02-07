@extends('layouts.admin.app')
@section('title')
    Jabatan
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-botton">
            <thead class="table-dark">
                <caption>Jabatan</caption>
                <tr>
                    <th>#</th>
                    <th>Nama Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $item)
                    <tr class="table-light">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->jb_nama }}</td>
                        <td>
                            <a href="{{ route('jb.edit', $item->jb_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('jb.destroy', $item->jb_id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
@endsection
