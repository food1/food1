<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dianpu extends Model
{
    //多对多
    public function food1s()
    {
    	return $this->belongsToMany('App\Food1');
    }
}
