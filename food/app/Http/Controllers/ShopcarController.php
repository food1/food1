<?php

namespace App\Http\Controllers;

use App\Shopcar;
use App\User;
use Illuminate\Http\Request;

class ShopcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addshopcar()
    {
        $user_id = \Session::get('id');
        $food_id = $_GET['food1_id'];
        $res = Shopcar::where('user_id',$user_id)
                ->where('food1_id',$food_id)
                ->first();
        if(!empty($res)){
            $res->shuliang += '1';
            if($res -> save()){
                return redirect('/dianpus/car');
            }else{
                return back();
            }
        }
        if(empty($res)){
            $shopcar = new Shopcar;
            $shopcar -> user_id = $user_id;
            $shopcar -> food1_id = $food_id;
            if($shopcar->save()){
                return redirect('/dianpus/car');
            }else{
                return back();
            }
        }

    }

    public function index()
    {
        //
        $user_id = \Session::get('id');
        $id = $_GET['shopcar_id'];
        $shopcars = Shopcar::findOrFail($id);
        $users = User::orderBy('id','desc');
       
        //dd($shopcars);
        return view('home.jiesuan.index',compact('shopcars','users','user_id'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $_GET['food1_id'];
        $shopcar = Shopcar::findOrFail($id);
        // dd($shopcar);

        if($shopcar->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
