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
				<li class="phone_right"> 50元以上餐品将免费为您配送!</li>
				<div class="clearfix"></div>
			</ul>
			<ul class="social">
				 <h1 style="font-family:'华文彩云';color:#aaa;font-size:40px;">吃了么</h1>
			</ul>
			<ul class="account">
			@if(Session::has('id') == null)				
			@endif
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
			        <li><a href="contact.html">我的客服</a></li>
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
				   	  	<li><a href="#">快餐便当</a></li>
				   	  	<li><a href="#">特色菜系</a></li>
				   	  	<li><a href="#">异国料理</a></li>
				   	  	<li><a href="#">小吃夜宵</a></li>
				   	  	<li><a href="#">甜品饮品</a></li>
				   	  	<li><a href="#">果蔬生鲜</a></li>
				   	  	<li><a href="#">商店超市</a></li>
				   	  	<li><a href="#">早餐</a></li>
				   	  	<li><a href="#">午餐</a></li>
				   	  	<li><a href="#">下午茶</a></li>
				   	  	<li><a href="#">晚餐</a></li>
				   	  	<li><a href="#">夜宵</a></li>
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
		   	   	<ul class="feature_grid">
				 	<li class="grid1"><img src="/home/images/f1.jpg" class="img-responsive" alt=""/>
				 	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
				 	<div class="price">Price:
					  	<span class="actual">$12.00</span>
					</div>
				    <div class="but1">
			          	<a href="">立即购买</a>
			        </div>
				 	</li>		   	   	
				 	<li class="grid1"><img src="/home/images/f2.jpg" class="img-responsive" alt=""/>
				 	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
				 	<div class="price">Price:
					  	<span class="actual">$12.00</span>
					</div>
				    <div class="but1">
			          	<a href="#">立即购买</a>
			        </div>
				 	</li>		   	
				 	<li class="grid2"><img src="/home/images/f3.jpg" class="img-responsive" alt=""/>
				 	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
				 	<div class="price">Price:
					  	<span class="actual">$12.00</span>
					</div>
				    <div class="but1">
			          	<a href="#">立即购买</a>
			        </div>
				 	</li>		   	
				 	<div class="clearfix"> </div>
		   	   	</ul>
		   	    <ul class="feature">
		   	   	 	<h3><i class="arrow"> </i><span>热门商铺</span></h3>
		   	   	</ul>
		   	   	<div class="row content_bottom">
		   	   		

			   	   	<div class="col-md-3">
			   	   		<div class="content_box"><a href="/dianpus/cai">
			   	   	  	<div class="view view-fifth">
			   	   	     	<img src="/home/images/p1.jpg" class="img-responsive" alt=""/>
				   	   	<div class="content_box-grid">
				   	   	<p class="m_1">汉堡</p>
				   	   	<div class="price">价格:
						    <span class="actual">¥12.00</span>
						</div>
						<ul class="product_but">
						  	<li class="but3">进店瞧瞧</li>
						  	<li class="like"><span>120</span><i class="like1"> </i></li>
						<div class="clearfix"> </div>
						</ul>
						<div class="mask">
	                    <div class="info">Quick View</div>
			        </div>
			    </div>
			</div>
		</a>
	</div>
</div>
	<div class="col-md-3">
		<div class="content_box"><a href="/dianpus/xiangqing">
			<div class="view view-fifth">
			   	<img src="/home/images/p4.jpg" class="img-responsive" alt=""/>
				<div class="content_box-grid">
				<p class="m_1"> elit</p>
				<div class="price">Price:
					<span class="actual">$12.00</span>
				</div>
				<ul class="product_but">
					<li class="but3">Buy</li>
					<li class="like"><span>120</span><i class="like1"> </i></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="mask">
		        <div class="info">Quick View</div>
				</div>
				</div>
			</div>
		</a>
	</div>
