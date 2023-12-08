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
                <li><a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>Tipe Kamar</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/kost" class="{{ request()->is('kost*') ? 'active' : '' }}">Tipe Kamar A</a></li>
                        <li><a href="/kamarb" class="{{ request()->is('kost*') ? 'active' : '' }}">Tipe Kamar B</a></li>
                    </ul>

                </li>
                {{-- <li><a href="" >Riwayat Transaksi</a></li> --}}
                <li><a href="{{ route('riwayat_transaksi.index') }}"
                        class="{{ request()->is('riwayat_transaksi*') ? 'active' : '' }}">Riwayat Transaksi</a></li>
                <li><a href="{{ route('portofolio.index') }}"
                        class="{{ request()->is('portofolio*') ? 'active' : '' }}">Portofolio</a></li>
                        <li><a href="{{ route('about.index') }}" class="{{ request()->is('about*') ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('contact.index') }}"
                        class="{{ request()->is('contact*') ? 'active' : '' }}">Kontak</a></li>

                @auth
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal" >Logout</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
                @auth
                    @if (auth()->user()->role == 'admin')
                        <li style="align-items: center; text-align: center"><a href="{{ route('admin') }}"
                                class=""><i class="bi bi-house-gear-fill fs-6 ms-3"></i></a></li>
                    @else
                        <li style="align-items: center; text-align: center"><a href="{{ route('home') }}"
                                class=""><i class="bi bi-house-gear-fill fs-6 ms-3"></i> &nbsp; {{Auth::user()->name}}</a></li>
                    @endif
                @endauth


        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
