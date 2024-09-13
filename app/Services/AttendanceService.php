<?php

namespace App\Services;

use App\Models\Attendance;

class AttendanceService
{
    public function markAttendance($staffId, $status)
    {
        // Ensure only one attendance record per day for each staff member
        return Attendance::updateOrCreate(
            ['staff_id' => $staffId, 'date' => now()->format('Y-m-d')],
            ['status' => $status]
        );
    }

    public function getAllRecords()
    {
        return Attendance::with('staff')->get(); // Fetch all records with related staff
    }
}
