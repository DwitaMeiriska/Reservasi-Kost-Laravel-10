{{-- resources/views/admin/manajeman_data_kost/index.blade.php --}}
@extends('admin.layouts.admin')

@section('content')
<h1>Daftar Kost</h1>

<a href="{{ route('kosts.create') }}">Tambah Kost Baru</a>

<table>
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
                    <a href="{{ route('kosts.show', $kost->id) }}">View</a>
                    <a href="{{ route('kosts.edit', $kost->id) }}">Edit</a>
                    <form action="{{ route('kosts.destroy', $kost->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
