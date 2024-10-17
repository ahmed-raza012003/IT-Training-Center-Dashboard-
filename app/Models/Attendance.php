<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'staff_attendance';
    protected $fillable = ['staff_id', 'date', 'check_in', 'check_out', 'status'];
    protected $casts = [
        'date' => 'date',
    ];

    public function staff()
    {
        return $this->belongsTo(StaffMember::class, 'staff_id');
    }

    public function calculateWorkedHours()
    {
        if ($this->check_in && $this->check_out) {
            $start = Carbon::parse($this->check_in);
            $end = Carbon::parse($this->check_out);
            return $start->diffInHours($end);
        }
        return 0;
    }
}
