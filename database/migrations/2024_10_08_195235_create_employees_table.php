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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EMPLOYEE_ID');
            $table->string('FIRST_NAME', 50);
            $table->string('LAST_NAME', 50);
            $table->string('EMAIL', 100);
            $table->string('PHONE_NUMBER', 11);
            $table->unsignedBigInteger('JOB_ID');
            $table->date('HIRED_DATE');
            $table->unsignedBigInteger('LOCATION_ID');
            $table->timestamps();
        
            // Claves foráneas
            $table->foreign('JOB_ID')->references('JOB_ID')->on('jobs');
            $table->foreign('LOCATION_ID')->references('LOCATION_ID')->on('locations');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
