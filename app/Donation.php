<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'project_id', 'concept', 'description', 'amount'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
