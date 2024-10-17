<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStaffAttendanceTable extends Migration
{
    public function up()
    {
        Schema::table('staff_attendance', function (Blueprint $table) {
            // Add new columns for break start and end times, and holiday tracking
            $table->time('break_start')->nullable()->after('check_out'); // Track break start time
            $table->time('break_end')->nullable()->after('break_start'); // Track break end time
            $table->enum('status', ['absent', 'present', 'half_day_leave', 'full_day_leave', 'late'])->default('absent')->change(); // More detailed attendance status options
            $table->boolean('is_holiday')->default(false)->after('status'); // Track if the day is a holiday
        });
    }

    public function down()
    {
        Schema::table('staff_attendance', function (Blueprint $table) {
            // Remove the new columns
            $table->dropColumn(['break_start', 'break_end', 'is_holiday']);
            $table->string('status')->default('absent')->change(); // Revert back to original status type
        });
    }
}
