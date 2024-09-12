<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'timing_id',
        'main_fee',
        'discount_fee',
        'final_fee',
        'course_duration',
        
    ];

    /**
     * Relationship with Timing
     */
    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }

    /**
     * Relationship with Student
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get the course duration through the related Timing and Course.
     */
    public function courseDuration()
    {
        return $this->timing ? $this->timing->course->duration : null;
    }
    public function calculateFinalFee()
    {
        return $this->main_fee - $this->discount_fee;
    }
    
    public function installments()
{
    return $this->hasMany(Installment::class);
}
public function feeSubmissions()
{
    return $this->hasMany(FeeSubmission::class);
}
public function calculateMonthlyInstallment()
{
    // Ensure course_duration and final_fee are available
    if ($this->course_duration > 0) {
        return $this->final_fee / $this->course_duration;
    }
    return 0; // Return 0 if no valid course duration
}


}
