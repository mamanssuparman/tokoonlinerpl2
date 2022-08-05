@extends('dashboard')
@section('contentnya')
<a href="/product/create" class="btn btn-primary btn-sm">Tambah Data Product</a>
    <table class="table table-responsive table-hover">
        <tr>
            <td>No</td>
            <td>Nama Product</td>
            <td>Harga</td>
            <td>Deskripsi</td>
            <td>Stock</td>
            <td>Kategori</td>
            <td>Option</td>
        </tr>
        @foreach ($dataproduct as $productnya)
            <tr>
                <td>1</td>
                <td>{{ $productnya->nama_product }}</td>
                <td>{{ $productnya->harga }}</td>
                <td>{{ $productnya->deskripsi }}</td>
                <td>{{ $productnya->stock }}</td>
                <td>{{ $productnya->categori->nama_category }}</td>
                <td><button class="btn btn-primary btn-xs">Ubah</button></td>
            </tr>
        @endforeach
    </table>
@endsection