<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Dianpu;
use App\Food1;
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
        $cates = Cate::all();
        $dianpus = Dianpu::all();
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users','links','cates','dianpus'));
    }

    // //菜品展示页面
    // public function cai()
    // {
    //     $users = User::find(\Session::get('id'));
        
    //     return view('home.dianpus.cai',compact('users'));
    // }
    //菜品展示页面
    public function cai(Request $request)
    {
        $users = User::find(\Session::get('id'));
        $links = Link::all();
        $food1s = Food1::orderBy('id','desc')
               ->where('food1_name','like', '%'.request()->keywords.'%')
               ->paginate(8);
        //解析模板显示数据
        // dd($food1s);
        return view('/home.dianpus.cai',compact('food1s','users','links'));
    }


    //详情页面
    public function xiangqing()
    {
        $users = User::find(\Session::get('id'));
        $cates = Cate::all();
        return view('home.dianpus.xiangqing',compact('users','cates'));
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

    public function fankui()
    {
        return view('home.dianpus.fankui');
    }

    public function liuyan()
    {
        return view('home.dianpus.liuyan');
    }

    public function weizhi()
    {
        return view('home.dianpus.weizhi');
    }
    
}
