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
        Schema::create('deskripsi_produk', function (Blueprint $table) {
            $table->id();
            $table->binary('gambar');
            $table->string('nama_produk');
            $table->integer('harga_produk');
            $table->text('deskripsi');
            $table->string('nama_toko');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deskripsi_barang');
    }
};
