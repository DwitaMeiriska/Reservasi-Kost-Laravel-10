@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Riwayat Transaksi</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects p-4">
        <div class="row mb-2">
            <div class="col-md-6">
              @foreach ($pesanan as $pesanan)
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-primary">{{$pesanan->nama_kost}}</strong>
                  <div class="mb-1 text-muted">{{$pesanan->harga_kost}}</div>
                  <div class="mb-1 text-muted">{{$pesanan->tgl_sewa}}</div>
                  <div class="mb-1 text-muted">{{$pesanan->lama_sewa}}</div>
                  <p class="card-text mb-auto">{{$pesanan->total_harga}}</p>
                </div>
              </div>
              @endforeach
            </div>

    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->




@endsection
