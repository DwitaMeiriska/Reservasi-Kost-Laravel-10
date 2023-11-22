@extends('admin.layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('content')
    <div class="container">
        <h1>Detail Portofolio</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Portofolio #{{ $portofolio->id }}</h5>
                <p class="card-text">
                    <strong>Gambar:</strong>
                    <br>
                    <img src="{{ Storage::url($portofolio->gambar) }}" alt="Gambar Portofolio" class="img-fluid">
                </p>
                <a href="{{ route('manajeman_portofolio.index') }}" class="btn btn-primary">Kembali ke Daftar Portofolio</a>
            </div>
        </div>
    </div>
@endsection
