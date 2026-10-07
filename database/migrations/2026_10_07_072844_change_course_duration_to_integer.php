<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Convert values such as "60 days" to "60"
        DB::statement("
            UPDATE courses
            SET duration = REGEXP_SUBSTR(duration, '^[0-9]+')
            WHERE duration REGEXP '^[0-9]+'
        ");

        // Change duration from string to integer
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('duration')->change();
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('duration')->change();
        });
    }
};