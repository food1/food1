<?php

namespace App\Http\Controllers;

use App\Lunbo;
use Illuminate\Http\Request;

class LunboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $lunbos = Lunbo::all();
         return view('admin.lunbotu.index', ['lunbos'=>$lunbos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.lunbotu.create');
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
        $lunbo = new Lunbo;
           
            if ($request->hasFile('lunbo_pic')) {
                $lunbo->lunbo_pic = '/'.$request->lunbo_pic->store('uploads/'.date('Ymd'));
            }
            if($lunbo -> save()){
                return redirect('/lunbotu')->with('success', '添加成功');
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
        $lunbo = Lunbo::findOrFail($id);
        //解析模板显示数据
       
        //解析模板显示数据
        return view('admin.lunbotu.edit', ['lunbo'=>$lunbo]);
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
         $lunbo = Lunbo::findOrFail($id);

        //更新
        
        if ($request->hasFile('lunbo_pic')) {
            $lunbo->lunbo_pic = '/'.$request->lunbo_pic->store('uploads/'.date('Ymd'));
        }
        

        if($lunbo->save()){
            return redirect('/lunbotu')->with('success','更新成功');
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
        $lunbo = Lunbo::findOrFail($id);

        if($lunbo->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
