<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'name',
        'duration',
        'outline',
        'instructor',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function timings()
    {
        return $this->hasMany(Timing::class);
    }
    
}
