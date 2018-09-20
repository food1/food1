<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopcar extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function food1()
    {
    	return $this->belongsTo('App\food1');
    }
}
