<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('judul_buku');
            $table->integer('kode_buku');
            //$table->date('waktu_peminjaman')->default(new DateTime());
            //$table->date('waktu_dikembalikan')->default(new DateTime());
            //$table->enum('status', ['dipinjam', 'dikembalikan', 'terlambat'])->default(['dipinjam', 'dikembalikan', 'terlambat']);
            $table->string('kondisi_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
};
