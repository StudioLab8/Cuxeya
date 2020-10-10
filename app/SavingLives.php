<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavingLives extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'curp', 'adress', 'saucer_price', 'saucer',
        'day_and_hour', 'menu', 'attended', 'observations'
    ];
}
