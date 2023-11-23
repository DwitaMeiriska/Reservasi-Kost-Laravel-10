<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Kost;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id(); // Kolom ID yang otomatis
            $table->foreignIdFor(User::class);
            $table->string('nama');
            $table->foreignIdFor(Kost::class);
            $table->string('nama_kost');
            $table->integer('harga_kost');
            $table->date('tgl_sewa');
            $table->enum('lama_sewa', ['1 Bulan', '6 Bulan', '12 Bulan']);
            $table->integer('total_harga');
            $table->enum('status', ['Menunggu Verifikasi', 'Sukses', 'Gagal']);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
