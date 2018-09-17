<!DOCTYPE HTML>
<html>
<head>
<title>吃了么&nbsp; 歡迎您~ </title>
<link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/bootstrap.min.js"></script>
<script src="/home/js/jquery.min.js"></script>
<link href="/home/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/home/kefu/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<link href='http://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

	<style>
		*{	
			margin:0px;
			padding:0px;
			list-style:none;
		}
		#slide{
			width:90%;
			height:450px;
			border:solid 1px #ddd;
			margin:100px auto;
			position:relative;
		}
		#images li{
			width:100%;
			height:400px;
			position:absolute;
			left:0px;
			top:0px;
		}

		#dots{
			width:200px;
			height:20px;
			position:absolute;
			left:485px;
			bottom:5px;
		}

		#dots li{
			width: 10px;
    		height: 10px;
			background:yellowgreen;
			float:left;
			margin-right:5px;
			border-radius:50%;
		}

		#dots .active{
			background:white;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="container">
		  <div class="header_top">
			<ul class="phone">
				<li class="phone_left"><i class="mobile"> </i><span>15149174619</span></li>
				<li class="phone_right"> 50元以上餐品将免费为您配送!&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
				<div class="clearfix"></div>
			</ul>
			<ul class="social">
				<h1 style="font-family:'华文彩云';color:#aaa;font-size:40px;text-align:center;">吃了么</h1>
			</ul>
			<ul class="account">
			@if(Session::has('id') == null)				
			@endif
			@if(Session::has('id') != null)
				<li style="color:#aaa;font-size:16px;">
				&nbsp; &nbsp; &nbsp; &nbsp; <a href="/person">个人中心</a>&nbsp;|
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
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav menu1">
			      	<li><a></a></li>
			      	<li><a></a></li>
			      	<li><a></a></li>
			      	<li><a href="/dianpus">首页</a></li>
			        <li><a href="/dianpus/order">我的订单</a></li>
			        <li><a href="/dianpus/guize">规则中心</a></li>
			        <li><a href="/dianpus/fankui">用户反馈</a></li>
			        <li><a href="/dianpus/call">联系我们</a></li>
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
		@if(Session::has('error'))
		    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
		    <div class="dashboard-stat red">
		    <div class="desc" style="text-align: center;line-height:90px;color:white;background-color:#f66;">{{Session::get('error')}} </div>
		    </div>
		    </div>
		@endif
    <div class="main">
		<div class="container">
			<div id="slide">
			<ul id="images">
				<li><img src="home/images/l.jpg" alt="" width="100%" height="450px"></li>
				<li><img src="home/images/l4.jpg" alt="" width="100%" height="450px"></li>
				<li><img src="home/images/p11.jpg" alt="" width="100%" height="450px"></li>
				<li><img src="home/images/p13.jpg" alt="" width="100%" height="450px"></li>
				<li><img src="home/images/p10.jpg" alt="" width="100%" height="450px"></li>
			</ul>
			<ul id="dots">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="row content">
		</div>  
		</div>
		<div class="container" style="width: 95%">
		   
		   	<div class="col-md-3 content_top">
		   	   	 <div class="category_box">
                    <h3 class="cate_head">店铺分类</h3>
                    <ul class="category">
                    @foreach($cates as $v)
                        <li><a href="/dianpus?cate_id={{$v->id}}">{{$v->cate_name}}</a></li>
                    @endforeach
                    </ul>
                </div>
		   	   	<ul class="product_reviews">
		   	   	<h3><i class="arrow"> </i><span>用户评论</span></h3>
		   	   	<li>
		   	   		<ul class="review1">
		   	   			<li class="review1_img"><img src="/home/images/f3.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	   	<li>
		   	   		<ul class="review1">
		   	   			<li class="review1_img"><img src="/home/images/l4.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	   	<li>
		   	   		<ul class="review1">
		   	   			<li class="review1_img"><img src="/home/images/p3.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	    <div class="but">
			       <a href="#">更多评论<i class="but_arrow"></i></a>
			    </div>
		   	   	</ul>		   	   
		   	   	<ul class="product_reviews">
		   	   		<h3><i class="arrow"> </i><span>支付方式</span></h3>	   	   		
		   	   	</ul>
		   	   		<div style="float:left;">
		   	   			<a href=""><img src="/home/images/1.png" style="width:50px;height:50px;"/></a>
		   	   			<a href=""><img src="/home/images/2.png" style="width:50px;height:50px;"/></a>
		   	   			<a href="https://auth.alipay.com/login/ant_sso_index.htm?"><img src="/home/images/3.png" style="width:50px;height:50px;"/></a>
		   	   		</div>	
		   		</div>	
		   		   		
		   		<div class="col-md-9">
		   	   	<ul class="feature">
		   	   	 	<h3><i class="arrow"> </i><span>今日精选</span></h3>
		   	   	</ul>
		   	   	<ul class="feature_grid" style="width: 900px">
		   	   		@foreach($food1s as $k => $v)
		   	   		@if($k <= 2)

				 	<li class="grid1" style="float: right;margin: 0 auto;margin-right: 0px""><img src="{{$v['food1_img']}}" class="img-responsive" style="width: 250px;height: 110px; alt=""  />
				 	<p>{{$v['food1_name']}}</p>
				 	<div class="price">Price:
					  	<span class="actual">{{$v['food1_price']}}</span>
					</div>
				    <div class="but1">
			          	<a href="">立即购买</a>
			        </div>
				 	</li>
				 	@endif		   	   	
				 	@endforeach
				 	<div class="clearfix"></div>
		   	   	</ul>
		   	    <ul class="feature">
		   	   	 	<h3><i class="arrow"></i><span>热门店铺</span></h3>
		   	   	</ul>
		   	    <div class="row content_bottom">
                	@foreach($dianpus as $v)
                    <div class="col-md-3" >              
                        <div class="content_box"  style="float: left;margin-top:30px;">
                            <a href="/dianpus/cai">
                                <div class="view view-fifth" style="width: 190px">
                                    <img src="{{$v->dianpu_img}}" style="width: 190px;height:110px;margin: 0 auto" class="img-responsive" alt="" />
                                    <div class="content_box-grid">
                                        <p class="m_1" style="color: red"><center><b>{{$v->dianpu_name}}</b></center></p>
                                        <p class="m_1" style="display: hidden;"><?php echo mb_substr($v->dianpu_intro,0,17,'utf-8')?></p>
                                        <p class="m_1" style="display: hidden;"><?php echo mb_substr($v->dianpu_adress,0,13,'utf-8')?></p>
                                        <ul class="product_but">
                                            <li class="but3">进店瞧瞧</li>
                                            <li class="like"><span>120</span><i class="like1"> </i></li>
                                            <div class="clearfix"> </div>
                                        </ul>
                                        <div class="mask">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                  </div>
				<ul class="dc_pagination dc_paginationA dc_paginationA06">
			<li>{{ $dianpus->appends(request()->all())->links() }}</li>

		</ul>
	</div>
