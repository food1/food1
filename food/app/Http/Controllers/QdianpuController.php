<?php

namespace App\Http\Controllers;

use App\Dianpu;
use App\Food1;
use App\Link;
use App\Logo;
use App\Shopcar;
use App\User;
use Illuminate\Http\Request;

class QdianpuController extends Controller
{

    //前台控制器
    //店铺展示页面
    public function index()
    {
        $logos = Logo::orderBy('id','desc')->paginate(1);
        $links = Link::all();
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users','links','logos'));
    }

   
    //菜品展示页面
    public function cai(Request $request)
    {
        $dianpu_id = ($_GET['dianpu_id']);
        $dianpu = Dianpu::where('id',$dianpu_id)->first();
        $foods = $dianpu->food1s;
        $food1s = Food1::all();
        $users = User::find(\Session::get('id'));
        
        // $food1s = Food1::orderBy('id','desc')
        //        ->where('food1_name','like', '%'.request()->keywords.'%')
        //        ->paginate(8);
        //解析模板显示数据
        // dd($food1s);
        return view('/home.dianpus.cai',compact('users','foods','dianpu_id','food1s'));
    }


    //购物车页面
     public function car()
    {   
        $user_id = \Session::get('id');
        $food1s = Shopcar::where('user_id',$user_id)->get();
        $food_id = Shopcar::pluck('food1_id');
        return view('home.dianpus.car',compact('food1s','user_id','food_id'));
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

    //转盘
    public function zp()
    {
         return view('home.dianpus.zhuanpan');
    }

    //抽奖
    public function cj()
    {
         return view('home.dianpus.choujiang');
    }
     //加盟
    public function jm()
    {
         return view('home.dianpus.jiameng');
    }

}
