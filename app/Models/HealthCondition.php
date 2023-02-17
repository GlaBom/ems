<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    protected $fillable = ['health_condition_name'];

    public function Evacuee()
    {
        return $this->hasOne(Evacuee::class,'health_condition_id','id');
    }
}

