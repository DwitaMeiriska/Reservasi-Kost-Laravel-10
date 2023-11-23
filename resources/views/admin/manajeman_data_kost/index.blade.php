{{-- resources/views/admin/manajeman_data_kost/index.blade.php --}}
@extends('admin.layouts.admin')

@section('content')
<h1>Daftar Kost</h1>

<a href="{{ route('manajeman_data_kost.create') }}" class="btn btn-primary mb-3">Tambah Kost Baru</a>

<table class="table">
    <thead>
        <tr>
            <th>Nama Kamar</th>
            <th>Harga Kamar</th>
            <th>Ukuran Kamar</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kosts as $kost)
            <tr>
                <td>{{ $kost->nama_kamar }}</td>
                <td>{{ $kost->harga_kamar }}</td>
                <td>{{ $kost->ukuran_kamar }}</td>
                <td>{{ $kost->status }}</td>
                <td>
                    <a href="{{ route('manajeman_data_kost.show', $kost->id) }}" class="btn btn-warning">View</a>
                    <a href="{{ route('manajeman_data_kost.edit', $kost->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('manajeman_data_kost.destroy', $kost->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
