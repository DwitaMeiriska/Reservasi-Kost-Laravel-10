@extends('admin.layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('content')
    <div class="container">
        <h1>Portofolio</h1>
        <a href="{{ route('manajeman_portofolio.create') }}" class="btn btn-success mb-3">Tambah Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portofolios as $portofolio)
                    <tr>
                        <td>{{ $portofolio->id }}</td>
                        <td><img src="{{ Storage::url($portofolio->gambar) }}" width="100" alt="gambar"></td>
                        <td>
                            <a href="{{ route('manajeman_portofolio.edit', $portofolio->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('manajeman_portofolio.destroy', $portofolio->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
