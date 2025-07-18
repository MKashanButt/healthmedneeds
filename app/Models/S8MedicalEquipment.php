<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class S8MedicalEquipment extends Model
{
    protected $table = 's8_medical_data';
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
