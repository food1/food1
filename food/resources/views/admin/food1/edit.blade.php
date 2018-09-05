<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>菜品修改</title>
    <link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="place">
        <span>修改菜品</span>
    </div>
    <div class="formbody">
        <form action="/food1/{{$food1['id']}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="formtitle"><span>基本信息</span></div>
            <ul class="forminfo">
                <li>
                    <label>菜品名称</label>
                    <input name="food1_name" type="text" class="dfinput" value="{{$food1['food1_name']}}" />
                </li>
                <br>
                <li>
                    <label>小店图片</label>
                    <input name="food1_img" type="file" value="{{$food1['food1_img']}}" />
                </li>
                <br>
                <li>
                    <label>菜品描述</label>
                    <input name="food1_intro" type="text" class="dfinput" value="{{$food1['food1_intro']}}" />
                </li>
                <li>
                    <label>菜品单价</label>
                    <input name="food1_price" type="text" class="dfinput" value="{{$food1['food1_price']}}" />
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