<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecenter extends Model
{
    protected $fillable = ['ec_name', 'manager', 'capacity', 'occupancy', 'barangay_id'];

    public function Barangay()
    {
        return $this->hasOne(Ecenter::class,'barangay_id','id');
    }

    public function Evacuee()
    {
        return $this->hasOne(Evacuee::class,'ecenter_id','id');
    }

}

