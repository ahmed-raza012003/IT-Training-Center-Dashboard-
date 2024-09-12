<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\InstallmentService;
use App\Services\FeeSubmissionService;

class FeeSubmissionController extends Controller
{
    protected $feeSubmissionService;
    protected $installmentService;

    public function __construct(FeeSubmissionService $feeSubmissionService, InstallmentService $installmentService)
    {
        $this->feeSubmissionService = $feeSubmissionService;
        $this->installmentService = $installmentService;
    }

    public function show(Student $student)
    {
        $feeSubmissions = $this->feeSubmissionService->getByStudent($student->id);
        $installments = $this->installmentService->getInstallmentsForStudent($student->id);

        return view('content.student.details', compact('feeSubmissions', 'student', 'installments'));
    }

    public function submitFee(Request $request, Student $student)
    {
        // Ensure all installments are paid before submitting total fee
        if ($student->installments->every->is_paid) {
            $this->feeSubmissionService->submitFee($student, $student->feeStructure->final_fee, now());

            return redirect()->route('students.show', $student->id)->with('success', 'Total fee submitted successfully.');
        }

        return redirect()->back()->with('error', 'All installments must be paid before submitting the total fee.');
    }
}

