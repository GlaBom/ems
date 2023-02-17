<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $fillable = ['barangay_name', 'barangay_chairman', 'contact_number'];
    public function Evacuee()
    {
        return $this->hasOne(Evacuee::class,'barangay_id','id');
    }
}
