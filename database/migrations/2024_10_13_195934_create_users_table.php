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
        Schema::create('users', function (Blueprint $table) {
            $table->id('ID');
            $table->string('FIRST_NAME', 50);
            $table->string('LAST_NAME', 50);
            $table->string('USERNAME', 50);
            $table->string('PASSWORD', 50);
            $table->unsignedBigInteger('TYPE_ID');
            $table->unsignedBigInteger('LOCATION_ID');
            $table->string('PHONE_NUMBER', 11);
            $table->timestamps();
        
            // Claves foráneas
            $table->foreign('TYPE_ID')->references('TYPE_ID')->on('types');
            $table->foreign('LOCATION_ID')->references('LOCATION_ID')->on('locations');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
