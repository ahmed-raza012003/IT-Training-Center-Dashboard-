<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimingsTable extends Migration
{
    public function up()
    {
        Schema::create('timings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Foreign key to courses
            $table->string('time_slot'); // Time slot
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('timings');
    }
}
