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
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">Logo管理</a></li>
    </ul>
    </div>
    @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div style="background: blue" green">
                        <div class="desc" style="text-align: center;line-height:95px;color:red">{{Session::get('success')}} </div>
                </div>
            </div>
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div style="background: pink" red">
                        <div class="desc" style="text-align: center;line-height:95px;color:red">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="click"><span><img src="/admingg/images/t01.png" /><a href="/logo/create"></span>添加</a></li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/admingg/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
       
        <th>ID</th>
        <th>Logo</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logos as $v)
        <tr>
        <td><input name="" type="checkbox" value=""/></td>
        <td>{{$v['id']}}</td>
        <td><img src="{{$v['logo']}}" width="50" height="50"></td>
        <td><a href="/logo/{{$v['id']}}/edit" class="tablelink">编辑</a>
            <form style="float: left" action="/logo/{{$v['id']}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button href="/logo/{{$v['id']}}" class="tablelink"> 删除</button>
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
                
    </div>
</body>
</html>
