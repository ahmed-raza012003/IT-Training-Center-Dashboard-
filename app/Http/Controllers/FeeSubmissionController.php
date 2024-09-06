<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\FeeSubmissionService;
use Illuminate\Http\Request;

class FeeSubmissionController extends Controller
{
    protected $feeSubmissionService;

    public function __construct(FeeSubmissionService $feeSubmissionService)
    {
        $this->feeSubmissionService = $feeSubmissionService;
    }

    public function show(Student $student)
    {
        // Get fee submissions for the student
        $feeSubmissions = $this->feeSubmissionService->getByStudent($student->id);

        // Pass the necessary data to the view
        return view('students.show', [
            'student' => $student,
            'feeSubmissions' => $feeSubmissions,
            'feeSubmissionService' => $this->feeSubmissionService // Ensure this line is present
        ]);
    }

    public function store(Request $request, Student $student)
    {
        // Validate the request
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'submission_date' => 'required|date',
        ]);

        // Create a new fee submission using the service
        $feeSubmission = $this->feeSubmissionService->createFeeSubmission($student, $validated);

        // Redirect back with success message
        return redirect()->route('students.show', $student->id)
                         ->with('success', 'Fee submitted successfully.');
    }
}
