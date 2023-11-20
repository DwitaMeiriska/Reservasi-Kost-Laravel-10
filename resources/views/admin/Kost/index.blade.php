
@include('admin.header')
@include('admin.sidebar')

<!-- Konten Utama -->
<div class="content-wrapper">
    <!-- Bagian ini akan menampilkan konten utama -->
    <div class="content">
        <!-- Tambahkan bagian untuk menampilkan konten CRUD -->
        <!-- Misalnya, jika Anda ingin menampilkan daftar Kost -->
        @include('admin.manajemen_data_kost.index')
    </div>
</div>

@include('admin.footer')
