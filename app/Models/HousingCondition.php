<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingCondition extends Model
{
    use HasFactory;
    protected $fillable = [
       'housing_condition_name'
    ];
}
