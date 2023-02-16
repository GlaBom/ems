<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evacuee extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'dob',
        'age',
        'gender',
        'address',
        'phone_number',
        'tenure_status',
        'housing_condition',
        'health_condition',
        'remark',
        'calamity',
        'barangay',
        'e_center'
    ];
}
