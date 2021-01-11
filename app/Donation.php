<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'concept', 'amount'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
