<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>店铺添加</title>
    <link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">店铺管理</a></li>
            <li><a href="#">店铺添加</a></li>
        </ul>
    </div>
    <div class="formbody">
        <form action="/dianpu" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="formtitle"><span>基本信息</span></div>
            <ul class="forminfo">
                <li>
                    <label>选择所属分类:</label>
                    <select class="dfinput" name="cate_id" style="width: 347px;height: 34px; font-size: 14px;">
                        @foreach($cates as $v)
                            <option value="{{$v['id']}}">{{$v['cate_name']}}</option>
                        @endforeach
                    </select>
                </li>
                <li>
                    <label>店铺名</label>
                    <input name="dianpu_name" type="text" class="dfinput" />
                </li>
                <li>
                    <label>店铺描述</label>
                    <input name="dianpu_intro" type="text" class="dfinput" />
                </li>
                <li>
                    <label>小店地址</label>
                    <input name="dianpu_adress" type="text" class="dfinput" />
                </li>
                <br>
                <li>
                    <label>小店图片</label>
                    <input name="dianpu_img" type="file" />
                </li>
                <br> 
                {{csrf_field()}}
                <li>
                    <label>&nbsp;</label>
                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                </li>
            </ul>
        </form>
    </div>
</body>

</html>