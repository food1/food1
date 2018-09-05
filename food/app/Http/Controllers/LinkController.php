<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //读取数据库 获取用户数据
        $links = Link::orderBy('id','desc')
            ->where('link_name','like', '%'.request()->keywords.'%')
            ->paginate(5);
        //解析模板显示用户数据
        return view('admin.link.index', ['links'=>$links]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        return view('admin.link.create');
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
        //dd($request->all());
         $link = new link;

        $link -> link_name = $request->link_name;
        $link -> link_url = $request->link_url;
        if ($request->hasFile('link_img')) {
            $link->link_img = '/'.$request->link_img->store('uploads/'.date('Ymd'));
        }
        if($link -> save()){
            return redirect('/link')->with('success', '添加成功');
        }else{
            return back()->with('error','添加失败');
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
         //获取用户的信息
        $link = Link::findOrFail($id);
        //解析模板显示数据
        return view('admin.link.edit', ['link'=>$link]);
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
         //获取用户的信息
        $link = Link::findOrFail($id);

        //更新
        $link -> link_name = $request->link_name;
        $link -> link_url = $request->link_url;
        if ($request->hasFile('link_img')) {
            $link->link_img = '/'.$request->link_img->store('uploads/'.date('Ymd'));
        }
        

        if($link->save()){
            return redirect('/link')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $link = Link::findOrFail($id);

        if($link->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
