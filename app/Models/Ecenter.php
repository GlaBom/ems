<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'ec_name',
        'barangay',
        'manager',
        'date_of_activation',
        'date_of_deactivation'
    ];
}
