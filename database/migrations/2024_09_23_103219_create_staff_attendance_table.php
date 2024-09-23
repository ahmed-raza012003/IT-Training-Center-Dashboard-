<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateStaffAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('staff_attendance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->date('date');
            $table->time('check_in')->nullable();
            $table->time('check_out')->nullable();
            $table->string('status')->default('absent'); // Default to absent
            $table->timestamps();
            
            // Add necessary foreign keys and indices
            $table->foreign('staff_id')->references('id')->on('staff_members')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff_attendance');
    }
}

