<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'curp', 'comment', 'program'
    ];
}
