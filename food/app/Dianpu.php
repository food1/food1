<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dianpu extends Model
{
    //店铺对餐品 多对多
    public function food1s()
    {
    	return $this->belongsToMany('App\Food1');
    }


    //N店铺对1分类
    public function cate()
    {
    	return $this->belongsTo('App\Cate');
    }
}
