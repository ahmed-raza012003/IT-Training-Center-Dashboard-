<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'emergency_phone',
        'cnic',
        'father_name',
        'address',
        'bank_name',
        'account_number',
        'profile_picture',
        'technology',
        'course_id',  // Changed to course_id
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
