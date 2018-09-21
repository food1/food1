<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PeizhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.peizhi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return ('2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $path = 'D:/XAMPP/htdocs/food1/food/storage/framework/down';
        if(!is_file($path))
        {
            File::copy('D:/XAMPP/htdocs/food1/food/storage/framework/adown', 'D:/XAMPP/htdocs/food1/food/storage/framework/down');
            
            return redirect('/peizhi')->with('success','网站关闭成功!!!');
        }
            return back()->with('error','网站已经关闭,别点我了!!!');
            return view('admin.peizhi.index');
           
           

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return ('4');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return ('5');
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
        // return ('6');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $path = 'D:/XAMPP/htdocs/food1/food/storage/framework/down';
        if(is_file($path))
        {
            File::delete('D:/XAMPP/htdocs/food1/food/storage/framework/down');
           
             return redirect('/peizhi')->with('success','恭喜维护完成!!!');
        } else {

              return back()->with('error','网站已经开启,别点我了!!!');
        }
         return view('admin.peizhi.index');
    }

}
