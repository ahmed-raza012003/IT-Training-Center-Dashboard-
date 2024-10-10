<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id', 'name', 'duration', 'outline', 'instructor', 'what_will_i_learn', 'requirements', 'details', 'image', 'lectures', 'quizzes', 'skill_level', 'expiry_period', 'certificate'
    ];
    

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function timing()
    {
        return $this->hasMany(Timing::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    } public function students()
    {
        return $this->hasMany(Student::class);
    }
}

