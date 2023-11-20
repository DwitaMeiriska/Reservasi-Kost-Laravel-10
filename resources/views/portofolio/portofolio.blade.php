@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Portofolio</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="row row-cols-3">
      @foreach($portofolio as $item)
        <div class="col">
        <img src="{{ $item->gambar }}" class="img-thumbnail" alt="">
      </div>
      @endforeach
    </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->


@endsection
