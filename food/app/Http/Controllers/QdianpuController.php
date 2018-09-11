<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class QdianpuController extends Controller
{

    //前台控制器
    //店铺展示页面
    public function index()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users'));
    }

    //菜品展示页面
    public function cai()
    {
        return view('home.dianpus.cai');
    }

    //详情页面
    public function xiangqing()
    {
        return view('home.dianpus.xiangqing');
    }


    //购物车页面
     public function car()
    {
        return view('home.dianpus.car');
    }
    
    //我的订单页面
    public function order()
    {
        return view('home.dianpus.order');
    }
    
     public function guize()
    {
        return view('home.dianpus.guize');

    }
    
}
