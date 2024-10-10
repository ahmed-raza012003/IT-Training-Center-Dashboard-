<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\InstallmentService;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'fee_status',
        'fee_amount_received',
        'batch_id',
        'course_id',
        'timing_id',
        'fee_structure_id',
        'name',
        'phone',
        'gender',
        'father_name',
        'cnic',
        'address',
        'emergency_contact',
        'religion',
        'status',
        'profile_picture',
        'registration_number',
        'instructor_id',
    ];
    
    protected static function booted()
    {
        static::created(function ($student) {
            $installmentService = app(InstallmentService::class);
            $installmentService->generateInstallments($student); // Automatically generate installments upon student creation
        });
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }

    public function feeStructure()
    {
        return $this->belongsTo(FeeStructure::class);
    }
    public function installments()
{
    return $this->hasMany(Installment::class);
}
public function feeSubmissions()
    {
        return $this->hasMany(FeeSubmission::class);
    }
 
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    
}
