<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户修改</title>
<link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="place">
    <span>修改用户</span>
    </div>   
    <div class="formbody">
    <form action="/dianpu/{{$dianpu['id']}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
    <div class="formtitle"><span>基本信息</span></div>   
    <ul class="forminfo">
    <li><label>店铺名称</label><input name="dianpu_name" type="text" class="dfinput" value="{{$dianpu['dianpu_name']}}" /></li>
    <li><label>店铺描述</label><input name="dianpu_intro" type="text" class="dfinput" value="{{$dianpu['dianpu_intro']}}"/></li>
    <br>
    <li><label>小店图片</label><input name="dianpu_img" type="file" value="{{$dianpu['dianpu_img']}}"/></li>
    <br>
    <li><label>店铺地址</label><input name="dianpu_adress" type="text" class="dfinput" value="{{$dianpu['dianpu_adress']}}"/></li>
    {{method_field('PUT')}}
    {{csrf_field()}}
    <li><label>&nbsp;</label><input class="btn btn-primary btn6 mr10" value="提交" type="submit"></li>
    </ul>   
      </form>
    </div>
</body>
</html>
