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
       Schema::create('enrollments', function (Blueprint $table) {
    $table->string('enrollment_id')->primary();
    $table->string('student_id');
    $table->string('course_id');
    $table->string('grade');
    $table->string('attendance');
    $table->string('status');
    $table->timestamps();

    $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
    $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
