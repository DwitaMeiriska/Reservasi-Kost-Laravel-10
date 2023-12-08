@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/gambarfull.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Kontak</h2>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>Jl.Juwita Kanan no .07 kost Thariq</p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>thariq@gmail.com</p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                    <p><a href="https://api.whatsapp.com/send?phone=&text=Hai, saya sangat tertarik dengan produk sepatu  bermerek  yang Anda tawarkan. Produk ini terlihat menggiurkan! Dengan harga yang terjangkau sebesar Rp ,saya ingin membuat pesanan.

                            Alamat pengiriman saya berada di [alamat Anda]. Saya ingin memesan [jumlah] item Mochi Matcha ini. Produk ini terlihat lezat dan saya sangat ingin mencoba.

                            Mohon konfirmasi ketersediaan stok dan informasi pembayaran lebih lanjut. Saya siap untuk melakukan pembayaran segera.

                            Terima kasih banyak! Saya sangat menantikan respons dari Anda." target="_blank">+1 5589 55488 55 ></a></p>
                    </div>
                </div>
                <!-- End Info Item -->

            </div>

            <div class="row gy-8 mt-1">

                <div class="col-lg-12 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236.51406681201664!2d102.27525705382153!3d-3.763957461638333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c7190588ab%3A0x23597d17eb80e745!2s67PG%2BC4G%2C%20Kandang%20Limun%2C%20Kec.%20Muara%20Bangka%20Hulu%2C%20Kota%20Bengkulu%2C%20Bengkulu%2038119!5e1!3m2!1sid!2sid!4v1698827836044!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 600px;" allowfullscreen></iframe>
                </div>
                <!-- End Google Maps -->

                <!-- End Contact Form -->

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->



@endsection
