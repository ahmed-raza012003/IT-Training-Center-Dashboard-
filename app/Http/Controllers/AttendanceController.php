<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\StaffMember;
use App\Services\AttendanceService;
use App\Http\Requests\StoreAttendanceRequest;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    protected $attendanceService;

    // Inject the AttendanceService
    public function __construct(AttendanceService $attendanceService)
    {
        $this->attendanceService = $attendanceService;
    }

    // Method to view all attendance records
    public function create()
    {
        $staffMembers = StaffMember::all(); // Fetch all staff members
        $attendances = $this->attendanceService->getAllRecords(); // Fetch all attendances using service
        return view('content.humanresources.attendance.index', compact('attendances', 'staffMembers')); // Pass both variables to the view
    }

    // Method to show the form for creating new attendance
    public function index()
    { $attendances = $this->attendanceService->getAllRecords();
        $staffMembers = StaffMember::all(); // Fetch all staff members
        return view('content.humanresources.attendance.create', compact('attendances','staffMembers')); // Pass the staffMembers variable to the view
    }

    // Method to store a new attendance record
    public function store(StoreAttendanceRequest $request)
    {
        // Use the service to mark attendance
        $this->attendanceService->markAttendance($request->staff_id, $request->status);

        return redirect()->route('attendance.index')->with('success', 'Attendance recorded successfully.');
    }
}
