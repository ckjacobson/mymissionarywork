<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    public function household()
    {
    	return $this->belongsTo('\App\Household');
    }

    public function user()
    {
    	return $this->belongsTo('\App\User', 'creator_id');
    }
}
