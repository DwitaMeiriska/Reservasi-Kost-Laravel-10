{{-- resources/views/admin/manajeman_data_kost/edit.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Edit Kost')

@section('content')
<div class="container mt-4">
    <h1>Edit Kost: {{ $kost->nama_kamar }}</h1>
    <form action="{{ route('manajeman_data_kost.update', $kost->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Spesifikasikan metode HTTP PUT untuk update --}}

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-select" required>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kost->kategori_id == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="{{ $kost->nama_kamar }}" required>
        </div>

        <div class="mb-3">
            <label for="harga_kamar" class="form-label">Harga Kamar</label>
            <input type="number" class="form-control" id="harga_kamar" name="harga_kamar" value="{{ $kost->harga_kamar }}" required>
        </div>

        <div class="mb-3">
            <label for="ukuran_kamar" class="form-label">Ukuran Kamar</label>
            <input type="text" class="form-control" id="ukuran_kamar" name="ukuran_kamar" value="{{ $kost->ukuran_kamar }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $kost->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <div>
                <img src="{{ Storage::url($kost->gambar) }}" alt="Gambar Kost" style="max-width: 200px; max-height: 200px;">
            </div>
            <small>Biarkan kosong jika tidak ingin mengubah gambar.</small>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="Tersedia" {{ $kost->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Tidak Tersedia" {{ $kost->status == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Kost</button>
    </form>
</div>
@endsection
