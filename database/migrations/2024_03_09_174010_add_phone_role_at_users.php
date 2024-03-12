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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('phone')->nullable();
            // $table->string('role')->default('user');
            // change role into enum
            $table->enum('role', ['admin', 'doctor', 'nurse', 'pharmacist', 'staff', 'user'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // add column in users
            $table->dropColumn('phone');
            $table->dropColumn('role');
        });
    }
};
