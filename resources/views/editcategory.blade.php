@extends('dashboard')
@section('contentnya')
    <div class="cotainer">
        
        <form action="/categoryproduct/{{ $datakategori->id }}" method="POST">
            @method('PUT')
            @csrf
        <div class="row">
            <div class="col-md-12">
                <label for="nama_category">Nama Category</label>
                <input type="text" name="nama_category" class="form form-control" value="{{ $datakategori->nama_category }}">
                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="/categoryproduct" class="btn btn-warning btn-sm">Back to Category</a>
            </div>
        </div>
    </form>
    </div>
@endsection