</div>
</div>
</div>
	<!-- 页脚 -->
	<div class="footer">
		<div class="container">
			<div class="footer-grid footer-grid1">
			  <h3 class="m_2">用戶帮助</h3>
			  <ul class="list1">
			  	<li><a href="/dianpus/liuyan">用户留言</a></li>
			  	<li><a href="/dianpus/fankui">用户反馈</a></li>
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
<!-- 在线客服 -->
<div class="suspension">
	<div class="suspension-box">
		<a href="#" class="a a-service "><i class="i"></i></a>
		<a href="javascript:;" class="a a-service-phone "><i class="i"></i></a>
		<a href="/dianpus/car" class="a a-cart"><i class="i"></i></a>
		<a href="javascript:;" class="a a-top"><i class="i"></i></a>
		<div class="d d-service">
			<i class="arrow"></i>
			<div class="inner-box">
				<div class="d-service-item clearfix">				        	
					<a href="http://wpa.qq.com/msgrd?v=3&uin=1505349007&site=qq&menu=yes" class="clearfix"><span class="circle"><i class="i-qq"></i></span><h3>咨询在线客服</h3></a>
				</div>
			</div>
		</div>
		<div class="d d-service-phone">
			<i class="arrow"></i>
			<div class="inner-box">
				<div class="d-service-item clearfix">
					<span class="circle"><i class="i-tel"></i></span>
					<div class="text">
						<p>服务热线</p>
						<p class="red number">15147805380</p>
					</div>
				</div>
				<div class="d-service-intro clearfix">
					<p><i></i>吃了么24小时为您提供帮助</p>
				</div>
			</div>
		</div>
		<div class="d d-qrcode">
			<i class="arrow"></i>
			<div class="inner-box">
				<div class="qrcode-img"><img src="images/side_ewm.jpg" alt=""></div>
			</div>
		</div>
	</div>
</div>
<!-- 在线客服end -->
</body>
</html>
<script type="text/javascript" src="/home/kefu/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script>
		/**
			1. 页面布局
			2. 定时器
		*/
		var index = -1;
		var timer = null;
		$('#dots li').mouseover(function(){
			//清除定时器
			clearInterval(timer);
			//修改图片的显示的内容
			index  = $(this).index();
			//显示当前索引的图片和点
			show(index);
		}).mouseout(function(){
			// 启动定时器
			autoRun();
		});
		//自动变化
		function autoRun() {
			timer = setInterval(function(){
				index++;
				//显示当前索引对应 图片和点
				show(index);
				//判断
				if(index >= $('#images li').length-1) {
					index = -1;
				}
			}, 3000);
		}
		//显示当前索引对应图片和点
		function show(index) {
			//点样式发生改变
			$('#dots li').removeClass('active');
			$('#dots li').eq(index).addClass('active');
			//切换图片
			//使其他索引的元素隐藏
			$('#images>li').fadeOut();		//siblings	
			//使当前索引的元素显示
			$('#images>li').eq(index).fadeIn();
		}
		autoRun();

	$(document).ready(function(){
	/* ----- 客服侧边悬浮 ---- */
	$(document).on("mouseenter", ".suspension .a", function(){
		var _this = $(this);
		var s = $(".suspension");
		var isService = _this.hasClass("a-service");
		var isServicePhone = _this.hasClass("a-service-phone");
		var isQrcode = _this.hasClass("a-qrcode");
		if(isService){ s.find(".d-service").show().siblings(".d").hide();}
		if(isServicePhone){ s.find(".d-service-phone").show().siblings(".d").hide();}
		if(isQrcode){ s.find(".d-qrcode").show().siblings(".d").hide();}
	});
	$(document).on("mouseleave", ".suspension, .suspension .a-top", function(){
		$(".suspension").find(".d").hide();
	});
	$(document).on("mouseenter", ".suspension .a-top", function(){
		$(".suspension").find(".d").hide(); 
	});
	$(document).on("click", ".suspension .a-top", function(){
		$("html,body").animate({scrollTop: 0});
	});
	$(window).scroll(function(){
		var st = $(document).scrollTop();
		var $top = $(".suspension .a-top");
		if(st > 400){
			$top.css({display: 'block'});
		}else{
			if ($top.is(":visible")) {
				$top.hide();
			}
		}
	});
	
});
</script>

