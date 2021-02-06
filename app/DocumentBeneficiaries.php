<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentBeneficiaries extends Model
{
    protected $fillable = [
        'beneficiary_id', 'type', 'file_name', 'order'
    ];

    public function beneficiary(){
        return $this->belongsTo('App\Beneficiary');
    }
}
