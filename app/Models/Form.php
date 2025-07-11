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
        'dob',
        'zip_code',
        'message',
        'ip',
    ];
}
