<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'batch_id', 'duration', 'outline', 'instructor_id', 'image', 'details' // Add 'image' and 'details'
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

