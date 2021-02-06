<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'activated', 'content', 'url'
    ];

    public function gallery()
    {
        return $this->hasMany('App\GalleryNews');
    }
}
