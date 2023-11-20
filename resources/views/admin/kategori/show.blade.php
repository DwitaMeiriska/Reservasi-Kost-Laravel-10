{{-- resources/views/admin/kategori/show.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Detail Kategori')

@section('content')
<div class="container mt-4">
    <h1>Detail Kategori: {{ $kategori->kategori }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $kategori->kategori }}</h5>
            <p class="card-text">{{ $kategori->keterangan }}</p>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali ke Daftar Kategori</a>
            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
