<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Dianpu;
use App\Food1;
use App\Link;
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
    //前台展示
     public function show(Request $request)
    {
        //
        $food1s = Food1::all();
        $links = Link::all();
        $users = User::find(\Session::get('id'));
        $cates = Cate::all();      
        // //读取数据库 获取用户数据
        $dianpus = Dianpu::where('cate_id', $request->cate_id)->orderBy('id','desc')
            ->where('dianpu_name','like', '%'.request()->keywords.'%')
            ->paginate(8);
        
        //  if(!empty($request->cate_id)){
        //      $dianpus = Dianpu::where('cate_id', $request->cate_id)->orderBy('id','desc')->paginate(8);
        // }
        
        //解析模板显示用户数据
        return view('/home/dianpus/index', compact('dianpus','cates','users','links','food1s'));
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
