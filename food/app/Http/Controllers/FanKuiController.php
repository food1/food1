<?php

namespace App\Http\Controllers;


use App\Fankui;
use App\Link;
use App\Shopcar;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class FanKuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $links = Link::all();
        $user_id = \Session::get('id'); 
        $users = User::find(\Session::get('id'));
        $food1s = Shopcar::where('user_id',$user_id)->get();
        return view('home.fankui.index',compact('users','links','food1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fankuis = Fankui::orderBy('id','desc')
            ->where('fankui_name','like', '%'.request()->keywords.'%')
            ->paginate(5);
        //解析模板显示用户数据
        return view('admin.fankui.index', ['fankuis'=>$fankuis]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $fankui = new Fankui;
            $fankui -> user_id = $request->user_id;
            $fankui -> fankui_name = $request->fankui_name;
            $fankui -> fankui_phone = $request->fankui_phone;
            $fankui -> email = $request->email;
            $fankui -> content = $request->content;
            
            
            
            if($fankui -> save()){
                return redirect('/fankui')->with('success', '反馈成功');
            }else{
                return back()->with('error','反馈失败');
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 333;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 444;
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
        return 555;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fankui = Fankui::findOrFail($id);

        if($fankui->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
