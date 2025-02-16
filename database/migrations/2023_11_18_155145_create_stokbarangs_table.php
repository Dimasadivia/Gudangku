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
        Schema::create('stokbarangs', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_barang');
            // barang id
            $table->foreignId('barang_id')->constrained('barangs');
            // toko id
            $table->foreignId('toko_id')->constrained('tokos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stokbarangs');
    }
};
