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

    /**
     * Calculate the monthly installment based on the final fee and course duration.
     *
     * @return float|string
     */
    public function calculateMonthlyInstallment()
    {
        // Ensure final_fee and course duration are set
        if ($this->final_fee && $this->courseDuration()) {
            $installment = $this->final_fee / $this->courseDuration();
            return round($installment, 3);  // Round to 2 decimal places
        }

        return 'N/A';  // Return 'N/A' if values are missing
    }
}
