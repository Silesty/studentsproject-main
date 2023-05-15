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
        Schema::create('student_enrole_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('course_id');
            $table->foreignId('academic_year_id');
            $table->unsignedDouble('saay_score')->default(0.0);
            $table->unsignedDouble('first_attempt')->default(0.0);
            $table->unsignedDouble('second_attempt')->default(0.0);
            $table->unsignedDouble('extra_score')->default(0.0);
            $table->unsignedInteger('credits');
            $table->unsignedDouble('final_degree')->default(0.0);
            $table->unsignedDouble('weighted_avarage')->default(0.0);
            $table->boolean('is_second_attempt')->default(0);
            $table->boolean('is_passed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_enrole_courses');
    }
};
