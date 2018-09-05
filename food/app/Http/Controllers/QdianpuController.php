<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QdianpuController extends Controller
{
     public function index()
    {
        return view('home.dianpus.index');
    }

    public function xiangqing()
    {
        return view('home.dianpus.xiangqing');
    }
}
