@extends('part.layouts')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/gambarfull.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Transaksi</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container-fluid bg-primary hero-header mb-5">
            <div class="container text-center">
                <h1 class="display-4 text-white mb-3 animated slideInDown">Transaksi</h1>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 900px;">
                    {{-- <h1 class="text-primary mb-3"><span class="fw-light text-dark">Total Pembayaran:</span> Rp{{number_format($pemesanan->total_harga,2,',','.') }}</h1> --}}
                    <p class="mb-5">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses transaksi Anda: (Rizki Adrian Putra(BRI):6781 0101 3674 540). <br> Pastikan untuk mengirimkan bukti pembayaran ke kontak dibawah ini. Terimakasih atas kerjasama Anda."</p>
                    <form action="{{ route('pembayaran.sukses', $pesananId) }}" method="post">
                        <!-- Your form fields -->
                        @csrf
                        <input type="hidden" name="pesanan_id" value="{{ $pesananId }}">
                        <input type="hidden" name="user_id" value="{{ $userId }}">
                        <label for="gambar" class="form-label">Bukti Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                        <button type="submit" class="btn btn-primary btn-block">Kirim Bukti Pembayaran</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Our Projects Section -->




@endsection
