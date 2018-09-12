<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food1 extends Model
{
   		
  	public function dianpus()
    {
    	return $this->belongsToMany('App\Dianpu');
    }
}
