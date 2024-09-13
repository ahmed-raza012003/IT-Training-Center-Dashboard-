<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staff_members')->onDelete('cascade');
            $table->enum('status', ['present', 'absent', 'full_day_leave', 'half_day_leave', 'late']);
            $table->date('date');
            $table->timestamps();

            $table->unique(['staff_id', 'date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}


