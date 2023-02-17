<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecenter extends Model
{
    protected $fillable = ['ec_name', 'manager', 'capacity', 'occupancy', 'barangay_id'];

    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }
}

