<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Dianpu;
use App\Food1;
use App\Link;
use App\Logo;
use App\News;
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
        $cates = Cate::all();
        $dianpus = Dianpu::all();
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users','links','logos','cates','dianpus'));
    }

   
    //菜品展示页面
    public function cai(Request $request)
    {
        $dianpu_id = ($_GET['dianpu_id']);
        $links = Link::all();
        $dianpu = Dianpu::where('id',$dianpu_id)->first();
        $foods = $dianpu->food1s;
        $food1s = Food1::all();
        $users = User::find(\Session::get('id'));
        
        // $food1s = Food1::orderBy('id','desc')
        //        ->where('food1_name','like', '%'.request()->keywords.'%')
        //        ->paginate(8);
        //解析模板显示数据
        // dd($food1s);

        return view('/home.dianpus.cai',compact('users','foods','dianpu_id','food1s','links'));
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
        $links = Link::all();
        return view('home.dianpus.order',compact('users','links'));
    }
    

     public function guize()
    {
        $users = User::find(\Session::get('id'));
        $links = Link::all();
        return view('home.dianpus.guize',compact('users','links'));
    }


    public function intro()
    {
        $links = Link::all();
        return view('home.dianpus.intro',compact('links'));
    }


    public function call()
    {
        $links = Link::all();
        return view('home.dianpus.call',compact('links'));
    }

    public function weizhi()
    {
        return view('home.dianpus.weizhi');
    }

    public function qiandao()
    {
        return view('home.dianpus.qiandao');
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

    public function neirong(Request $request)
    {

        // $news = News::where('title', $request->title)->first();
        $news = News::where('title',$request->title)->first();
        return view('home.dianpus.neirong',compact('news'));
    }

}
