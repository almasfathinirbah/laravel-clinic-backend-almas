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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            //doctor name
            $table->string('doctor_name');
            //doctor specialist
            $table->string('doctor_specialist');
            //doctor phone
            $table->string('doctor_phone');
            //doctor email
            $table->string('doctor_email');
            //photo
            $table->string('photo')->nullable();
            //address
            $table->string('address')->nullable();
            //sip
            $table->string('sip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
