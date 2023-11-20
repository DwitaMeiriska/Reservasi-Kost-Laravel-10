{{-- resources/views/admin/manajeman_data_kost/show.blade.php --}}
@extends('layouts.admin') {{-- Ganti dengan layout admin yang sebenarnya --}}

@section('title', 'Detail Kost')

@section('content')
<div class="container mt-4">
    <h1>Detail Kost: {{ $kost->nama_kamar }}</h1>
    <div class="card">
        <img src="{{ Storage::url($kost->gambar) }}" class="card-img-top" alt="Gambar Kost" style="max-width: 100%; height: auto;">
        <div class="card-body">
            <h5 class="card-title">{{ $kost->nama_kamar }}</h5>
            <p class="card-text"><strong>Kategori:</strong> {{ $kost->kategori->nama }}</p>
            <p class="card-text"><strong>Harga Kamar:</strong> Rp{{ number_format($kost->harga_kamar, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Ukuran Kamar:</strong> {{ $kost->ukuran_kamar }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $kost->deskripsi }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $kost->status }}</p>
            <a href="{{ route('kosts.edit', $kost->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('kosts.index') }}" class="btn btn-primary">Kembali ke Daftar Kost</a>
        </div>
    </div>
</div>
@endsection
