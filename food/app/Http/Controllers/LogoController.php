<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
        $logos = Logo::all();

        //解析模板显示用户数据
        return view('admin.logo.index', ['logos'=>$logos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.logo.create');
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
        $logo = new Logo;
           
            if ($request->hasFile('logo')) {
                $logo->logo = '/'.$request->logo->store('uploads/'.date('Ymd'));
            }
            if($logo -> save()){
                return redirect('/logo')->with('success', '添加成功');
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
         $logo = Logo::findOrFail($id);
        //解析模板显示数据
       
        //解析模板显示数据
        return view('admin.logo.edit', ['logo'=>$logo]);
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
        $logo = Logo::findOrFail($id);

        //更新
        
        if ($request->hasFile('logo')) {
            $logo->logo= '/'.$request->logo->store('uploads/'.date('Ymd'));
        }
        

        if($logo->save()){
            return redirect('/logo')->with('success','更新成功');
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
        $logo = Logo::findOrFail($id);

        if($logo->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
