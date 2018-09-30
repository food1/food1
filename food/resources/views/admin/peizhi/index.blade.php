<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>网站配置</title>
    <link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">网站配置</a></li>
        </ul>
        <span>网站配置</span>
    </div>
    <div class="formbody">
        <form action="/peizhi" method="post">
        <div class="formtitle"><span>基本信息</span></div>
        @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div style="background: yellowgreen">
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
        @endif
        <br>
        <ul class="forminfo">
            {{csrf_field()}}
            <li>
                <label>&nbsp;</label>
                <input name="over" class="btn btn-primary btn6 mr10" value="关闭网站" type="submit">&nbsp;
            </li>
        </ul>
        </form>
        <form action="/peizhi/destroy" method="post">
        <ul class="forminfo">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <li>
                <label>&nbsp;</label>
                <button class="btn btn-primary btn6 mr10" id="one" type="submit">开启网站</button>
            </li>
        </ul>
        </form>
    </div>
</body>
</html>

