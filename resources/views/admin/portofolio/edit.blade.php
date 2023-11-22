@extends('admin.layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('content')
    <div class="container">
        <h1>Edit Portofolio</h1>
        <form action="{{ route('manajeman_portofolio.update', $portofolio->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" name="gambar" id="gambar">
                <img src="{{ Storage::url($portofolio->gambar) }}" width="100" alt="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
