<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch', 'training_name', 'training_shift', 'prefix', 'first_name',
        'middle_name', 'last_name', 'dob', 'mobile', 'email', 'gender', 'religion',
        'cnic', 'guardian_mobile', 'street_address', 'city', 'state', 'postal_code'
    ];
}
