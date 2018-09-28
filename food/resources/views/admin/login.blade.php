<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>吃了么后台登录</title>
<link id="link1" href="/home/huanfu/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
@if(Session::has('success'))
    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
        <div style="background: blue" green">
            <div class="desc" style="text-align: center;line-height:95px;color:yellow;font-size: 20px;">{{Session::get('success')}} </div>
        </div>
    </div>
@endif
@if(Session::has('error'))
    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
        <div style="background: pink" red">
            <div class="desc" style="text-align: center;line-height:95px;color:yellow;font-size: 20px;">{{Session::get('error')}} </div>
            </div>
        </div>
    </div>
@endif
<dl id="message">
    <form method="post" action="/admin/login">
        <dt>
            <strong>我是可以更换皮肤的登录框哦：</strong>
            <input id="btn1" type="button" value="皮肤1" onclick="document.getElementById('link1').href='/home/huanfu/css1.css';" />
            <input id="btn2" type="button" value="皮肤2" onclick="document.getElementById('link1').href='/home/huanfu/css2.css';" />
        </dt>
            <dd>用户名：<input class="text" type="text" name="user_name" /></dd>
            <dd>密&nbsp; &nbsp;码：<input class="text" type="password" name="user_password" /></dd>
            <dd class="center">{{csrf_field()}}<input class="btn" type="submit" value="提交" /></dd>
        </form>
</dl>
</body>
</html>

