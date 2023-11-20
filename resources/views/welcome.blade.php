{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpConstruction Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('landing/assets/img/apple-touch-icon.png') }}img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('landing/assets/') }}img/logo.png" alt=""> -->
        <h1>KOST THARIQ<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tipe Kamar</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li><a href="#">Kamar A</a></li>
          <li><a href="#">kamar B</a></li>
        </ul>
      </li>
          <li><a href="about.html">Riwayat Transaksi</a></li>
          <li><a href="services.html">Portofolio</a></li>
          <li><a href="projects.html">Tentang Kami</a></li>
          <li><a href="blog.html">Contact</a></li>
          <li><a href="contact.html">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Mulai</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style="background-image: url({{ asset('image/img-blank.png') }})">
      </div>
      <div class="carousel-item" style="background-image: url({{ asset('image/img-blank.png') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/img-blank.png') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/img-blank.png') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('image/img-blank.png') }})"></div>

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
                <div class="card-bg" style="background-image: url({{ asset('image/img-blank.png') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe A</h4>
                  <p>Kamar ini dilengkapi dengan berbagai fasilitas untuk kenyamanan Anda. Fasilitas meliputi tempat tidur
                    nyaman, kamar mandi pribadi, dan akses Wi-Fi cepat.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset('image/img-blank.png') }});"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Kamar Tipe B</h4>
                  <p>Kamar ini cocok untuk individu atau pasangan. Dengan fasilitas yang lengkap, Anda akan merasa
                    betah tinggal di sini.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

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
                <h3>Matt Brandon</h3>
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
                <h3>John Larson</h3>
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


   <!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Pemesanan Kamar</h2>
        <p>Anda dapat memesan kamar di Kost Thariq dengan mudah. Pilih kamar yang sesuai dengan kebutuhan Anda dan nikmati kenyamanan tinggal di sini.</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Kamar Standard</h3>

              <div class="meta d-flex align-items-center">
                <span class="ps-2">Mulai dari $50/malam</span>
              </div>

              <hr>

              <a href="pemesanan.html" class="readmore stretched-link"><span>Pesan Sekarang</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Kamar Deluxe</h3>

              <div class="meta d-flex align-items-center">
                <span class="ps-2">Mulai dari $80/malam</span>
              </div>

              <hr>

              <a href="pemesanan.html" class="readmore stretched-link"><span>Pesan Sekarang</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('image/img-blank.png') }}" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Kamar Suite</h3>

              <div class="meta d-flex align-items-center">
                <span class="ps-2">Mulai dari $120/malam</span>
              </div>

              <hr>

              <a href="pemesanan.html" class="readmore stretched-link"><span>Pesan Sekarang</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

    </div>
  </section><!-- End Recent Blog Posts Section -->


  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
<footer id="footer" class="footer" style=" background: url({{ asset('image/img-blank.png') }}) top center no-repeat;">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Kost Thariq</h3>
              <p>
                Jl. Contoh No. 123 <br>
                Kota Anda, 12345, Indonesia<br><br>
                <strong>Telepon:</strong> +62 1234 5678 90<br>
                <strong>Email:</strong> info@kostthariq.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Link Berguna</h4>
            <ul>
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Layanan</a></li>
              <li><a href="#">Syarat Layanan</a></li>
              <li><a href="#">Kebijakan Privasi</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Topik Kost</h4>
            <ul>
              <li><a href="#">Kamar Standar</a></li>
              <li><a href="#">Kamar Deluxe</a></li>
              <li><a href="#">Kamar Suite</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Lebih Lanjut</h4>
            <ul>
              <li><a href="#">Pemesanan</a></li>
              <li><a href="#">Kontak</a></li>
              <li><a href="#">Testimoni</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Hak Cipta <strong><span>Kost Thariq</span></strong>. Seluruh Hak Dilindungi
        </div>
        </div>
    </div>

  </footer>
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>

</html> --}}
