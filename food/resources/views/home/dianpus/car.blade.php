<!DOCTYPE HTML>
<html>
<head>
<title>吃了么-购物车</title>
<link rel="stylesheet" href="/home/car/css/reset.css">
<link rel="stylesheet" href="/home/car/css/carts.css">
<link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/bootstrap.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/home/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
 <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="/home/css/etalage.css">
					<script src="/home/js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});
					});
				</script>
				<!----//details-product-slider--->	
				<style type="text/css">
					#che{
						width: 45px;
						height: 23px;
					}
				</style>
</head>
<body>
	<?php 
	use App\User;
	$uid= \Session::get('id');
	$users = User::find($uid);
	?>
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
			   <a href="#"><li class="shop_left"><i class="cart"> </i><span>购物车</span></li></a>
			   <a href="#"><li class="shop_right"></li></a>
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
			        	<span class="sr-only"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        </button>
			    </div>
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
			</div>
		</div>
	</nav>
        <div class="clearfix"></div>
           	</div>
            	<div class="search">
			  		<input type="text" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
			  		<input type="submit" value="搜索">
				</div>
		 	</div>  
		</div>
	</div>
   <!-- 购物车 -->
   <section class="cartMain">
	<div class="cartMain_hd">
		<ul class="order_lists cartTop">
			<li class="list_chk">
				<!--所有商品全选-->
				<input type="checkbox" id="all" class="whole_check">
				<label for="all"></label>
				全选
			</li>
			<li class="list_con">餐品信息</li>
			<li class="list_price">单价</li>
			<li class="list_amount">数量</li>
			<li class="list_sum">金额</li>
			<li class="list_op">操作</li>
			<li onclick="history.go(-1)">返回</li>
		</ul>
		<?php $i = 1;?>
	</div>
	<div class="cartBox">
		<form action="/jiesuan" method="post" class="form">
	@foreach($food1s as $v)
	<?php $i++ ?>
		<div class="order_content">
			<ul class="order_lists">
				<li class="list_chk">
					<input type="checkbox" id="{{$i}}" class="son_check">
					<label for="{{$i}}" class="ggg"></label>
				</li>
				<li class="list_con">
					<div class="list_img"><a href="javascript:;"><input type="hidden" value="{{$v['id']}}" name="shopcar_id">
						
						<input type="hidden" name="food1_img" value="{{$v->food1['food1_img']}}" style="width: 50px;border:none;" readonly><img src="{{$v->food1['food1_img']}}" alt=""></a></div>
					<div class="list_text"><a href="javascript:;">
					<div class="list_text">
						<input type="" name="food1_name" value="{{$v->food1['food1_name']}}" style="border:none;" readonly>
					</div></a></div>
				</li>
				
				<li class="list_price">
					<p class="price" name="food1_price">
						{{$v->food1['food1_price']}}
					</p>
					<input type="hidden" name="price" value="{{$v->food1['food1_price']}}">
				</li>
				<li class="list_amount">
					<div class="amount_box">
						<a href="javascript:;" class="reduce reSty">-</a>
						<input type="text" value="{{$v->shuliang}}" name="shuliang[]" class="sum"  id="che">
						<a href="javascript:;" class="plus">+</a>
					</div>
				</li>
				<li class="list_sum">
					<p class="sum_price" value="">￥{{$v->food1['food1_price']*$v->shuliang}}</p>
				</li>

				</form>
				<li class="list_op">
            		{{csrf_field()}}

					<p class="del"><a href="/destroy?food1_id={{$v->id}}" >移除商品</a></p>
				</li>
			</ul>		
		</div>
		@endforeach
	</div>
	<script>
		//alert($);
		$('.aaa').click(function(){
			var a = $('.ggg').attr('id','abc');
			$(this).siblings.removeAttr('abc');
			console.log(a);
		});	
	</script>
	<!--底部-->
	<div class="bar-wrapper">
		
		<div class="bar-right">
			<div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
			<div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
			<div class="calBtn"><a href="javascript:;" class="tijiao">结算</a></div>
		</div>
	</div> 
</section>
<section class="model_bg"></section>

<script src="/home/car/js/jquery.min.js"></script>
<script src="/home/car/js/carts.js"></script>

<script type="text/javascript">
	$('.tijiao').click(function(){
		$('.form').submit();
	})
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';"> 
</div>
   <!-- 购物车 -->
  
</body>
</html>

