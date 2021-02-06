<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryNews extends Model
{
    protected $fillable = [
        'news_id', 'image_name', 'order'
    ];

    public function project(){
        return $this->belongsTo('App\News');
    }
}
