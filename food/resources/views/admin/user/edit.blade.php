<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户修改</title>
<link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">用户修改</a></li>
    </ul>
    <span>修改用户</span>
    </div>
    <div class="formbody">
    <form action="/user/{{$user['id']}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
    <div class="formtitle"><span>基本信息</span></div>
    <ul class="forminfo">
    <li><label>用户名</label><input name="user_name" type="text" class="dfinput" value="{{$user['user_name']}}" /></li>
    <li><label>手机号</label><input name="user_phone" type="text" class="dfinput" value="{{$user['user_phone']}}"/></li>
    <li><label>普通用户</label><input  type="radio" class="dfinput" @if($user->user_qx == 0) checked @endif name="user_qx" value ="0"/></li>
    <li><label>管理员</label><input  type="radio" class="dfinput" @if($user->user_qx == 1)  checked @endif name="user_qx" value ="1"/></li>
    <li><label>头像</label><input name="user_img" type="file" class="dfinput" value="{{$user['user_img']}}"/></li>
    {{method_field('PUT')}}
    {{csrf_field()}}
    <li><label>&nbsp;</label><input class="btn btn-primary btn6 mr10" value="提交" type="submit"></li>
    </ul>
      </form>
    </div>
</body>
</html>
