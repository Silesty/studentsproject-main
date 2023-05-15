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
        Schema::create('student_enrole_stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('stage_id');
            $table->foreignId('academic_year_id');
            $table->string('status')->default('مستمر');
            $table->unsignedDouble('average')->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_enrole_stages');
    }
};
