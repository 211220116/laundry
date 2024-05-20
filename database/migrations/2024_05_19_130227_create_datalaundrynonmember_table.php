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
        Schema::create('datalaundrynonmember', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomor_transaksi');
            $table->date('tanggal_transaksi');
            $table->varchar('nama_customer');
            $table->text('alamat');
            $table->varchar('no_telp');
            $table->foreign('id_pegawai')->references('id')->on('pegawai');
            $table->text('keterangan');
            $table->enum('status laundri',['menunggu','diproses','selesai']);
            $table->enum('status_pembayaran', ['bayar', 'belum']);
            $table->text('lokasi_kirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datalaundrynonmember');
    }
};
