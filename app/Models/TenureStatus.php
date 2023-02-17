<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenureStatus extends Model
{
    protected $fillable = ['status_name'];

    public function Evacuee()
    {
        return $this->hasOne(Evacuee::class,'tenure_status_id','id');
    }
}
