<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropInstructorIdFromCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Check if the column exists before trying to drop it
            if (Schema::hasColumn('courses', 'instructor_id')) {
                $table->dropColumn('instructor_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Add the column back in the down method
            $table->unsignedBigInteger('instructor_id')->nullable();

            // You can also add the foreign key constraint if needed
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('set null');
        });
    }
}
