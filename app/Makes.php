<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makes extends Model
{
    public function cars(){

    	return $this->belongsTo('App\Cars')
    }
}
