<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCoursesTable extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // If 'instructor_id' exists, drop it
            if (Schema::hasColumn('courses', 'instructor_id')) {
                $table->dropColumn('instructor_id');
            }
            // Add 'instructor' field to store the instructor's name
            // $table->string('instructor')->nullable(); // Use appropriate nullable based on your requirement
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Reverse the changes
            // $table->dropColumn('instructor');
            $table->foreignId('instructor_id')->constrained()->nullable(); // Add back if needed
        });
    }
}
