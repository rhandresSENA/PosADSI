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
            $table->id('PRODUCT_ID');
            $table->string('NAME', 50);
            $table->string('DESCRIPTION', 100);
            $table->integer('QTY_STOCK');
            $table->integer('PRICE');
            $table->unsignedBigInteger('CATEGORY_ID');
            $table->timestamps();
        
            // Clave foránea
            $table->foreign('CATEGORY_ID')->references('CATEGORY_ID')->on('categories');
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
