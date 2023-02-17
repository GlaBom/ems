<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HousingCondition extends Model
{
    protected $fillable = ['housing_condition_name'];

    public function Evacuee()
    {
        return $this->hasOne(Evacuee::class,'housing_condition_id','id');
    }
}

