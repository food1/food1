<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = new User;
        
        $users = User::find(\Session::get('id'));

        
        return view('home.person.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::findOrFail(session('id'));
        if (!Hash::check($request->jiupass,$user->user_password)){
            return back()->with('error','原密码输入错误,请重新输入!!!');
        }
        $user = User::find($id);
        //更新
        $user -> user_name = $request->user_name;
        $user -> user_phone = $request->user_phone;
        $user -> user_adress = $request->user_adress;
        $user -> user_password = Hash::make($request->user_password);
        
        
        

        if ($request->hasFile('user_img')) {
            $user->user_img = '/'.$request->user_img->store('uploads/'.date('Ymd'));
        }
        
        if($user->save()){
            return redirect('/home/login')->with('success','修改成功,请您重新登录');
        }else{
            return back()->with('error','修改失败,请您稍后再试');
        }

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
}
