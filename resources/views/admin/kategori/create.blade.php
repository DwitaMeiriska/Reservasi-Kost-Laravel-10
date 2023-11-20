{{-- resources/views/admin/kategori/create.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container mt-4">
    <h1>Tambah Kategori Baru</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
