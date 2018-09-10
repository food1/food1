<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Dianpu;
use Illuminate\Http\Request;

class DianpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        
        $cates = Cate::all();
        // dd($cates);
        //读取数据库 获取用户数据
        $dianpus = Dianpu::orderBy('id','desc')
            ->where('dianpu_name','like', '%'.request()->keywords.'%')
            ->paginate(5);

        
        //解析模板显示用户数据
        return view('admin.dianpu.index', compact('dianpus','cate'));
        //['dianpus'=>$dianpus,'cates'=>$cates]

        //
    }

    /**
     2* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $cates = Cate::all();
        // dd($cates);
        return view('/admin.dianpu.create',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // $cate = Cate::all();
        $cate = Cate::all();
        $dianpu = new Dianpu;
        $dianpu -> cate_id = $request->cate_id;
        // dd($dianpu);
        

        
        
        $dianpu -> dianpu_name = $request->dianpu_name;
        $dianpu -> dianpu_intro =$request->dianpu_intro;
        $dianpu -> dianpu_adress = $request->dianpu_adress;
        


        if ($request->hasFile('dianpu_img')) {
            $dianpu->dianpu_img = '/'.$request->dianpu_img->store('uploads/'.date('Ymd'));
        }


        if($dianpu -> save()){
            return redirect('/dianpu')->with('success', '添加成功');
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
        //获取用户的信息
        $cates = Cate::all();
        $dianpu = Dianpu::findOrFail($id);
        // dd($dianpu->cate);
        //解析模板显示数据
        return view('admin.dianpu.edit', ['dianpu'=>$dianpu, 'cates'=>$cates]);
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
        //获取用户的信息
       
        $dianpu = Dianpu::findOrFail($id);
       
        //更新
        
        $dianpu -> dianpu_name = $request->dianpu_name;
        $dianpu -> dianpu_intro= $request->dianpu_intro;
        $dianpu -> dianpu_adress = $request->dianpu_adress;
        //$dianpu -> dianpu_img = $request->dianpu_img;

        if ($request->hasFile('dianpu_img')) {
            $dianpu->dianpu_img = '/'.$request->dianpu_img->store('uploads/'.date('Ymd'));
        }
        

        if($dianpu->save()){
            return redirect('/dianpu')->with('success','更新成功');
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
        $dianpu = Dianpu::findOrFail($id);

        if($dianpu->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
