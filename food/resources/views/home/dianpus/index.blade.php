<!DOCTYPE HTML>
<html>
<head>
<title>吃了么&nbsp; 歡迎您~ </title>
<link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
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
				<li><a href="account.html">我的账户</a></li>
			</ul>
			<ul class="shopping_cart">
			   <a href="#"><li class="shop_left"><i class="cart"> </i><span>购物车</span></li></a>
			   <a href="#"><li class="shop_right"><span>¥0.00</span></li></a>
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
			      	<li class="active"><a href="index.html">首页</a></li>
			        <li><a href="fruits.html">关于我们</a></li>
			        <li><a href="products.html">今日推荐</a></li>
			        <li><a href="store.html">我的订单</a></li>
			        <li><a href="club.html">反馈留言</a></li>
			        <li><a href="contact.html">在线客服</a></li>
		          </ul>
		          <ul class="login">
		          	<a href="/home/login"><li class="login_top"><i class="sign"> </i><span>登录</span></li></a>
		            <a href="/home/zhuce"><li class="login_bottom"><i class="register"> </i><span>注册</span></li></a>
		          </ul>
			      <div class="clearfix"></div>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
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
            <div class="clearfix"></div>
           </div>
            <div class="search">
			  <input type="text" class="text" value="111 Product Details" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '111';}">
			  <input type="submit" value="搜索">
			</div>
		 </div>  
		</div>
	</div>
    <div class="main">
		<div class="container" style="width: 80%">
			<!--图片轮播-->
			<style type="text/css">
		   		#myCarousel{
		   			height: 300px;
		   			margin-top: 10px;
		   			overflow:hidden;
		   		}
		   	</style>
		   <div class="banner">
			 <div id="myCarousel" class="carousel slide">
			    <!-- 轮播（Carousel）指标 -->
			    <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			        <li data-target="#myCarousel" data-slide-to="3"></li>
			        <li data-target="#myCarousel" data-slide-to="4"></li>
			        <li data-target="#myCarousel" data-slide-to="5"></li>
			        <li data-target="#myCarousel" data-slide-to="6"></li>
			    </ol>   
			    <!-- 轮播（Carousel）项目 -->
			    <div class="carousel-inner">
			        <div class="item active">
			            <img src="home/images/f1.jpg" alt="0">
			        </div>
			        <div class="item">
			            <img src="home/images/banner.jpg" alt="1">
			        </div>
			        <div class="item">
			            <img src="home/images/s2.jpg" alt="2">
			        </div>
			        <div class="item">
			            <img src="home/images/f2.jpg" alt="3">
			        </div>
			        <div class="item">
			            <img src="home/images/f3.jpg" alt="4">
			        </div>
			        <div class="item">
			            <img src="home/images/p7.jpg" alt="5">
			        </div>
			        <div class="item">
			            <img src="home/images/p6.jpg" alt="6">
			        </div>
			    </div>
			    <!-- 轮播（Carousel）导航 -->
			    <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
			    <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
			</div>	
		   </div>
		   <!--图片轮播-->
		   <div class="row content">
		   	<div class="col-md-3 content_top">
		   	   	<div class="category_box">
		   	  		<h3 class="cate_head">店铺分类</h3>
		   	     	<ul class="category">
				   	  	<li><a href="#">美食</a></li>
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
		   	   			<li class="review1_img"><img src="/home/images/pic1.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	   	<li>
		   	   		<ul class="review1">
		   	   			<li class="review1_img"><img src="/home/images/pic2.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	   	<li>
		   	   		<ul class="review1">
		   	   			<li class="review1_img"><img src="/home/images/pic3.jpg" class="img-responsive" alt=""/></li>
		   	   			<li class="review1_desc"><h3><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h3><p>Wed, June 2014</p></li>
		   	   			<div class="clearfix"> </div>
		   	   		</ul>
		   	   	</li>
		   	    <div class="but">
			       <a href="#">更多评论<i class="but_arrow"> </i></a>
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
			   	   		<div class="content_box"><a href="/dianpus/xiangqing">
			   	   	  	<div class="view view-fifth">
			   	   	     	<img src="/home/images/p1.jpg" class="img-responsive" alt=""/>
				   	   	<div class="content_box-grid">
				   	   	<p class="m_1">汉堡</p>
				   	   	<div class="price">价格:
						    <span class="actual">¥12.00</span>
						</div>
						<ul class="product_but">
						  	<li class="but3">加入购物车</li>
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
			   	   	     <img src="/home/images/p8.jpg" class="img-responsive" alt=""/>
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
		   <!-- 友情链接 -->
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
		   <!-- 友情链接 -->
		   <div class="clearfix"> </div>
	   </div>
	</div>

</body>
</html>