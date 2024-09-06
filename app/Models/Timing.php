<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'time_slot',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function feeStructure()
    {
        return $this->hasOne(FeeStructure::class);
    }
}
