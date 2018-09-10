<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台登录</title>
    <link href="/adminlogin/Wopop_files/style_log.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/adminlogin/Wopop_files/style.css">
    <link rel="stylesheet" type="text/css" href="/adminlogin/Wopop_files/userpanel.css">
    <link rel="stylesheet" type="text/css" href="/adminlogin/Wopop_files/jquery.ui.all.css">
</head>

<body class="login" mycollectionplug="bind">
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
    <div class="login_m">
        <div class="login_logo"><img src="/adminlogin/Wopop_files/logo.png" width="196" height="46"></div>
        <div class="login_boder">
            <form method="post" action="/admin/login">
                <div class="login_padding" id="login_model">
                    <h2>用户名</h2>
                    <label>
                        <input type="text" id="username" class="txt_input txt_input2" onfocus="if (value ==&#39;Your name&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;Your name&#39;}" value="Your name" name="user_name">
                    </label>
                    <h2>密码</h2>
                    <label>
                        <input type="password" name="user_password" id="userpwd" class="txt_input">
                    </label>
                    <div class="rem_sub">
                        <div class="rem_sub_l">
                        </div>
                        {{csrf_field()}}
                        <label>
                            <input class="sub_button" value="提交" type="submit">
                        </label>
                    </div>
                </div>
            </form>
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/">企业网站模板</a></div>
            <div id="forget_model" class="login_padding" style="display:none">
                <br>
                <h1>Forgot password</h1>
                <br>
                <div class="forget_model_h2">(Please enter your registered email below and the system will automatically reset users’ password and send it to user’s registered email address.)</div>
                <label>
                    <input type="text" id="usrmail" class="txt_input txt_input2">
                </label>
                <div class="rem_sub">
                    <div class="rem_sub_l">
                    </div>
                    <label>
                        <input type="submit" class="sub_buttons" name="button" id="Retrievenow" value="Retrieve now" style="opacity: 0.7;">
                        <input type="submit" class="sub_button" name="button" id="denglou" value="Return" style="opacity: 0.7;">
                    </label>
                </div>
            </div>
            <!--login_padding  Sign up end-->
        </div>
        <!--login_boder end-->
    </div>
    <!--login_m end-->
    <br>
    <br>
    <p align="center">本网站由内蒙F4独家赞助</p>
</body>

</html>