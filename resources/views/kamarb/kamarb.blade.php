@extends('part.layouts')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Kamar B</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
        @foreach($kost as $kost)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ $kost->gambar }}" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $kost->nama_kamar}}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-cash"></i> <span class="ps-2">{{$kost->harga_kamar}}/bulan</span>
                  </div>
                </div>

                <hr>

                  <a href="{{ route('show', ['id' => $kost->id]) }}" class="readmore stretched-link">
                    <span>Detail Kamar</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>

              </div>

            </div>
          </div><!-- End post list item -->
          @endforeach
          
        </div><!-- End blog posts list -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


@endsection
