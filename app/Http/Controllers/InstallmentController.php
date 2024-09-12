<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\InstallmentService;

class InstallmentController extends Controller
{
    protected $installmentService;

    public function __construct(InstallmentService $installmentService)
    {
        $this->installmentService = $installmentService;
    }

    
    // Generate installments for a student
    public function generateInstallments(Student $student)
    {
        $this->installmentService->generateInstallments($student);

        return redirect()->route('students.show', $student->id)->with('success', 'Installments generated successfully.');
    }

    // Process a payment for a student's installment
    public function processPayment(Request $request, Student $student)
    {
        $amount = $request->input('payment_amount');
        $submissionDate = now();

        $this->installmentService->processPayment($student, $amount, $submissionDate);

        return redirect()->route('students.show', $student->id)->with('success', 'Payment processed successfully.');
    }
}
