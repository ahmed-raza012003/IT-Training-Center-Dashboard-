<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\StaffMember;
use App\Services\AttendanceService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    protected $attendanceService;

    public function __construct(AttendanceService $attendanceService)
    {
        $this->attendanceService = $attendanceService;
    }

    // Display attendance creation form
    public function create()
    {
        $staffMembers = StaffMember::all();
        return view('content.humanresources.attendance.create', compact('staffMembers'));
    }

    // Store attendance for all staff members (holiday or regular day)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'holiday' => 'required|boolean',
        ]);

        $date = Carbon::parse($validated['date']);
        $staffMembers = StaffMember::all();

        // Mark all staff members as holiday if holiday is selected
        if ($validated['holiday']) {
            foreach ($staffMembers as $staff) {
                Attendance::updateOrCreate(
                    ['staff_id' => $staff->id, 'date' => $date],
                    ['status' => 'holiday']
                );
            }

            return redirect()->route('attendance.index')->with('success', 'Holiday marked for all staff.');
        }

        // Otherwise, mark all staff as absent (they can check in later)
        foreach ($staffMembers as $staff) {
            Attendance::updateOrCreate(
                ['staff_id' => $staff->id, 'date' => $date],
                ['status' => 'absent']
            );
        }

        return redirect()->route('attendance.index')->with('success', 'Attendance marked as absent for all staff.');
    }

    // Check-in for a staff member
    public function checkIn($id)
    {
        $attendance = Attendance::findOrFail($id);

        if (is_null($attendance->check_in)) {
            // Prevent check-in on holidays or weekends
            if ($this->attendanceService->isHolidayOrWeekend(now()->format('Y-m-d'))) {
                return redirect()->route('attendance.index')->with('error', 'Cannot check in on holidays or weekends.');
            }

            $attendance->check_in = Carbon::now();
            $attendance->status = 'present';
            $attendance->save();
        }

        return redirect()->route('attendance.index')->with('success', 'Checked in successfully.');
    }

    // Check-out for a staff member
    public function checkOut($id)
    {
        $attendance = Attendance::findOrFail($id);

        if (!is_null($attendance->check_in) && is_null($attendance->check_out)) {
            $attendance->check_out = Carbon::now();
            $hoursWorked = Carbon::parse($attendance->check_in)->diffInHours($attendance->check_out);
            $attendance->status = $this->determineStatus($hoursWorked);
            $attendance->save();
        }

        return redirect()->route('attendance.index')->with('success', 'Checked out successfully.');
    }

    // Start break for a staff member
    public function startBreak($id)
    {
        $attendance = Attendance::findOrFail($id);

        if (is_null($attendance->break_start)) {
            $attendance->break_start = Carbon::now();
            $attendance->save();

            return redirect()->route('attendance.index')->with('success', 'Break started successfully.');
        }

        return redirect()->route('attendance.index')->with('error', 'Break has already started.');
    }

    // End break for a staff member
    public function endBreak($id)
    {
        $attendance = Attendance::findOrFail($id);

        if (!is_null($attendance->break_start) && is_null($attendance->break_end)) {
            $attendance->break_end = Carbon::now();
            $attendance->save();

            return redirect()->route('attendance.index')->with('success', 'Break ended successfully.');
        }

        return redirect()->route('attendance.index')->with('error', 'Cannot end break without starting it.');
    }

    // Determine attendance status based on hours worked
    private function determineStatus($hoursWorked)
    {
        if ($hoursWorked >= 8) {
            return 'present';
        } elseif ($hoursWorked >= 4) {
            return 'half_day_leave';
        } else {
            return 'absent';
        }
    }

    // Show recent attendance summary for staff members
    public function showRecentAttendance()
    {
        $staffMembers = StaffMember::all();
        $attendanceSummary = $staffMembers->map(function ($staff) {
            return [
                'staff' => $staff,
                'total_days' => $this->attendanceService->getTotalDays(),
                'days_present' => $this->attendanceService->getDaysPresent($staff->id),
                'days_absent' => $this->attendanceService->getDaysAbsent($staff->id),
                'holidays' => $this->attendanceService->getHolidays(),
                'days_late' => $this->attendanceService->getLateDays($staff->id),
            ];
        });

        return view('content.humanresources.attendance.record', compact('attendanceSummary'));
    }

    // Display all attendance records
    public function index()
    {
        $attendances = Attendance::with('staff')->get();
        return view('content.humanresources.attendance.index', compact('attendances'));
    }
}
