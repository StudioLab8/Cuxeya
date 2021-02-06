<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'name', 'category', 'type', 'online_or_in_person', 'zoom_url', 'country', 'city', 'address',
        'state', 'zip_code', 'description', 'youtube_url', 'phone', 'email', 'web', 'account_fb', 'account_tw',
        'account_ins', 'accept_donations', 'personalized_donation', 'activated',
        'expiry_date', 'publication_date', 'url', 'status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function gallery()
    {
        return $this->hasMany('App\Gallery');
    }

    public function donations()
    {
        return $this->hasMany('App\Donation');
    }

}
