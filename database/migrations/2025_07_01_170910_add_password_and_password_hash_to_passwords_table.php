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
        Schema::table('passwords', function (Blueprint $table) {
            //$table->text('password')->nullable();       // Store the plain (if needed, not recommended)
            $table->string('password_hash')->nullable(); // Store the hashed password
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('passwords', function (Blueprint $table) {
            //$table->dropColumn(['password', 'password_hash']);
        });
    }
};
