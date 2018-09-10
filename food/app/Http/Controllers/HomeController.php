<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('/home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.dianpu.zhuce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //登录页面
    public function login()
    {
        return view('home.login');
    }

    //登陆操作
    public function dologin(Request $request)
    {

        //获取用户的数据
        $user = User::where('user_name', $request->user_name)->first();

        if(!$user){
            return back()->with('error','登陆失败!');
        }
        //校验密码
        if(Hash::check($request->user_password, $user->user_password)){
            //写入session
            session(['user_name'=>$user->user_name, 'id'=>$user->id]);
            return redirect('/dianpus')->with('success','登陆成功!');
            return redirect('/dianpus')->with('success','登陆成功');
        }else{
            return back()->with('error','登陆失败!');
        }
    }

    //退出登录
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home/login')->with('success','退出成功!');
    }


    //注册页面
    public function zhuce()
    {
       
        return view('home.zhuce');
    }
    //執行註冊
    public function dozhuce(Request $request)
    {
        $user = new User;

        $user -> user_name = $request->user_name;
        $user -> user_password = Hash::make($request->user_password);
        $user -> user_phone = $request->user_phone;
        $user -> user_adress = $request->user_adress;
        
        //$user -> user_img = $request->user_img;
        
        if ($request->hasFile('user_img')) {
            $user->user_img = '/'.$request->user_img->store('uploads/'.date('Ymd'));
        }
        if($user -> save()){
            return redirect('/home/login')->with('success', '添加成功');
        }else{
            return back()->with('error','添加失败');
        } 
    }
}
