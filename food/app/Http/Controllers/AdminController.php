<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //后台首页
    public function index()
    {	
    	return view('admin');
    }

    //后台登录页面
    public function login()
    {	
		return view('admin.login');
    }

     public function dologin(Request $request)
    {
    	//获取用户的数据
		$user = User::where('user_name', $request->user_name)->first();

		if(!$user){
			return back()->with('error','登录失败');
		}

		if(!$user->user_qx==1)
		{
			return back()->with('error','您权限不足,请与管理员联系');
		}

		//校验密码
		if(Hash::check($request->user_password, $user->user_password)){
			//写入session
			session(['user_name'=>$user->user_name, 'id'=>$user->id]);
			return redirect('/admin')->with('success','登陆成功');
		}else{
			return back()->with('error','没有权限请联系管理员!');
		}
    }


    public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/admin/login')->with('success','退出成功');
	}
}
