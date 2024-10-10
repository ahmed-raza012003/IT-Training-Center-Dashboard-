<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCoursesTable extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('lectures')->nullable(); // Number of lectures
            $table->integer('quizzes')->nullable(); // Number of quizzes
            $table->string('skill_level')->nullable(); // Skill level
            $table->integer('expiry_period')->nullable(); // Expiry period in days
            $table->boolean('certificate')->default(false); // Certificate availability
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['lectures', 'quizzes', 'skill_level', 'expiry_period', 'certificate']);
        });
    }
}
