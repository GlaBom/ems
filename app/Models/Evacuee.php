<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evacuee extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'dob',
        'age',
        'gender',
        'tenure_status',
        'housing_condition',
        'health_condition',
        'barangay_id',
        'ecenter_id'
    ];

    public function Barangay()
    {
        return $this->belongsTo(Evacuee::class, 'barangay_id', 'id');
    }

    public function Ecenter()
    {
        return $this->belongsTo(Evacuee::class, 'ecenter_id', 'id');
    }
}
