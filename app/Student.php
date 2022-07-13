<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'dob',
        'image',
        'mobile',
        'is_active',
        'is_almuni',
    ];
}
