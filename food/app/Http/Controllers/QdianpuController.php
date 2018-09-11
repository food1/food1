<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class QdianpuController extends Controller
{

    //前台控制器
    public function index()
    {
        $users = User::find(\Session::get('id'));
        return view('home.dianpus.index',compact('users'));
    }

    public function xiangqing()
    {
        return view('home.dianpus.xiangqing');
    }

     public function guize()
    {
        return view('home.dianpus.guize');
    }
}
