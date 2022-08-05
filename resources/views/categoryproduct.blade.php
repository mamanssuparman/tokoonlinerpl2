@extends('dashboard')
@section('contentnya')
    <a href="/categoryproduct/create" class="btn btn-primary btn-sm">Tambah Data Categori</a>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-responsive table-hover">
        <tr>
            <td>No</td>
            <td>Nama Categori Product</td>
            <td>Aksi</td>
        </tr>
        @foreach ($datacategory as $datanya)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datanya->nama_category }}</td>
                <td>
                    <a href="/categoryproduct/{{ $datanya->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
                    <form action="/categoryproduct/{{ $datanya->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus data tersebut.?')">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
