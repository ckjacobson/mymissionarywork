<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class household extends Model
{
    public function member()
    {
    	return $this->hasMany('\App\Member');
    }

    public function visit()
    {
    	return $this->hasMany('\App\Visit');
    }
}
