<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evacuee extends Model
{
    protected $fillable = ['last_name', 'first_name', 'middle_name', 'dob', 'age', 'gender', 'address', 'phone_number'];

    public function tenureStatus()
    {
        return $this->belongsTo(TenureStatus::class);
    }

    // public function housingCondition()
    // {
    //     return $this->belongsTo(HousingCondition::class);
    // }

    // public function healthCondition()
    // {
    //     return $this->belongsTo(HealthCondition::class);
    // }

    // public function emergency()
    // {
    //     return $this->belongsTo(Emergency::class);
    // }

    // public function barangay()
    // {
    //     return $this->belongsTo(Barangay::class);
    // }

    // public function ecenter()
    // {
    //     return $this->belongsTo(Ecenter::class, 'e_center_id');
    // }
}
