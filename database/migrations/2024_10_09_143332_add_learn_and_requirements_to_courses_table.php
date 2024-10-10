<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLearnAndRequirementsToCoursesTable extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('what_will_i_learn')->nullable(); // To store "What Will I Learn?"
            $table->text('requirements')->nullable(); // To store "Requirements"
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['what_will_i_learn', 'requirements']);
        });
    }
}
