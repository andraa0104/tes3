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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('penempatan');
            $table->string('namabank');
            $table->string('hariefektifkerja');
            $table->string('harikerja');
            $table->string('izinkerja');
            $table->string('sakitkerja');
            $table->string('alfakerja');
            $table->string('cutikerja');
            $table->bigInteger('gajipokok');
            $table->bigInteger('tunjanganmakan');
            $table->integer('kesehatan');
            $table->integer('jkm');
            $table->integer('jkk');
            $table->integer('jht');
            $table->integer('jp');
            $table->integer('pph21');
            $table->bigInteger('pinjaman');
            $table->integer('cicilan');
            $table->bigInteger('gajikotor');
            $table->bigInteger('potongan');
            $table->bigInteger('gajibersih');
            $table->bigInteger('norek');
            $table->string('status')->default('menunggu persetujuan');;
            $table->string('jabatanapprove')->default('HR Manager');;
            $table->string('departemenapprove')->default('HRGA');;
            $table->string('statusapprove')->default('menunggu persetujuan');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
