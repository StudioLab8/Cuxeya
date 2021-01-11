<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        'name', 'last_name', 'phone', 'email', 'commentary', 'attended', 'reply'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