</div>
	<div class="col-md-3">
		<div class="content_box"><a href="/dianpus/xiangqing">
			<div class="view view-fifth">
			   	<img src="/home/images/p3.jpg" class="img-responsive" alt=""/>
				<div class="content_box-grid">
					<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
					<div class="price">Price:
						<span class="actual">$12.00</span>
					</div>
					<ul class="product_but">
						<li class="but3">Buy</li>
						<li class="like"><span>120</span><i class="like1"> </i></li>
					<div class="clearfix"> </div>
					</ul>
					<div class="mask">
			        <div class="info">Quick View</div>
					</div>
				</div>
			</div>
		</a>
		</div>
	</div>
	<div class="col-md-3">
		<div class="content_box"><a href="/dianpus/xiangqing">
		<div class="view view-fifth">
			<img src="/home/images/p2.jpg" class="img-responsive" alt=""/>
				<div class="content_box-grid">
					<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
						<div class="price">Price:
							<span class="actual">$12.00</span>
						</div>
							<ul class="product_but">
							  	<li class="but3">Buy</li>
							  	<li class="like"><span>120</span><i class="like1"> </i></li>
						  	<div class="clearfix"> </div>
						    </ul>
						    <div class="mask">
			                    <div class="info">Quick View</div>
			            </div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
	<div class="row content_bottom1">
		<div class="col-md-3">
			<div class="content_box"><a href="/dianpus/xiangqing">
			   	<div class="view view-fifth">
			   	   	<img src="/home/images/s3.jpg" class="img-responsive" alt=""/>
				   	<div class="content_box-grid">
				   	<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				   	<div class="price">Price:
					<span class="actual">$12.00</span>
					</div>
					<ul class="product_but">
					<li class="but3">Buy</li>
					<li class="like"><span>120</span><i class="like1"> </i></li>
					<div class="clearfix"> </div>
					</ul>
					<div class="mask">
	                <div class="info">Quick View</div>
			        </div>
			    </div>
			</div>
		</a>
	</div>
</div>
	<div class="col-md-3">
		<div class="content_box"><a href="/dianpus/xiangqing">
			<div class="view view-fifth">
			   	<img src="/home/images/p7.jpg" class="img-responsive" alt=""/>
				   	<div class="content_box-grid">
				   	   	<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				   	   	<div class="price">Price:
						<span class="actual">$12.00</span>
						</div>
						<ul class="product_but">
						<li class="but3">Buy</li>
						<li class="like"><span>120</span><i class="like1"> </i></li>
						<div class="clearfix"> </div>
						</ul>
						<div class="mask">
	                    <div class="info">Quick View</div>
			         	</div>
			        </div>
				</div>
			</a>
		</div>
	</div>
		<div class="col-md-3">
			<div class="content_box"><a href="/dianpus/xiangqing">
			   	<div class="view view-fifth">
			   	   	<img src="/home/images/p6.jpg" class="img-responsive" alt=""/>
				   	<div class="content_box-grid">
				   	   	<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				   	   	<div class="price">Price:
						<span class="actual">$12.00</span>
						</div>
						<ul class="product_but">
						<li class="but3">Buy</li>
						<li class="like"><span>120</span><i class="like1"> </i></li>
						<div class="clearfix"> </div>
						</ul>
						<div class="mask">
	                    <div class="info">Quick View</div>
			            </div>
			        </div>
				</div>
			</a>
		</div>
	</div>
		<div class="col-md-3">
			<div class="content_box"><a href="/dianpus/xiangqing">
			   	<div class="view view-fifth">
			   	   	<img src="/home/images/p5.jpg" class="img-responsive" alt=""/>
				   	   	<div class="content_box-grid">
				   	   	<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				   	   	<div class="price">Price:
						<span class="actual">$12.00</span>
						</div>
						<ul class="product_but">
						<li class="but3">Buy</li>
						<li class="like"><span>120</span><i class="like1"> </i></li>
						<div class="clearfix"> </div>
						</ul>
						<div class="mask">
	                    <div class="info">Quick View</div>
			            </div>
			         	</div>
				   	</div>
			   	</a>
			</div>
		</div>
	</div>
		<ul class="dc_pagination dc_paginationA dc_paginationA06">
			<li><a href="#">1</a></li>
			<li><a href="#" class="current">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">19</a></li>
			<li><a href="#">20</a></li>
			<li><a href="#" class="previous">下一页</a></li>
			<li><a href="#" class="next">上一页</a></li>
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
		   <!-- 友情链接 -->
		   <div class="footer-grid footer-grid_last">
		   	@foreach($links as $v)
	          <ul class="secure">
			  	<li class="secure_img">
			  		<a href="{{$v['link_url']}}">
			  			<img src="{{$v['link_img']}}" alt="" width="50"/></a></li> 
			  	<li class="secure_desc">{{$v['link_name']}}</li>
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
</script>

