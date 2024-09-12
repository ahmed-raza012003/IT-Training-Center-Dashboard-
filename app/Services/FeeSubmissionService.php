<?php

namespace App\Services;

use App\Models\FeeSubmission;
use App\Models\Student;

class FeeSubmissionService
{
    public function getByStudent($studentId)
    {
        return FeeSubmission::where('student_id', $studentId)->get();
    }

    public function submitFee(Student $student, $amount, $submissionDate)
    {
        $submission = new FeeSubmission();
        $submission->student_id = $student->id;
        $submission->amount = $amount;
        $submission->submission_date = $submissionDate;
        $submission->status = 'Paid';
        $submission->save();

        // Mark total fee status as 'Paid'
        $this->updateTotalFeeStatus($student);
    }

    public function updateTotalFeeStatus(Student $student)
    {
        $totalPaid = $student->feeSubmissions->sum('amount');
        $finalFee = $student->feeStructure->final_fee;

        if ($totalPaid >= $finalFee) {
            $student->update(['total_fee_status' => 'Paid']);
        } elseif ($totalPaid > 0) {
            $student->update(['total_fee_status' => 'Underpaid']);
        } else {
            $student->update(['total_fee_status' => 'Unpaid']);
        }
    }
}
