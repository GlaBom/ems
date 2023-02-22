<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = ['emergency_group', 'main_type', 'sub_type', 'name','date_occured'];
}
