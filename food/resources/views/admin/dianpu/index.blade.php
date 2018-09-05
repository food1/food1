<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理系统HTML模板--模板之家 www.cssmoban.com</title>
<link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admingg/js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>店铺管理</span>
    </div>
    @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div style="background:yellowgreen">
                        <div class="desc" style="text-align: center;line-height:95px;color:white;font-size: 20px;">{{Session::get('success')}} </div>
                </div>
            </div>
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div style="background: pink">
                        <div class="desc" style="text-align: center;line-height:95px;color:white;font-size: 20px;">{{Session::get('error')}} </div>
                </div>
            </div>
        </div>
    @endif
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="click"><span><a href="/dianpu/create"><img src="/admingg/images/t01.png" /></span>添加</a></li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/admingg/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    <center>
            <form action="/user" method="get">
            {{csrf_field()}}
            <div>
                <input type="text" name="keywords" value="{{request()->keywords}}" style="width:350px;height:30px;border:solid 1px #ddd;">
                <button style="width:50px;height:30px;">搜索</button>
            </div>
            </form>
        </center>
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>ID<i class="sort"></i></th>
        <th>店铺名称</th>
        <th>店铺描述</th>
        <th>小店图片</th>
        <th>小店地址</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
            @foreach($dianpus as $v)

        <tr>
        <td><input name="" type="checkbox" value=""/></td>
        <td>{{$v['id']}}</td>
        <td>{{$v['dianpu_name']}}</td>
        <td>{{$v['dianpu_intro']}}</td>
        <td><img src="{{$v['dianpu_img']}}" width="50" height="50"></td>
        <td>{{$v['dianpu_adress']}}</td>
        <td>
            <a href="/dianpu/{{$v['id']}}/edit" style="float:left">
                <div style="color:#aaa;background-color:#ddd;height:25px;line-height:25px;font-size:13px;">编辑</div></a>
                <form action="/dianpu/{{$v['id']}}" method="post">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <button href="/dianpu/{{$v['id']}}" style="float:right;height:25px;font-size:14px;color:#aaa;"> 删除</button>
                </form>
        </td>
        </tr>
           @endforeach    
        </tbody>
    </table>
    
   
   <style>
                    .pagination{
                        padding-left: 0;
                        margin: 1.5rem 0;
                        list-style: none;
                        color: #999;
                        text-align: left;
                        padding: 0;
                    }

                    .pagination li{
                        display: inline-block;
                    }

                    .pagination li a, .pagination li span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                    }

                    .pagination .active span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                        background: #23abf0;
                        color: #fff;
                        border: 1px solid #23abf0;
                        padding: 6px 12px;
                    }
                </style>
                <div class="am-cf" style="float: right;">
                    <div class="am-fr">
                        {{ $dianpus->appends(request()->all())->links() }}
                    </div>
                </div>
    </div>
</body>
</html>
