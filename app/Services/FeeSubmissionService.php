<?php

namespace App\Services;

use App\Models\FeeSubmission;
use App\Models\Student;

class FeeSubmissionService
{
    /**
     * Create a fee submission for the given student.
     *
     * @param Student $student
     * @param array $validatedData
     * @return FeeSubmission
     */
    public function createFeeSubmission(Student $student, array $validatedData)
    {
        // Create and return the FeeSubmission record
        return FeeSubmission::create([
            'student_id' => $student->id,
            'amount' => $validatedData['amount'],
            'submission_date' => $validatedData['submission_date'],
            'status' => $this->determineFeeStatus($student),
        ]);
    }

    /**
     * Determine the fee status for the student.
     *
     * @param Student $student
     * @return string
     */
    public function determineFeeStatus(Student $student)
    {
        // Get the total amount paid so far
        $totalPaid = FeeSubmission::where('student_id', $student->id)->sum('amount');

        // Get the final fee amount
        $finalFee = $student->feeStructure->final_fee;

        // Determine status based on total paid and final fee
        if ($totalPaid >= $finalFee) {
            return 'paid';  // Fully paid
        } elseif ($totalPaid > 0) {
            return 'underpaid';  // Some amount has been paid but not fully
        } else {
            return 'unpaid';  // No payment yet
        }
    }

    /**
     * Get fee submissions for a student.
     *
     * @param int $studentId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByStudent($studentId)
    {
        return FeeSubmission::where('student_id', $studentId)->get();
    }
}
