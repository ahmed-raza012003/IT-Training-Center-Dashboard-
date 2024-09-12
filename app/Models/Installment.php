<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'amount',
        'paid_amount',
        'is_paid',
        'due_date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function feeStructure()
{
    return $this->belongsTo(FeeStructure::class);
}

}
