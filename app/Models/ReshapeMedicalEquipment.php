<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReshapeMedicalEquipment extends Model
{
    protected $table = 'reshape_medical_data';
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
