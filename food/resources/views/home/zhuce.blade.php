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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
			<ul class="account">
				<li><a>我的账户</a></li>
			</ul>
			<ul class="shopping_cart">
			   <a><li class="shop_left"><i class="cart"> </i><span>购物车</span></li></a>
			   <a><li class="shop_right"><span>$0.00</span></li></a>
			   <div class="clearfix"> </div>
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
				      	<li class="active"><a href="/dianpus">首页</a></li>
				        <li><a>关于我们</a></li>
				        <li><a>今日推荐</a></li>
				        <li><a>我的订单</a></li>
				        <li><a>反馈留言</a></li>
				        <li><a>在线客服</a></li>
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
 		<!-- 閃存 -->
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
		 <!-- 閃存 -->
    <div class="main">
		<div class="container">
		  	<div class="Product_top">
		  		<center>
		  	  		<form action="/home/login" method="post" id="myform" name="myform" enctype="multipart/form-data"> 
				 		<div class="register-top-grid">
						<div>
						    <span><label>用户名:</label></span>
						    <span><input name="user_name" type="text" style="width:300px;height:30px;border:solid 1px #aaa;"></span>
						</div>
						<div>
						    <span><label>密码::</label></span>
						    <span><input name="user_password" type="password" style="width:300px;height:30px;border:solid 1px #aaa;"></span>
						</div>
						<div>
						    <span><label>手机号:</label></span>
						    <span><input name="user_phone" type="text" style="width:300px;height:30px;border:solid 1px #aaa;"></span>
						</div>
						<div>
						    <span><label>收货地址:</label></span>
						    <span><input name="user_adress" type="text" style="width:300px;height:30px;border:solid 1px #aaa;"></span>
						</div>
						<div>
						    <span><label>头像:</label></span>
						    <input name="user_img" type="file" style="width:300px;height:30px;border:solid 1px #aaa;">
						</div>
						<div style="float:left;">
							<p style="font-size:14px;">其他注册方式:</p>
		   	   				<a href=""><img src="/home/images/1.png" style="width:60px;height:50px;"/></a>
		   	   				&nbsp; &nbsp; &nbsp; <a href=""><img src="/home/images/2.png" style="width:60px;height:50px;"/></a>
		   	   				&nbsp; &nbsp; &nbsp; <a href=""><img src="/home/images/3.png" style="width:60px;height:50px;"/></a>
		   	   			</div>	
					</div>
				  <div class="clearfix"> </div>
					<div class="register-but"> 
					   	{{csrf_field()}}
						 <input type="submit" value="注册">
						 <div class="clearfix"> </div>
					</form>
			</center>
			</div>
		</div>
	</div>
</div>
   <div class="footer">
		<div class="container">
			<div class="footer-grid footer-grid1">
			  	<h3 class="m_2">用戶帮助</h3>
			  	<ul class="list1">
			  		<li><a href="#">我的客服</a></li>
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
		   	<div class="footer-grid footer-grid3">
			  	<h3 class="m_2">关于我们</h3>
			  	<ul class="list1">
			  		<li><a href="#">吃了么介绍</a></li>
			    	<li><a href="#">加入我们</a></li>
			    	<li><a href="#">联系我们</a></li>
			    	<li><a href="#">规则中心</a></li>
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
			  		<li class="secure_img"><img src="/home/images/secure.png" alt=""/></li> 
			  		<li class="secure_desc">品质值得信赖</li>
			  		<div class="clearfix"> </div>
			  	</ul>
			  	<ul class="secure">
			  		<li class="secure_img"><img src="/home/images/order.png" alt=""/></li> 
			  		<li class="secure_desc">速度值得称赞</li>
			  		<div class="clearfix"> </div>
			 	</ul>
		   		</div>
		   	<div class="clearfix"> </div>
	   	</div>
	</div>
</body>
</html>

