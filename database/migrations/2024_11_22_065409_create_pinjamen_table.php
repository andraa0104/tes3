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
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('penempatan');
            $table->date('tanggal_pinjam');
            $table->integer('jumlah_pinjam');
            $table->integer('cicilan');
            $table->string('keperluan');
            $table->string('status')->default('menunggu persetujuan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamen');
    }
};
