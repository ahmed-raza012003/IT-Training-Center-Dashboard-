<?php

namespace App\Services;

use App\Models\Installment;
use App\Models\Student;
use Carbon\Carbon;

class InstallmentService
{
    // Generate installments for a student based on their fee structure
    public function generateInstallments(Student $student)
    {
        $feeStructure = $student->feeStructure;
        $finalFee = $feeStructure->final_fee;
        $courseDuration = $student->course->duration; // Assuming 'duration' is in months
    
        // Log or Debug
        // dd($finalFee, $courseDuration);
    
        $installmentAmount = $finalFee / $courseDuration;
    
        for ($i = 1; $i <= $courseDuration; $i++) {
            Installment::create([
                'student_id' => $student->id,
                'amount' => $installmentAmount,
                'due_date' => now()->addMonths($i),
                'is_paid' => false,
            ]);
        }
    }
    

    // Process payment for a student's installments
    public function processPayment(Student $student, $amount, $submissionDate)
    {
        $installments = $this->getInstallmentsForStudent($student);

        // Check if there's an unpaid installment to be paid
        foreach ($installments as $installment) {
            if (!$installment->is_paid) {
                $remainingAmount = $installment->amount - $installment->paid_amount;

                // If payment covers the remaining amount, mark as paid
                if ($amount >= $remainingAmount) {
                    $installment->paid_amount += $remainingAmount;
                    $installment->is_paid = true;
                    $installment->save();

                    $amount -= $remainingAmount;
                } else {
                    // Partial payment for this installment
                    $installment->paid_amount += $amount;
                    $installment->save();

                    $amount = 0;
                    break; // No more amount to distribute
                }
            }
        }

        // Handle any remaining amount (e.g., overpayment or extra installments)
        if ($amount > 0) {
            // Logic for handling overpayments or extra amounts can be added here
            // For now, we assume any remaining amount is ignored
        }

        $this->updateTotalFeeStatus($student); // Update the overall fee status after the payment
    }

    // Fetch the installments for a student
    public function getInstallmentsForStudent(Student $student)
    {
        return $student->installments;
    }

    // Update the total fee status (Paid, Underpaid, Unpaid)
    public function updateTotalFeeStatus(Student $student)
    {
        $totalPaid = $student->installments->sum('paid_amount');
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
