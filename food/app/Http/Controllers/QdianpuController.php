<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\Request;

class QdianpuController extends Controller
{

    //前台控制器
    //店铺展示页面
    public function index()
    {

        $links = Link::all();
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users','links'));
    }

    //菜品展示页面
    public function cai()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.cai',compact('users'));
    }

    //详情页面
    public function xiangqing()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.xiangqing',compact('users'));
    }


    //购物车页面
     public function car()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.car',compact('users'));
    }
    
    //我的订单页面
    public function order()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.order',compact('users'));
    }
    
     public function guize()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.guize',compact('users'));
    }

    public function intro()
    {
        return view('home.dianpus.intro');
    }

    public function call()
    {
        return view('home.dianpus.call');
    }
    
}
