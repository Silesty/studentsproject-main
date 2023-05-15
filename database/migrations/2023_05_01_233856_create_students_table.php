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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('gov');
            $table->string('address');
            $table->enum('study_type', ['m', 'e']);
            $table->boolean('is_parallel')->default(0);
            $table->foreignId('acceptance_year')->constrained('academic_years');
            $table->boolean('is_dissmised')->default(0);
            $table->unsignedInteger('current_stage')->default(1);
            $table->unsignedInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
