<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food1 extends Model
{
   		
  	public function dianpus()
    {
    	return $this->belongsToMany('App\Dianpu');
    }

    public function shopcar()
    {
    	return $this->hasMany('App\Shopcar');
    }
}
