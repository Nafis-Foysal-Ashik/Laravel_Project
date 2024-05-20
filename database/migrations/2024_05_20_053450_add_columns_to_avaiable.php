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
        Schema::table('avaiable', function (Blueprint $table) {
            $table->string('division')->nullable()->after('email');
            $table->string('work')->nullable()->after('division');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('avaiable', function (Blueprint $table) {
            //
        });
    }
};
