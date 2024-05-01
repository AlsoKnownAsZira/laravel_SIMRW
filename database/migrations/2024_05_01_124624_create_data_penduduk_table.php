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
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id('penduduk_id');
            $table->unsignedBigInteger('kk_id')->index();
            $table->string('NIK', 20)->unique();
//            $table->string('jenis_kelamin')->nullable();

            // Menambahkan constraint Check untuk memastikan jenis kelamin hanya bisa "laki-laki" atau "perempuan"
//            $table->string('jenis_kelamin')->nullable()->default('laki-laki');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->default('laki-laki');
            $table->timestamps();

            $table->foreign('kk_id')->references('kk_id')->on('data_kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduk');
    }
};
