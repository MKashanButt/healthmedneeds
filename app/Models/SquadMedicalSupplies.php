<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SquadMedicalSupplies extends Model
{
    protected $table = 'squad_medical_data';
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'dob',
        'zip_code',
        'message',
        'ip',
    ];
}
