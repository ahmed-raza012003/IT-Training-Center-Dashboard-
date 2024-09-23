<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\StaffMember;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // Method to show the form for creating new attendance
    public function create()
    {
        $staffMembers = StaffMember::all(); // Fetch all staff members
        return view('content.humanresources.attendance.create', compact('staffMembers')); // Pass staff members to the view
    }

    // Method to store a new attendance record manually
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'staff_id' => 'required',
            'date' => 'required|date',
            'check_in' => 'required|date_format:H:i',
            'check_out' => 'required|date_format:H:i|after:check_in',
        ]);

        // Parse check-in and check-out times
        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);

        // Calculate the total hours worked
        $hoursWorked = $checkOut->diffInHours($checkIn);

        // Determine attendance status based on hours worked
        $status = $this->determineStatus($hoursWorked);

        // Create new attendance record
        Attendance::create([
            'staff_id' => $request->staff_id,
            'date' => $request->date,
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'status' => $status,
        ]);

        return redirect()->route('attendance.index')->with('success', 'Attendance recorded successfully.');
    }

    // Method to dynamically handle check-in
    public function checkIn($id)
    {
        $attendance = Attendance::findOrFail($id);

        // Check if not already checked in
        if (is_null($attendance->check_in)) {
            $attendance->check_in = Carbon::now();
            $attendance->status = 'present'; // Mark as present upon check-in
            $attendance->save();
        }

        return redirect()->route('attendance.index')->with('success', 'Checked in successfully.');
    }

    // Method to dynamically handle check-out
    public function checkOut($id)
    {
        $attendance = Attendance::findOrFail($id);

        // Ensure check-in is done and check-out is not yet completed
        if (!is_null($attendance->check_in) && is_null($attendance->check_out)) {
            $attendance->check_out = Carbon::now();

            // Calculate the difference between check-in and check-out
            $hoursWorked = Carbon::parse($attendance->check_in)->diffInHours($attendance->check_out);

            // Update the status based on the hours worked
            $attendance->status = $this->determineStatus($hoursWorked);
            $attendance->save();
        }

        return redirect()->route('attendance.index')->with('success', 'Checked out successfully.');
    }

    // Method to determine attendance status based on hours worked
    private function determineStatus($hoursWorked)
    {
        if ($hoursWorked >= 8) {
            return 'present';
        } elseif ($hoursWorked > 0 && $hoursWorked < 8) {
            return 'half_day_leave';
        } else {
            return 'absent';
        }
    }

    // Method to view all attendance records
    public function index()
    {
        $attendances = Attendance::with('staff')->get(); // Fetch all attendance with staff details
        return view('content.humanresources.attendance.index', compact('attendances'));
    }
}
