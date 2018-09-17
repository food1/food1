<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么注册页面</title>
    <link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.min.js"></script>
    <link href="/home/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    </script>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header_top">
                <ul class="phone">
                    <li class="phone_left"><i class="mobile"> </i><span>15149174619</span></li>
                    <li class="phone_right">50元以上的餐品我们将免费为您配送哦!</li>
                    <div class="clearfix"></div>
                </ul>
                <ul class="social">
                    <h1 style="font-family:'华文彩云';color:#aaa;font-size:40px;">吃了么</h1>
                </ul>
                <ul class="phone">
                    <li class="phone_right">吃了么24小时竭诚为您服务!</li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="header_bottom">
                <div class="header_nav">
                    <div class="logo">
                        <a href="index.html"><img src="/home/images/logo.png" alt=""/><br></a>
                    </div>
                    <nav class="navbar navbar-default menu" role="navigation">
                        <h3 class="nav_right">
			 		<a href="index.html">
			 			<img src="/home/images/logo.png" class="img-responsive" alt=""/>
			 		</a>
			 	</h3>
			  	<div class="container-fluid">
			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        </button>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    	<ul class="nav navbar-nav menu1">
	                    <li><a></a></li>
	                    <li><a></a></li>
	                    <li><a href="/dianpus">首页</a></li>
	                    <li><a href="/dianpus/order">我的订单</a></li>
	                    <li><a href="/dianpus/guize">规则中心</a></li>
	                    <li><a href="/dianpus/fankui">用户反馈</a></li>
	                    <li><a href="/dianpus/call">联系我们</a></li>
		        	</ul>
		          	<ul class="login">
		          		<a href="/home/login"><li class="login_top"><i class="sign"> </i><span>登录</span></li></a>
		          	</ul>
			    <div class="clearfix"></div>
			</div>
		</div>
	</nav>
<div class="clearfix"></div>
</div>
    <div class="search">
		<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		<input type="submit" value="搜索">
	</div>
</div>  
</div>
</div>
 		<!-- 闪存 -->
		@if(Session::has('success'))
		    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
		    <div class="dashboard-stat green">
		    <div class="desc" style="text-align: center;line-height:90px;color:white;background-color:yellowgreen;">{{Session::get('success')}} </div>
		    </div>
		    </div>
		@endif
		@if(Session::has('error'))
		    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
		    <div class="dashboard-stat red">
		    <div class="desc" style="text-align: center;line-height:90px;color:white;background-color:#f66;">{{Session::get('error')}} </div>
		    </div>
		    </div>
		@endif
		<!-- 闪存 -->
    <div class="main">
        <div class="container">
            <div class="Product_top">
                <div class="col-md-3">
                    <div class="category_box">
                        <h3 class="cate_head">精品推荐</h3>
                        <ul class="category">
                            <li><a href="#"><img src="/home/images/p1.jpg" width="100px" height="50px"></a></li>
                            <li><a href="#"><img src="/home/images/p2.jpg" width="100px" height="50px"></a></li>
                            <li><a href="#"><img src="/home/images/p3.jpg" width="100px" height="50px"></a></li>
                            <li><a href="#"><img src="/home/images/p4.jpg" width="100px" height="50px"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="breadcrumb">
                        <a href="#">首页</a> &gt;&gt; <span class="last">注册</span>
                    </div>
                    <center>
                        <div class="contact-form">
                            <form method="post" action="/home/login" enctype="multipart/form-data">
                                <div>
                                    <span><label>用户名:</label></span>
                                    <span><input name="user_name" type="text" style="width:300px;height:30px;border:solid 1px #aaa;" class="active"><span class="remind"></span></span>
                                </div>
                                <div>
                                    <span><label>密码:</label></span>
                                    <span><input name="user_password" type="password" style="width:300px;height:30px;border:solid 1px #aaa;" class="active"><span class="remind"></span></span>
                                </div>
                                <div>
                                    <span><label>确认密码:</label></span>
                                    <span><input name="repassword" type="password" style="width:300px;height:30px;border:solid 1px #aaa;" class="active"> <span class="remind"></span></span>
                                </div>
                                <div>
                                    <span><label>手机号:</label></span>
                                    <span><input name="user_phone" type="text" style="width:300px;height:30px;border:solid 1px #aaa;" class="active"> <span class="remind"></span></span>
                                </div>
                                <span class="remind"></span>
                                <div>
                                    <span><label>收货地址:</label></span>
                                    <span><input name="user_adress" type="text" style="width:300px;height:30px;border:solid 1px #aaa;" class="active"><span class="remind"></span></span>
                                </div>
                                <div>
                                    <span><label>头像:</label></span>
                                    <input name="user_img" type="file" style="width:300px;height:30px;border:solid 1px #aaa;" class="active">
                                </div>
                                <br>
                                <div id="c1"></div>
                                <div>
                                    {{csrf_field()}}
                                    <span><input type="submit" value="注册"></span>
                                </div>
                            </form>
                        </div>
                    </center>
                    <style type="text/css">
                    .active {}

                    .remind {
                        display: none;
                        font-size: 14px;
                        color: #ddd;
                    }

                    .error {
                        border: solid 1px red;
                    }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-grid footer-grid1">
                <h3 class="m_2">用戶帮助</h3>
                <ul class="list1">
                    <li><a href="#">用户留言</a></li>
                    <li><a href="#">用户反馈</a></li>
                </ul>
            </div>
            <div class="footer-grid footer-grid3">
                <h3 class="m_2">关于我们</h3>
                <ul class="list1">
                    <li><a href="/dianpus/intro">吃了么介绍</a></li>
                    <li><a href="/dianpus/call">联系我们</a></li>
                    <li><a href="/dianpus/guize">规则中心</a></li>
                </ul>
            </div>
            <div class="footer-grid footer-grid2">
                <h3 class="m_2">商务合作</h3>
                <ul class="list1">
                    <li><a href="#">我要开店</a></li>
                    <li><a href="#">加盟指南</a></li>
                    <li><a href="#">市场合作</a></li>
                    <li><a href="#">开放平台</a></li>
                </ul>
            </div>
            <div class="footer-grid footer-grid4">
                <h3 class="m_2">好东西和大家一起分享!</h3>
                <ul class="footer_social">
                    <li><a href="https://connect.qq.com/widget/shareqq/index.html?url=http"><img src="/home/images/QQ.png"/></a></li>
                    <li><a href="https://www.douban.com/share/service?href=http"><img src="/home/images/douban.png"/></a></li>
                    <li><a href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey"><img src="/home/images/qqkj.png"/></a></li>
                    <li><a href="http://service.weibo.com/share/share.php"><img src="/home/images/weibo.png"/></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <h3 class="m_3">订阅</h3>
                <div class="footer_search">
                    <input type="text" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
                    <input type="submit" value="搜索">
                </div>
            </div>
            <div class="footer-grid footer-grid_last">
                <ul class="secure">
                    <li class="secure_img"><img src="/home/images/secure.png" alt="" /></li>
                    <li class="secure_desc">品质值得信赖</li>
                    <div class="clearfix"> </div>
                </ul>
                <ul class="secure">
                    <li class="secure_img"><img src="/home/images/order.png" alt="" /></li>
                    <li class="secure_desc">速度值得称赞</li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.dingxiang-inc.com/ctu-group/captcha-ui/index.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
		var CUSER = false;
		var CPHONE = false;
		var CPASS = false;
		var CREPASS = false;
		var CADRESS = false;
		var CYAN = false;


