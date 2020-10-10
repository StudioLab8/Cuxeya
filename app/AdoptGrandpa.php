<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptGrandpa extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'curp', 'help_time_gift', 'help_time', 'type_of_donation',
        'visit_or_photos', 'attended', 'observations'
    ];
}
