<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = [
        'name', 'organization', 'image', 'testimony', 'activated'
    ];
}
