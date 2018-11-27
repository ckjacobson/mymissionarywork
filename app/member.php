<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public function household() 
    {
    	return $this->belongsTo('\App\Household');
    }
}
