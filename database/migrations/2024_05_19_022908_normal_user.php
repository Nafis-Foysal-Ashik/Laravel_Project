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
        Schema::create('normal_user', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();  // Added unique constraint for email
            $table->string('password');
            $table->string('phone')->nullable();  // Made phone nullable
            $table->string('address')->nullable();  // Made address nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
