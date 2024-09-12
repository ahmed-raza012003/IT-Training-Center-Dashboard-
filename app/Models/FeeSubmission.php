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
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function feeStructure()
{
    return $this->belongsTo(FeeStructure::class);
}


    public static function getTotalSubmittedFee($studentId)
    {
        return self::where('student_id', $studentId)->sum('amount');
    }

    public static function determineFeeStatus(Student $student)
    {
        $totalPaid = self::getTotalSubmittedFee($student->id);
        $finalFee = $student->feeStructure ? $student->feeStructure->final_fee : 0;

        if ($totalPaid >= $finalFee) {
            return 'Paid';
        } elseif ($totalPaid > 0) {
            return 'Underpaid';
        }

        return 'Unpaid';
    }
}
