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
    <li><a href="#">基本内容</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="click"><span><img src="/admingg/images/t01.png" /><a href="/user/create"></span>添加</a></li>
        <li class="click"><span><img src="/admingg/images/t02.png" /></span>修改</li>
        <li><span><img src="/admingg/images/t03.png" /></span>删除</li>
        <li><span><img src="/admingg/images/t04.png" /></span>统计</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/admingg/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>ID<i class="sort"></i></th>
        <th>用户名</th>
        <th>手机号</th>
        <th>头像</th>
        <th>地址</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $v)

        <tr>
        <td><input name="" type="checkbox" value=""/></td>
        <td>{{$v['id']}}</td>
        <td>{{$v['user_name']}}</td>
        <td>{{$v['user_phone']}}</td>
        <td><img src="{{$v['user_img']}}" width="50" height="50"></td>
        <td>{{$v['user_adress']}}</td>
        <td><a href="#" class="tablelink">编辑</a>
            {{csrf_field()}}
            <a href="#" class="tablelink"> 删除</a></td>
        </tr>
           @endforeach    
        </tbody>
    </table>
    
   
    <div class="pagin">
        <ul class="paginList">
        <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
        <li class="paginItem"><a href="javascript:;">1</a></li>
        <li class="paginItem current"><a href="javascript:;">2</a></li>
        <li class="paginItem"><a href="javascript:;">3</a></li>
        <li class="paginItem"><a href="javascript:;">4</a></li>
        <li class="paginItem"><a href="javascript:;">5</a></li>
        <li class="paginItem more"><a href="javascript:;">...</a></li>
        <li class="paginItem"><a href="javascript:;">10</a></li>
        <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>
    
    </div>
</body>
</html>
