@extends('admin.layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('content')
    <div class="container">
        <h1>Tambah Portofolio</h1>
        <form action="{{ route('manajeman_portofolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
