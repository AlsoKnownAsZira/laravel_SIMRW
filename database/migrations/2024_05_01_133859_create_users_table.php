<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('NIK', 16)->primary();
            $table->string('KK', 16);
            $table->string('username', 25)->unique();
            $table->string('password', 72);
            $table->string("nama_depan");
            $table->string("nama_belakang");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->enum("agama", ["Islam", "Kristen", "Katolik", "Hindu", "Budha", "Konghucu"])->nullable();
            $table->enum("status_perkawinan", ["Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati", "Kawin Belum Tercatat"])->nullable();
            $table->enum("status_hubunga", ["Kepala Keluarga", "Istri", "Anak"])->nullable();
            $table->string("pekerjaan")->nullable();
            $table->enum("tipe_warga", ["Domisili Lokal", "Non Domisili Lokal"])->default("Domisili Lokal");
            $table->enum("role", ["Ketua Rukun Warga", "Ketua Rukun Tetangga", "Warga"])->default("Warga");
            $table->enum("jenis_kelamin", ["Laki-laki", "Perempuan"]);
            $table->enum("golongan_darah", ["A", "B", "AB", "O"])->nullable();
            $table->string("alamat");
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
