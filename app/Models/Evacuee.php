<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evacuee extends Model
{
    protected $fillable = ['last_name',
                           'first_name',
                           'middle_name',
                           'dob',
                           'gender',
                    ];

                           public function TenureStatus()
                           {
                               return $this->belongsTo(Evacuee::class, 'tenure_status_id','id');
                           }

                           public function HousingConditions()
                           {
                               return $this->belongsTo(Evacuee::class, 'housing_condition_id','id');
                           }

                           public function HealthConditions()
                           {
                               return $this->belongsTo(Evacuee::class, 'health_condition_id','id');
                           }

                           public function Barangay()
                           {
                               return $this->belongsTo(Evacuee::class, 'barangay_id','id');
                           }

                           public function Ecenter()
                           {
                               return $this->belongsTo(Evacuee::class, 'ecenter_id','id');
                           }





}
