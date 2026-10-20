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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name'); /// nama makanan
            $table->enum('category', ['Roti', 'Minuman', 'Kue']); // 3 kategori
            $table->integer('price'); // harga
            $table->text('description'); // deskripsi makanan
            $table->string('image')->nullable(); // path gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
