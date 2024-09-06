<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'amount',
        'submission_date',
        'status', // paid, unpaid, overpaid, underpaid
    ];

    /**
     * Relationship with Student
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Calculate total submitted fee for the student.
     *
     * @param int $studentId
     * @return float
     */
    public static function getTotalSubmittedFee($studentId)
    {
        return self::where('student_id', $studentId)->sum('amount');
    }

    /**
     * Determine the fee status (paid, unpaid, underpaid).
     *
     * @param Student $student
     * @return string
     */
    public static function determineFeeStatus(Student $student)
    {
        $totalPaid = self::getTotalSubmittedFee($student->id);
        $finalFee = $student->feeStructure->final_fee;

        if ($totalPaid >= $finalFee) {
            return 'paid'; // Fully paid
        } elseif ($totalPaid > 0) {
            return 'underpaid'; // Some amount has been paid but not fully
        } else {
            return 'unpaid'; // No payment yet
        }
    }
}
