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
        Schema::create('tb_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('merk_mobil');
            $table->string('type_mobil');
            $table->string('warna');
            $table->integer('stok');
            $table->double('harga');
            $table->string('image');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_mobil');
    }
};
