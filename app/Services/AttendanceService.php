<?php

namespace App\Services;

use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceService
{
    // Mark attendance for a specific staff member
    public function markAttendance($staffId, $status)
    {
        return Attendance::updateOrCreate(
            ['staff_id' => $staffId, 'date' => now()->format('Y-m-d')],
            ['status' => $status]
        );
    }

    // Get all attendance records
    public function getAllRecords()
    {
        return Attendance::with('staff')->get();
    }

    // Get the most recent attendance records (up to 10)
    public function getRecentRecords()
    {
        return Attendance::with('staff')->orderBy('date', 'desc')->take(10)->get();
    }

    // Get the total number of days in the current month
    public function getTotalDays()
    {
        return now()->daysInMonth;
    }

    // Get the number of days a staff member was present
    public function getDaysPresent($staffId)
    {
        return Attendance::where('staff_id', $staffId)
                         ->where('status', 'present')
                         ->count();
    }

    // Get the number of days a staff member was absent
    public function getDaysAbsent($staffId)
    {
        return Attendance::where('staff_id', $staffId)
                         ->where('status', 'absent')
                         ->count();
    }

    // Get the number of holidays (can be customized later)
    public function getHolidays()
    {
        return 2; // Static value for now, can be linked to a dynamic holiday model or logic
    }

    // Get the number of late days for a staff member
    public function getLateDays($staffId)
    {
        return Attendance::where('staff_id', $staffId)
                         ->where('status', 'late')
                         ->count();
    }

    // Check if the date is a holiday or weekend
    public function isHolidayOrWeekend($date)
    {
        $dayOfWeek = Carbon::parse($date)->dayOfWeek;

        // Check if it's Saturday or Sunday
        if ($dayOfWeek == Carbon::SATURDAY || $dayOfWeek == Carbon::SUNDAY) {
            return true;
        }

        // Custom holiday logic can be added here
        return false;
    }
}
