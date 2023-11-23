@extends('part.layouts')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('image/img-blank.png') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Pembayaran</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects p-4">
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge badge-secondary badge-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                @foreach($listkost as $kosts)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">{{$kosts->nama_kamar}}</h6>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Harga Kamar</h6>
                    <small class="text-muted">{{$kosts->harga_kamar}}</small>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Ukuran Kamar</h6>
                    <small class="text-muted">{{$kosts->ukuran_kamar}}</small>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Deskripsi kost</h6>
                    <small>EXAMPLECODE</small>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (Rp)</span>
                  <strong>total duit</strong>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-md-8 order-md-1">


{{-- ini bagian form --}}
              <form action="{{ route('pembayaran.store')}}" method="POST">
                @csrf
                <div class="row">
                  @foreach($listkost as $kosts)

                  <input type="hidden" name="kost_id" id="kost_id" value="{{ $kosts->id }}">
                  <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{ auth()->user()->name}}" required="" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="nama_kost">Nama Kamar</label>
                    <input type="text" class="form-control" name="nama_kost" id="nama_kost" placeholder="Nama Kamar" value="{{$kosts->nama_kamar}}" required="">
                  </div>
                  <div class="mb-3">
                    <label for="harga_kost">Harga Kost</label>
                    <input type="text" class="form-control" name="harga_kost" id="harga_kost" placeholder="Harga Kost" value="{{$kosts->harga_kamar}}" required="">
                  </div>
                  <div class="mb-3">
                    <label for="tgl_sewa">Tanggal Sewa</label>
                    <input type="date" class="form-control" name="tgl_sewa" id="tgl_sewa" placeholder="Tanggal Sewa">
                  </div>
                  <div class="form-group mb-2">
                    <label for="lama_sewa">Lama Sewa (bulan)</label>
                    <select id="lama_sewa" class="form-control" name="lama_sewa">
                      <option selected>Choose...</option>
                      <option>1 Bulan</option>
                      <option>6 Bulan</option>
                      <option>12 Bulan</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="total_harga">Total Harga</label>
                    <input type="text" class="form-control" name="total_harga" id="total_harga" placeholder="Total Harga" value="" required="" readonly>
                  </div>
                  @endforeach
                </div>

                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              </form>
        <table class="table table-bordered">
            <thead>

            </tbody>
        </table>
    </div>

            </div>
          </div>

          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© Kost Thariq</p>
          </footer>
        </div>
        <script>
        document.getElementById('pesan-kost-button').addEventListener('click', function (e) {
            e.preventDefault();

            // Lakukan logika atau permintaan Ajax sesuai kebutuhan
            // Misalnya, Anda bisa melakukan permintaan Ajax ke server di sini.

            // Setelah berhasil, tampilkan lapisan status dengan pesan berhasil.
            var statusLayer = document.getElementById('status-layer');
            statusLayer.style.display = 'block';
        });
    </script>

    </div>
</div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
      $(document).ready(function () {
          // Fungsi untuk menghitung total harga
          function hitungTotalHarga() {
              var lamaSewa = parseInt($('#lama_sewa').val());
              var hargaKost = parseInt($('#harga_kost').val());

              if (!isNaN(lamaSewa) && !isNaN(hargaKost)) {
                  var totalHarga = lamaSewa * hargaKost;
                  $('#total_harga').val(totalHarga);
              } else {
                  $('#total_harga').val('');
              }
          }

          // Event listener untuk menghitung total harga saat lama sewa atau harga kost berubah
          $('#lama_sewa, #harga_kost').change(function () {
              hitungTotalHarga();
          });

          // Panggil fungsi hitungTotalHarga pada saat halaman dimuat
          hitungTotalHarga();
      });
  </script>



@endsection
