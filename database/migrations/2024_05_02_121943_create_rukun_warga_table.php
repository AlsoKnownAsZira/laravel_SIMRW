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
        Schema::create('rukun_warga', function (Blueprint $table) {
            $table->id('id_RW');
            $table->unsignedSmallInteger('nomor_RW')->unique();
            $table->text('alamat');
            $table->timestamps();

            $table->string('NIK_RW', 16);
            $table->foreign('NIK_RW')->references('NIK')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rukun_warga');
    }
};
