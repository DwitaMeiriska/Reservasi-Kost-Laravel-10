@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/gambarfull.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Detail Kamar</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    @foreach($listkost as $kosts)
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{ Storage::url($kosts->gambar) }}" class="card-img-top" alt="Gambar Kost" style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7 pb-5">
                <form>
                <div class="mt-2">
                <p class="fs-2 fw-bold mb-0">{{$kosts->nama_kamar}}</p>
                <p class="fs-5 mb-2">{{$kosts->harga_kamar}}</p>
                <p class="fs-5 mb-2">{{$kosts->ukuran_kamar}}</p>
                <p class="fs-5 mb-2">{{$kosts->deskripsi}}</p>
                </div>

                <div class="d-flex align-items-center mb-4 pt-2">
                    <button type="button" class="btn btn-success {{ $kosts->status == 'Tidak Tersedia' ? 'danger' : 'secondary' }} mb-3" {{ $kosts->status == 'Tidak Tersedia' ? 'disabled' : '' }}>
                        <i class=""></i> <a href="{{ route('pembayaran', ['id' => $kosts->id]) }}" class="text-light" {{ $kosts->status == 'Tidak Tersedia' ? 'readonly' : '' }}
                            >{{ $kosts->status == 'Tidak Tersedia' ? 'Tidak tersedia' : 'Pesan Kos' }}</a>
                    </button>

                    </button>
                </div>
                @endforeach
            </div>

        </form>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" id="ulasan-tab">Ulasan</a>
                </div>

                    {{-- ulasan --}}
                    <div class="tab-pane fade" id="tab-pane-3">
                        <h4 class="mb-4 mt-4">Ulasan</h4>
                        @foreach($ulasans as $ulasan)
                        <div class="mt-3">
                            <strong>Rating:</strong>
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $ulasan->rating)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                            <br>
                            <strong>Ulasan:</strong> {{ $ulasan->ulasan }} <br>
                            <strong>Nama:</strong> {{ $ulasan->nama }} <br>
                            <strong>Email:</strong> {{ $ulasan->email }} <br>
                        </div>
                        @endforeach
                        <div class="border mt-3"></div>
                        <h4 class="mb-4 mt-4">Beri Ulasan</h4>
                        <small>
                            Alamat email Anda tidak akan dipublikasikan. Bidang yang harus diisi ditandai dengan *
                        </small>
                        <div class="d-flex my-3">
                            <p class="mb-0 mr-2">Rating Anda * :</p>
                            <div class="text-primary" id="rating-stars">
                                <!-- Rating stars will be added dynamically using JavaScript -->
                            </div>
                        </div>
                        @if(Auth::check() && Auth::user()->hasSuccessfulBooking())
                        <form id="ulasan-form" action="{{ route('ulasan.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="kost_id" value="{{ $kosts->id }}">
                            <div class="form-group">
                                <label for="message">Ulasan Anda *</label>
                                <textarea id="message" name="ulasan" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Anda *</label>
                                <input type="text" name="nama" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email Anda *</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Kirim Ulasan Anda" class="btn btn-primary px-3">
                            </div>
                        </form>
                        @endif
                    </div>

                    <script>
                        // ... (Bagian sebelumnya tetap sama) ...

                        // Dynamically add rating stars
                        var ratingStarsContainer = document.getElementById('rating-stars');
                        for (var i = 1; i <= 5; i++) {
                            var starIcon = document.createElement('i');
                            starIcon.className = 'far fa-star';
                            starIcon.dataset.rating = i;
                            starIcon.addEventListener('click', function () {
                                // Set the selected rating in a hidden input field
                                var ratingInput = document.createElement('input');
                                ratingInput.type = 'hidden';
                                ratingInput.name = 'rating';
                                ratingInput.value = this.dataset.rating;
                                document.getElementById('ulasan-form').appendChild(ratingInput);

                                // Update the appearance of stars based on the selected rating
                                for (var j = 1; j <= 5; j++) {
                                    var star = ratingStarsContainer.querySelector('[data-rating="' + j + '"]');
                                    if (j <= this.dataset.rating) {
                                        star.className = 'fas fa-star';
                                    } else {
                                        star.className = 'far fa-star';
                                    }
                                }
                            });
                            ratingStarsContainer.appendChild(starIcon);
                        }
                    </script>

    <script>
        // Ketika tombol "Ulasan (0)" ditekan, aktifkan tab ulasan
        document.getElementById('ulasan-tab').addEventListener('click', function (e) {
            e.preventDefault();
            var ulasanTab = document.getElementById('tab-pane-3');
            var deskripsiTab = document.getElementById('tab-pane-1');


            ulasanTab.classList.add('show', 'active');
            deskripsiTab.classList.remove('show', 'active');

        });


        // Ketika tombol "Deskripsi" ditekan, aktifkan tab deskripsi
        document.getElementById('deskripsi-tab').addEventListener('click', function (e) {
            e.preventDefault();
            var ulasanTab = document.getElementById('tab-pane-3');
            var deskripsiTab = document.getElementById('tab-pane-1');

            deskripsiTab.classList.add('show', 'active');
            ulasanTab.classList.remove('show', 'active');
        });
        // Menghapus kelas "show" dan "active" dari tab ulasan secara default
        var ulasanTab = document.getElementById('tab-pane-3');
        ulasanTab.classList.remove('show', 'active');
    </script>
    </div>
</main><!-- End #main -->




@endsection
