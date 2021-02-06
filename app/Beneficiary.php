<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        'project_id', 'user_id', 'type', 'phone', 'commentary', 'attended', 'status'
    ];

    public function project() 
    {
        return $this->belongsTo('App\Project');
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function documents()
    {
        return $this->hasMany('App\DocumentBeneficiaries');
    }
}
