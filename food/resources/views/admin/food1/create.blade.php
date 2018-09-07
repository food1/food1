<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>菜品管理</title>
    <link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">餐品管理</a></li>
            <li><a href="#">菜品添加</a></li>
        </ul>
    </div>
    <div class="formbody">
        <form action="/food1" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="formtitle"><span>基本信息</span></div>
            <ul class="forminfo">
                <li>
                    <label>菜品名</label>
                    <input name="food1_name" type="text" class="dfinput" />
                </li>
                <br>
                <li>
                    <label>菜品图片</label>
                    <input name="food1_img" type="file" />
                </li>
                <br>
                <li>
                    <label>菜品描述</label>
                    <input name="food1_intro" type="text" class="dfinput" /> 
                </li>
                <br>
                <li>
                    <label>菜品单价</label>
                    
                    <input name="food1_price" type="text" size="5"  / style="border:solid 1px #a7b5bc;height: 30px;">
                </li>
                <br>
                
                <br> {{csrf_field()}}
                <li>
                    <label>&nbsp;</label>
                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                </li>
            </ul>
        </form>
    </div>
</body>

</html>