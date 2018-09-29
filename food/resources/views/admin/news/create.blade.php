<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>小提示添加</title>
    <link href="/admingg/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" charset="utf-8" src="/home/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/home/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/home/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">小提示管理</a></li>
            <li><a href="#">小提示添加</a></li>
        </ul>
    </div>
    <div class="formbody">
        <form action="/news" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="formtitle"><span>基本信息</span></div>
            <ul class="forminfo">    
            <li>
                <label>标题:</label>
                <input name="title" type="text" class="dfinput" />
            </li>
            <li>
                <label>图片:</label>
                <input name="img" type="file" />
            </li>
            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">内容</label>
                <div class="am-u-sm-9">
                <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                </div>
                </div> 
                {{csrf_field()}}
                <center>
                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button style="width:100px;height:50px;">提交</button>
                    </div>
                </div>
                </center>
        </form>
        <script>
            var ue = UE.getEditor('editor');
        </script>
    </div>
</body>

</html>