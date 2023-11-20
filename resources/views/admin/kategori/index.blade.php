{{-- resources/views/admin/kategori/index.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Daftar Kategori')

@section('content')
<div class="container mt-4">
    <h1>Daftar Kategori</h1>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
            <tr>
                <td>{{ $kategori->id }}</td>
                <td>{{ $kategori->kategori }}</td>
                <td>{{ $kategori->keterangan }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
