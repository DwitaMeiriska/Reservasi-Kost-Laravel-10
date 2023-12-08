@extends('part.layouts')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/gambarfull.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Riwayat Transaksi</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Riwayat Transaksi Section ======= -->
    <section id="riwayat-transaksi" class="p-4">
        <div class="container">
            @forelse ($pesanan as $order)
                <div class="card mb-4">
                    <div class="card-header">
                        <strong>{{ $order->nama_kost }}</strong>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Harga Kost: Rp{{ number_format($order->harga_kost, 2, ',', '.') }}</p>
                        <p class="card-text">Tanggal Sewa: {{ $order->tgl_sewa }}</p>
                        <p class="card-text">Lama Sewa: {{ $order->lama_sewa }} Bulan</p>
                        <p class="card-text">Total Harga: Rp{{ number_format($order->total_harga, 2, ',', '.') }}</p>
                        <p class="card-text">
                            Status:
                            <span class="{{ $order->status == 'Gagal' ? 'bg-danger' : ($order->status == 'Sukses' ? 'bg-success' : ($order->status == 'Menunggu Verifikasi' ? 'bg-warning' : 'bg-secondary')) }} text-white px-2 py-1 rounded">
                                {{ $order->status }}
                            </span>
                        </p>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">Tidak ada riwayat transaksi.</div>
            @endforelse
        </div>
    </section>
</main>
@endsection
