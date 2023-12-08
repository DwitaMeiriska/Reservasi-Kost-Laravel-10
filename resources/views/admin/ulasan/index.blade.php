{{-- resources/views/admin/ulasan/index.blade.php --}}

@extends('admin.layouts.admin') {{-- Pastikan ini adalah layout admin yang benar --}}

@section('content')

<div class="container">
    <div class="average-rating">
        <h2>Penilaian Produk</h2>
        <h3>{{ number_format($averageRating, 1) }} dari 5</h3>
        @for ($i = 1; $i <= 5; $i++)
            <span class="fa fa-star {{ $i <= $averageRating ? 'text-warning' : '' }}"></span>
        @endfor
    </div>
    <div class="rating-filters">
        {{-- Link untuk menampilkan semua ulasan --}}
        <a href="{{ route('ulasan.index') }}" class="btn filter-btn {{ request('rating') == '' ? 'active' : '' }}">Semua</a>
        @for ($i = 5; $i >= 1; $i--)
            {{-- Link untuk memfilter ulasan berdasarkan jumlah bintang --}}
            <a href="{{ route('ulasan.index', ['rating' => $i]) }}" class="btn filter-btn {{ request('rating') == $i ? 'active' : '' }}">{{ $i }} Bintang ({{ $ratings[$i]->count }})</a>
        @endfor
    </div>

    {{-- List of Reviews --}}
    {{-- Tempatkan logika untuk menampilkan ulasan berdasarkan filter jika ada --}}
    @foreach ($ulasans as $ulasan)
        @if (!request('rating') || request('rating') == $ulasan->rating)
            <div class="review-card">
                <div class="review-header">
                    <span class="reviewer-name">{{ $ulasan->nama }}</span>
                    <div class="review-rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="fa fa-star {{ $i <= $ulasan->rating ? 'text-warning' : '' }}"></span>
                        @endfor
                    </div>
                </div>
                <div class="review-body">
                    <p>{{ $ulasan->ulasan }}</p>
                </div>
                <div class="review-footer">
                    <form action="{{ route('ulasan.destroy', $ulasan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        @endif
    @endforeach
</div>

@endsection
