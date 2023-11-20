{{-- resources/views/admin/kategori/edit.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<div class="container mt-4">
    <h1>Edit Kategori: {{ $kategori->kategori }}</h1>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $kategori->kategori }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $kategori->keterangan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
