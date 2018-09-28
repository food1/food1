<?php

namespace App\Http\Controllers;
use App\Dianpu;
use App\Food1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Food1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $food1s = Food1::orderBy('id','desc')
            ->where('food1_name','like', '%'.request()->keywords.'%')
            ->paginate(5);
        //解析模板显示用户数据
        return view('admin.food1.index', ['food1s'=>$food1s]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dianpus = Dianpu::all();
        return view('admin.food1.create', compact('dianpus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       
        $food1 = new Food1;
        $food1 -> food1_name = $request->food1_name;
        $food1 -> food1_intro =$request->food1_intro;
        $food1 -> food1_price = $request->food1_price;
        
        if ($request->hasFile('food1_img')) {
            $food1->food1_img = '/'.$request->food1_img->store('uploads/'.date('Ymd'));
        }
        if($food1 -> save()){          
             try{
                $res = $food1->dianpus()->sync($request->dianpu_id);                  
            }catch(\Exception $e){
                return back()->with('error','添加失败!');               
            }
            return redirect('/food1')->with('success','添加成功');            
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
        $food1 = Food1::findOrFail($id);
        return view('admin.food1.edit', ['food1'=>$food1]);
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
        $food1 = Food1::findOrFail($id);

        //更新
        $food1 -> food1_name = $request->food1_name;
        $food1 -> food1_intro= $request->food1_intro;
        $food1 -> food1_price = $request->food1_price;
        //$food1 -> food1_img = $request->food1_img;

        if ($request->hasFile('food1_img')) {
            $food1->food1_img = '/'.$request->food1_img->store('uploads/'.date('Ymd'));
        }
        

        if($food1->save()){
            return redirect('/food1')->with('success','更新成功');
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
        $Food1 = Food1::findOrFail($id);

        if($Food1->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
