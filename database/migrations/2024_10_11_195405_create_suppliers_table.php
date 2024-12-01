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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('SUPPLIER_ID');
            $table->string('COMPANY_NAME', 50);
            $table->unsignedBigInteger('LOCATION_ID');
            $table->string('PHONE_NUMBER', 11);
            $table->timestamps();
        
            // Clave foránea
            $table->foreign('LOCATION_ID')->references('LOCATION_ID')->on('locations');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
