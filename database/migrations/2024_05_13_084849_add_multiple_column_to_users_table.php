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
        // Add phone number column (consider validation for phone format)
        $table->string('phone')->nullable()->after('email');

        // Add address column
        $table->string('address')->nullable()->after('phone');

        // Add gender column with appropriate data type and validation
        $table->string('gender')->nullable()->after('address'); // Consider enum or small string

        // Add date of birth column with appropriate data type and validation
        $table->date('date_of_birth')->nullable()->after('gender');

        // Add profile picture column with appropriate data type and validation
        $table->string('picture')->nullable()->after('date_of_birth');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->$table->dropColumn(['phone','address','gender','date_of_birth','picture']);
        });
    }
};
