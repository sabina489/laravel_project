<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table="student__faculties";
    protected $fillable = [
        'name',
        'is_active',
    ];
}
