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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_pelanggan',6)->unique();
            $table->string('nama_pelanggan',50);
            $table->string('no_tlp_pelanggan',50);
            $table->string('alamat_pelanggan',100);
            $table->string('jenis_kelamin_pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
