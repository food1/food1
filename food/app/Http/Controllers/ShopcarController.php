<?php

namespace App\Http\Controllers;

use App\Food1;
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

    public function index(Request $req)
    {
        // dd($req);
        $a = $req->shuliang[0];
        $b = $req->price;
        $c = (int)$a;
        
        $d = (int)$b;
        
        // dd($req);
        $price = $c*$d;
        //dd($price);
        $id = $req->shopcar_id;
        $user_id = \Session::get('id');
        $shopcars = Shopcar::findOrFail($id)
            ->where('food1_id',$req->food1_id)
            ->where('user_id',$req->user_id);
        //$users = User::where('user_id',$user_id)->find($id);
        // $food1s = Food1::where('id',$id)->find($shopcars);
        //dd($shopcars);
        return view('home.jiesuan.index',compact('shopcars','user_id','id','price'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tj()
    {
        //
        return view('home.jiesuan.tijiao');
    }

    public function order()
    {
        
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