//用户名
$('input[name=user_name]').focus(function() {
    //边框颜色
    // $(this).addClass('active');
    //提示语部分
    $(this).next().show().html('输入5~18位数字字母下划线');
}).blur(function() {
    // 移出激活状态的class
    $(this).removeClass('active');
    //正则判断
    var v = $(this).val();
    //声明正则
    var reg = /^\w{5,18}$/;
    //判断
    if (!reg.test(v)) {
        //文字提醒
        $(this).next().show().html('<font color="red">格式不正确</font>');
	} else {
        var input = $(this);
        //发送ajax请求 检测用户名是否存在
        $.post('/check-user-exists.php', { user_name: v }, function(data) {
            if (data != '1') {
                input.next().html('<font color="red">该用户名太受欢迎了,请您换一个再试!!!</font>');
            } else {
            	input.next().html('<span style="color:green;font-size:16px;font-weight:bold;">√</span>');
            }
        });
         CUSER = true;

        // $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold;">√</span>');
    }

});

	//手机号
	$('input[name=user_phone]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().show().html('输入您的手机号!!!');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $('input[name=user_phone]').val();
			//正则
			var reg = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9]|19[9])\d{8}$/;
			if(!reg.test(v)) {
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CPHONE = false;
			}else{
				//边框
				$(this).removeClass('error');
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CPHONE = true;

			}
		})

		//密码
		$('input[name=user_password]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().show().html('请输入字母开头5-16位字母数字下划线!!!');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $(this).val();
			//正则
			var reg = /^[a-zA-Z]\w{5,17}$/;

			if(!reg.test(v)) {
				
				
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CPASS = false;
			}else{
				
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CPASS = true;

			}
		})

		//确认密码
		$('input[name=repassword]').focus(function(){
			
			//提示语显示
			$(this).next().show().html('请再次输入密码');
		}).blur(function(){
			$(this).removeClass('active');

			//获取用户的输入值
			var v = $(this).val();


			if(v != $('input[name=user_password]').val()) {
				
				//文字提醒
				$(this).next().html('<span style="color:red">两次密码不一致</span>').show();
				CREPASS = false;
			}else{
				
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CREPASS = true;

			}
		})


		//地址
		$('input[name=user_adress]').focus(function(){
			
			//提示语显示
			$(this).next().show().html('请输入中文、英文、数字但不包括下划线等!!!');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $(this).val();
			//正则
			var reg = /^[\u4E00-\u9FA5A-Za-z0-9]+$/;

			if(!reg.test(v)) {
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CADRESS = false;
			}else{
				
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
			}
			CADRESS=true;
		});

		var My = _dx.Captcha(document.getElementById('c1'), {
		  appId: 'ed94b60ca9fd1e481366bc1d3c0049b3',
		  style: 'inline',
		  width: 300,
		  success: function(token) {
		    CYAN = true;
		  }
		});

		//表单的提交事件
		$('form').submit(function(){
			//触发错误提醒
			$('input').trigger('blur');
			// console.log(CUSER);
			//判断输入值是否都正确
			if(CUSER  && CPASS && CPHONE && CREPASS && CADRESS && CYAN) {
				return true;
			}else{
				return false;
			}
		});
</script>