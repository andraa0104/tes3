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
        Schema::create('izins', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('penempatan');
            $table->string('jenisizin');
            $table->date('mulai');
            $table->date('selesai');
            $table->integer('jumlahizin');
            $table->string('keterangan');
            $table->string('status')->default('Menunggu Persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izins');
    }
};
