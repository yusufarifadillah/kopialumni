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
        Schema::create('bahanbaku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_bahanbaku')->unique;
            $table->string('nama_bahanbaku');
            $table->string('jenis_bahanbaku');
            $table->string('harga_satuan');
            $table->integer('kuantitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahanbaku');
    }
};
