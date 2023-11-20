<!DOCTYPE html>
<html lang="en">

<head>

    <title>Rumah Kost Thariq</title>
    @include('part.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->

    <!-- TopBar -->
    @include('part.topbar')

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Anda yakin ingin logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('logout-form').submit();">Logout</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->

    @yield('content')

    <!-- End of Main Content -->

    <!-- Footer -->
    @include('part.footer')
    <!-- End of Footer -->
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

    <!-- End of Content Wrapper -->


    <!-- End of Page Wrapper -->

</html>
