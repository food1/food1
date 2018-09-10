<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
<<<<<<< HEAD
    // public function dianpus()
    // {
    // 	return $this->hasMany('App\Dianpu');
    // }
=======
    
    public function dianpus()
    {
    	return $this->hasMany('App\Dianpu');
    }

   	
>>>>>>> a80441192d67fcfa7befe3460884817ea0234347
}
