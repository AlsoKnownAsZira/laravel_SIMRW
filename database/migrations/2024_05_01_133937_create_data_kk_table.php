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
        Schema::create('data_kk', function (Blueprint $table) {
            $table->id('kk_id');
            $table->unsignedBigInteger('penduduk_id')->index();
            $table->string('no_kk', 20)->unique();
            $table->string('nama_kk', 100);
            $table->timestamps();

            $table->foreign('penduduk_id')->references('penduduk_id')->on('data_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kk');
    }
};
