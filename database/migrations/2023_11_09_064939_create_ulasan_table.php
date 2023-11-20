<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ulasans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('rating');
            $table->text('ulasan');
            $table->string('nama');
            $table->string('email');
            $table->unsignedBigInteger('kost_id');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('kost_id')->references('id')->on('kosts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasans');
    }
};
