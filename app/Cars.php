<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    public function makes(){

    	return $this->hasMany('App\Makes');
    }
}
