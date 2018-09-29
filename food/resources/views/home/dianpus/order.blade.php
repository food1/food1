<!DOCTYPE HTML>
<html>
<head>
<title>吃了么-我的订单</title>
<link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/bootstrap.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/home/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- 个人中心 -->
<link rel="icon" type="image/png" href="/home/personassets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/home/person/assets/i/app-icon72x72@2x.png">
<link rel="stylesheet" href="/home/person/assets/css/amazeui.min.css" />
<link rel="stylesheet" href="/home/person/assets/css/admin.css">
<link rel="stylesheet" href="/home/person/assets/css/app.css">
<script src="/home/person/assets/js/echarts.min.js"></script>
<!--  -->
</head>
<body>
	<div class="header">
		<div class="container">
		  <div class="header_top">
			<ul class="phone">
				<li class="phone_left"><i class="mobile"> </i><span>15149174619</span></li>
				<li class="phone_right"> 50元以上的餐品我们将免费为您配送哦!</li>
				<div class="clearfix"></div>
			</ul>
			<ul class="social">
				 <h1 style="font-family:'华文彩云';color:#aaa;font-size:40px;">吃了么</h1>
			</ul>
			<ul class="account">
			
			@if(Session::has('id') != null)
				<li style="color:#aaa;font-size:16px;">
				<a href="/person">个人中心</a>&nbsp;|
				<a href="#">用户:{{$users['user_name']}}</a>
				&nbsp; <img src="{{$users['user_img']}}" width="30px" height="30px" />
				</li>
			@endif
			</ul>
			<ul class="shopping_cart">
			   <a href="/dianpus/car"><li class="shop_left"><i class="cart"> </i><span>购物车</span></li></a>
			   <a href="#"><li class="shop_right"><span>$0.00</span></li></a>
			   <div class="clearfix"> </div>
			</ul>
			   <div class="clearfix"> 
			   </div>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="header_bottom">
		  <div class="header_nav">
      		<div class="logo">
				<a href="/dianpus"><img src="/home/images/logo.png" alt=""/><br></a>
			 </div>
			 <nav class="navbar navbar-default menu" role="navigation">
			 	<h3 class="nav_right">
			 		<a href="index.html">
			 			<img src="/home/images/logo.png" class="img-responsive" alt=""/>
			 		</a>
			 	</h3>
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav menu1">
			      	<li><a href="/dianpus?cate_id=1">首页</a></li>
			        <li><a href="/dianpus/guize">规则中心</a></li>
					<li><a href="/dianpus/qiandao">每日签到</a></li>
			        <li><a href="/dianpus/jiameng">加盟合作</a></li>
			        <li><a href="/dianpus/zhuanpan">帮你做决定</a></li>
			        <li><a href="/dianpus/choujiang">抽奖活动</a></li>
			        @if(Session::has('id') != null)
			        <li><a href="/fankui">反馈中心</a></li>
			        @endif
		        </ul>

		        <ul class="login">
				@if(Session::has('id') == null)
					<a href="/home/login"><li class="login_top"><i class="sign"> </i><span>登录</span></li></a>
					<a href="/home/zhuce"><li class="login_bottom"><i class="register"> </i><span>注册</span></li></a>
				@endif
				@if(Session::has('id') != null)
					<a href="/home/logout"><li class="login_top"><i class="sign"> </i><span>退出登录</span></li></a>
				@endif
		        </ul>

			      <div class="clearfix"></div>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			 <!-- 閃存 -->
	           
			    @if(Session::has('error'))
			    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
			    <div class="dashboard-stat red">
			    <div class="desc" style="text-align: center;line-height:90px;color:white;background-color:#f66;">{{Session::get('error')}} </div>
			    </div>
			    </div>
			    @endif
           <!-- 閃存 -->
            <div class="clearfix"></div>
           </div>
            <div class="search">
			  <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
			  <input type="submit" value="搜索">
			</div>
		 </div>  
		</div>
	</div>
	
    <div class="main">
		<div class="container" style="width: 80%">
			<!--  -->
			<ul class="tpl-left-nav-menu">
			    <li class="tpl-left-nav-item">
			        <div class="tpl-portlet-components">
			        	<div style="height: 20px"></div>
    <div class="portlet-title" style="height:20px">

        <div class="caption font-green bold">
           我的订单
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12">

                <table class="am-table am-table-striped am-table-hover table-main">
                	
                    <thead>
                        <tr>
                            <th class="table-time">下单时间</th>
                            <th class="table-title">订单内容</th>
                            <th class="table-set">支付金额 (元)</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	
                        <tr style="height: 40px">
                            <td>dfdsfds</td>
                            <td>fdsfdsfds</td>
                            <td>dsfdsfds</td>
                            
                        </t
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
			<!--  -->
</div>
</div>
	<!-- 页脚 -->
	<div class="footer">
		<div class="container">
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
		   <!-- 友情链接 -->
		   <div class="footer-grid footer-grid_last">
		   	@foreach($links as $v)
	          <ul class="secure">
			  	<li class="secure_img">
			  	<a href="{{$v['link_url']}}">
			  	<img src="{{$v['link_img']}}" alt="" width="50"/></li> 
			  	<li class="secure_desc">{{$v['link_name']}}</li>
			  	</a>
			  	<div class="clearfix"> </div>
			  </ul>
			@endforeach
		   </div>
		   <!-- 友情链接 -->
		   <div class="clearfix"> </div>
	   </div>
	</div>
</body>
</html>
