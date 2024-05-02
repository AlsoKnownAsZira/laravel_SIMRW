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
        Schema::create('data_aduan', function (Blueprint $table) {
            $table->id('id_aduan');
            $table->string('judul');
            $table->text('konten');
            $table->enum('status', ['Dalam Proses', 'Valid'])->default('Dalam Proses');
            $table->timestamps();

            $table->string('NIK_warga', 16);
            $table->foreign('NIK_warga')->references('NIK')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aduan');
    }
};
