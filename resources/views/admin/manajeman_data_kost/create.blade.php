{{-- resources/views/admin/manajeman_data_kost/create.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Tambah Kost Baru')

@section('content')
<div class="container mt-4">
    <h1>Tambah Kost Baru</h1>
    <form action="{{ route('manajeman_data_kost.store') }}" method="POST" enctype="multipart/form-data">
        @csrf {{-- CSRF token untuk keamanan form --}}
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-select" required>
                {{-- Asumsi Anda sudah mengirimkan variabel $kategoris dari controller --}}
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" required>
        </div>
        <div class="mb-3">
            <label for="harga_kamar" class="form-label">Harga Kamar</label>
            <input type="number" class="form-control" id="harga_kamar" name="harga_kamar" required>
        </div>
        <div class="mb-3">
            <label for="ukuran_kamar" class="form-label">Ukuran Kamar</label>
            <input type="text" class="form-control" id="ukuran_kamar" name="ukuran_kamar" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kost</button>
    </form>
</div>
@endsection
