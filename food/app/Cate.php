<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    
    public function dianpus()
    {
    	return $this->hasMany('App\Dianpu');
    }

   	
}
