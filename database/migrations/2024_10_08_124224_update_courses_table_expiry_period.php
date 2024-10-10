<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCoursesTableExpiryPeriod extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Drop the old expiry_period column
            $table->dropColumn('expiry_period');
            
            // Add the new expiry_period column as a string
            $table->string('expiry_period')->nullable(); // You can set it as nullable or required based on your needs
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Drop the new expiry_period column
            $table->dropColumn('expiry_period');
            
            // Re-add the old expiry_period column as an integer
            $table->integer('expiry_period')->nullable(); // Adjust nullable based on your previous design
        });
    }
}
