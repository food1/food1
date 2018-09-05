<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户添加</title>
<link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    <form action="/user" method="post" id="myform" name="myform" enctype="multipart/form-data">

    <div class="formtitle"><span>基本信息</span></div>
    
    <ul class="forminfo">
    <li><label>用户名</label><input name="user_name" type="text" class="dfinput" /></li>
    <li><label>手机号</label><input name="user_phone" type="text" class="dfinput" /></li>
    <li><label>普通用户</label><input name="user_qx" type="radio" class="dfinput" value="0" /></li>
    <li><label>管理员</label><input name="user_qx" type="radio" class="dfinput" value="1" /></li>
    <li><label>密码</label><input name="user_password" type="password" class="dfinput" /></li>
    <li><label>头像</label><input name="user_img" type="file" class="dfinput" /></li>
    {{csrf_field()}}
    <li><label>&nbsp;</label><input class="btn btn-primary btn6 mr10" value="提交" type="submit"></li>
    </ul>
    
      </form>
    </div>
</body>
</html>
