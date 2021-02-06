<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentProject extends Model
{
    protected $fillable = [
        'project_id', 'type', 'file_name', 'order'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
