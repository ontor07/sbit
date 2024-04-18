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
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name',200)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone',11)->nullable();
            $table->integer('course')->nullable()->comment(' 1 = basic , 2 = graphic , 3 = web_design , 4 = web_development , 5 = app_development & 6 = seo');
            $table->integer('course_type')->nullable()->comment(' 1 = industrial & 2 = regular');
            $table->date('deleted_at')->nullable();
            $table->integer('read')->default('0');
            $table->integer('read_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_admissions');
    }
};
