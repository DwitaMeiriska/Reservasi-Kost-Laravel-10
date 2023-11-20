@extends('part.layouts')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
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
                    <p class="mb-5">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses transaksi Anda: (Nomor Rekening). <br> Pastikan untuk mengirimkan bukti pembayaran ke kontak dibawah ini. Terimakasih atas kerjasama Anda."</p>
                    <a href=" https://api.whatsapp.com/send?phone=6281234567090&text=Nama,nomer lapangan berikut bukti pembayaran" class="btn btn-success btn-block">{{ __('Kirim bukti perbayaran') }}</a>
                </div>
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </section><!-- End Our Projects Section -->




@endsection
