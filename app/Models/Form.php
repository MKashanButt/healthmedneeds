<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'gender',
        'address',
        'medicare_id',
        'dob',
        'state',
        'zip_code',
        'message',
        'ip',
    ];
}
