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
            <li><a href="#">表单</a></li>
        </ul>
    </div>
    <div class="formbody">
        <form action="/link/{{$link['id']}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="formtitle"><span>基本信息</span></div>
            <ul class="forminfo">
                <li>
                    <label>用户名</label>
                    <input name="link_name" type="text" class="dfinput" value="{{$link['link_name']}}" />
                </li>
                <li>
                    <label>地址</label>
                    <input name="link_url" type="text" class="dfinput" value="{{$link['link_url']}}" />
                </li>
                <li>
                    <label>头像</label>
                    <input name="link_img" type="file" class="dfinput" value="{{$link['link_img']}}" />
                </li>
                {{method_field('PUT')}} {{csrf_field()}}
                <li>
                    <label>&nbsp;</label>
                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                </li>
            </ul>
        </form>
    </div>
</body>

</html>