<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'batch_number', // Make sure this is the correct attribute
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
