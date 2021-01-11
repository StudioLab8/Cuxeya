<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'image_name', 'order'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
