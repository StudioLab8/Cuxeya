<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'category', 'type', 'online_or_in_person', 'country', 'city', 'address',
        'state', 'zip_code', 'description', 'phone', 'email', 'web', 'account_fb', 'account_tw',
        'account_ins', 'accept_donations', 'personalized_donation', 'activated',
        'expiry_date', 'publication_date'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
