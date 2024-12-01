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
        Schema::create('managers', function (Blueprint $table) {
            $table->string('FIRST_NAME', 50);
            $table->string('LAST_NAME', 50);
            $table->unsignedBigInteger('LOCATION_ID');
            $table->string('EMAIL', 50);
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
        Schema::dropIfExists('managers');
    }
};
