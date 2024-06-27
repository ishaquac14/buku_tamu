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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('asal_perusahaan');
            $table->string('no_hp_tamu');
            $table->unsignedBigInteger('nama_pic');
            $table->string('departemen');
            $table->string('tujuan_lokasi');
            $table->string('kartu');
            $table->text('tujuan');
            $table->text('image');
            $table->timestamps();

            $table->foreign('nama_pic')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
