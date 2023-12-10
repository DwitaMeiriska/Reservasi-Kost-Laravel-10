
@extends('part.layouts')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang di <span>Kost THARIQ</span></h2>
            <p data-aos="fade-up">Selamat datang di kost kami! Kami menyediakan fasilitas yang nyaman dan terjangkau
              untuk Anda. Kost ini terletak di lokasi strategis dan dekat dengan berbagai fasilitas penting. Kami menawarkan
              kenyamanan dan keamanan untuk masa tinggal Anda.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style="background-image: url({{ asset('image/gambarfull.jpg') }})">
      </div>
      <div class="carousel-item" style="background-image: url({{ asset('image/samping.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/gambarfull.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/kamar1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/kamar6.jpg') }})"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section><!-- End Hero Section -->


  <main id="main">

<!-- ======= Kamar Section ======= -->
<section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kamar</h2>
        <p>Temukan berbagai pilihan kamar yang nyaman dan sesuai dengan kebutuhan Anda. Kami menawarkan beragam fasilitas
          dan kenyamanan untuk memastikan masa tinggal Anda menyenangkan.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('image/kamar7.jpg') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe A</h4>
                  <p>Kamar ini dilengkapi dengan berbagai fasilitas untuk kenyamanan Anda. Fasilitas meliputi tempat tidur
                    nyaman, kamar mandi pribadi, dan akses Wi-Fi cepat.luas kamar cukup untuk individu dengan fasilitas ruang
                    kamar dan kamar mandi di dalam yang membuat kamar ini sangat rekomend untuk mahasiswa ataupun penghuni yang
                    ingin tinggal sendiri .</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('image/kamar1.jpg') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe B</h4>
                  <p>Kamar ini cocok untuk individu atau pasangan. Dengan fasilitas yang lengkap, Anda akan merasa
                    betah tinggal di sini. kamar yang recomend  dibandingkan dengan kamar
                    lainya sangat cocok bagi pengguna yang ingin menyewa kamar yang luas dengan harga yang pas dikantong
                    .Tidak kalah bagus dengan kamar lainya kamar ini menyedikan kamar mandi berada
                    di dalam serta ruangan kamar dan free wifi</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('image/img-blank.png') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe C</h4>
                  <p>Kamar ini menyediakan ruang yang luas dan nyaman untuk Anda. Dengan fasilitas modern, Anda akan
                    merasa seperti di rumah sendiri.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('image/img-blank.png') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe D</h4>
                  <p>Kamar ini memberikan pengalaman menginap yang luar biasa. Dengan fasilitas mewah dan pemandangan
                    indah, Anda akan merasa dimanjakan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>End Card Item --> -->

      </div>

    </div>
  </section><!-- End Kamar Section -->


   <!-- ======= Kelebihan Section ======= -->
   <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kelebihan</h2>
        <p>Di Kost Thariq, kami menyediakan berbagai fasilitas dan layanan unggulan untuk kenyamanan Anda.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fas fa-location-dot" style="color: #4330cf;"></i>
            </div>
            <h3>Lokasi Strategis</h3>
            <p>Kost Thariq berlokasi di lokasi strategis yang mudah diakses. Dekat dengan transportasi umum, pusat perbelanjaan, dan tempat-tempat penting lainnya.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-sack-dollar" style="color: #cec709;"></i>
            </div>
            <h3>Harga Terjangkau</h3>
            <p>Kami menawarkan harga yang terjangkau untuk berbagai jenis kamar. Anda dapat tinggal dengan nyaman tanpa perlu khawatir tentang biaya tinggi.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-house-chimney" style="color: #4330cf;"></i>
            </div>
            <h3>Fasilitas Modern</h3>
            <p>Kost Thariq dilengkapi dengan fasilitas modern seperti Wi-Fi cepat, kamar mandi pribadi, dan layanan kebersihan. Kami selalu memastikan kenyamanan Anda.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Kelebihan Section -->



   <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimoni Penghuni</h2>
        <p>Pendapat penghuni kami tentang Kost Thariq yang nyaman dan layanan kami yang unggul.</p>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('image/puput.jpg') }}" class="testimonial-img" alt="">
                <h3>Puput Andria Dewi</h3>
                <h4>Penghuni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat senang tinggal di Kost Thariq. Lokasinya sangat strategis dan fasilitas yang disediakan sangat baik.
                  Kost Thariq memberikan kenyamanan dan ketenangan selama saya tinggal di sini.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('image/mayang.jpg') }}" class="testimonial-img" alt="">
                <h3>Mayang Sari Napitupulu</h3>
                <h4>Penghuni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Kost Thariq memberikan pengalaman menginap yang luar biasa. Harga yang terjangkau dan fasilitas modern membuat saya merasa seperti di rumah.
                  Saya sangat merekomendasikan Kost Thariq kepada siapa saja yang mencari tempat tinggal yang nyaman.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('image/dwi.jpg') }}" class="testimonial-img" alt="">
                <h3>Dwi Arpa</h3>
                <h4>Penghuni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat puas tinggal di Kost Thariq. Lokasinya sangat praktis dan dekat dengan berbagai fasilitas. Fasilitas di Kost Thariq sangat baik
                  dan layanan pelanggan mereka luar biasa. Saya tidak akan mencari tempat lain.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('image/img-blank.png') }}" class="testimonial-img" alt="">
                <h3>Ratnayanti Simbolon</h3>
                <h4>Penghuni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat merekomendasikan Kost Thariq kepada siapa pun yang mencari tempat tinggal yang nyaman.
                  Layanan mereka sangat baik dan fasilitas yang disediakan luar biasa. Saya merasa seperti di rumah sendiri di sini.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('image/img-blank.png') }}" class="testimonial-img" alt="">
                <h3>Satria Bagus</h3>
                <h4>Penghuni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya tidak bisa lebih puas tinggal di Kost Thariq. Fasilitas dan layanan mereka sangat baik, dan harga yang terjangkau.
                  Saya merasa beruntung telah menemukan tempat ini.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
</div>
</main>
@endsection



