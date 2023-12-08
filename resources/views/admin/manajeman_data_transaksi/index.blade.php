{{-- resources/views/admin/manajeman_data_transaksi/index.blade.php --}}
@extends('admin.layouts.admin') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('title', 'Manajemen Data Transaksi')

@section('content')
<div class="container mt-4">
    <h1>Manajemen Data Transaksi</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemesan</th>
                <th>Nama Kost</th>
                <th>Harga Kost</th>
                <th>Tanggal Sewa</th>
                <th>Lama Sewa</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Bukti Transaksi</th> <!-- Kolom baru untuk bukti transaksi -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->nama }}</td>
                    <td>{{ $order->nama_kost }}</td>
                    <td>Rp{{ number_format($order->harga_kost, 2, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->tgl_sewa)->format('D, d/m/Y') }}</td>
                    <td>{{ $order->lama_sewa }}</td>
                    <td>Rp{{ number_format($order->total_harga, 2, ',', '.') }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        @if($order->buktiTransaksi)
                        <a href="{{ url('/image/'.$order->buktiTransaksi->gambar) }}" target="_blank">Lihat Bukti</a>
                        @else
                            Tidak Ada Bukti
                        @endif
                    </td>
                    <td>
                        @if($order->status == 'Menunggu Verifikasi')
                            <form action="{{ route('manajeman_data_transaksi.terima', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Terima</button>
                            </form>
                            <form action="{{ route('manajeman_data_transaksi.tolak', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                        @endif
                        <form action="{{ route('manajeman_data_transaksi.destroy', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
