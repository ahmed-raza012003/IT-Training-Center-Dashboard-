<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'phone', 'profile_picture', 'address', 'designation', 'role', 
        'cnic', 'emergency_contact', 'bank_name', 'bank_account_number', 'date_of_joining'
    ];
    protected $casts = [
        'date_of_joining' => 'date',
    ];
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'staff_id');
    }
}
