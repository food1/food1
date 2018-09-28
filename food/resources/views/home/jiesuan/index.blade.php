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
<!-- 分享 -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/css/share.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/js/social-share.min.js"></script>
<!-- 分享 -->  
<!-- 结算 -->
<link href="/home/jiesuan/css/public.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="/home/jiesuan/css/base.css"/>
<script type="text/javascript" src="/home/jiesuan/js/jquery_cart.js"></script>  
<link rel="stylesheet" type="text/css" href="/home/jiesuan/css/checkOut.css" />
<!-- 结算 -->
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
			   <a href="#"><li class="shop_left"><i class="cart"></i><span>购物车</span></li></a>
			   <a href="#"><li class="shop_right"><span></span></li></a>
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
				      	<li><a></a></li>
				      	<li><a></a></li>
				      	<li><a></a></li>
				      	<li><a href="/dianpus?cate_id=1">首页</a></li>
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
			  		<input type="text" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
			  		<input type="submit" value="搜索">
				</div>
		 	</div>  
		</div>
	</div>
    <!--收货地址body部分开始-->  
 <div class="border_top_cart">
  <script type="text/javascript">
    var checkoutConfig={
        addressMatch:'common',
        addressMatchVarName:'data',
        hasPresales:false,
        hasBigTv:false,
        hasAir:false,
        hasScales:false,
        hasGiftcard:false,
        totalPrice:244.00,
        postage:10,//运费
        postFree:true,//活动是否免邮了
        bcPrice:150,//计算界值
        activityDiscountMoney:0.00,//活动优惠
        showCouponBox:0,
        invoice:{
            NA:"0",
            personal:"1",
            company:"2",
            electronic:"4"
        }
    };
    var miniCartDisable=true;
</script>
<div class="container">
    <div class="checkout-box">
        <form  id="checkoutForm" action="#" method="post">
            <div class="checkout-box-bd">
                    <!-- 地址状态 0：默认选择；1：新增地址；2：修改地址 -->
                <input type="hidden" name="Checkout[addressState]" id="addrState"   value="0">
                <!-- 收货地址 -->
                <div class="xm-box">
                    <div class="box-hd ">
    <h2 class="title">收货地址</h2>
    <!---->
</div>
<div class="box-bd">
   
    <div class="clearfix xm-address-list" id="checkoutAddrList"> 
        <dl class="item" >
            
            <dt>
                <strong class="itemConsignee">收货人：{{$users['user_name']}}</strong>
            </dt>
            <dd>
                <p class="tel itemTel">联系电话：{{$users['user_phone']}}</p>
                <p class="itemRegion">地址：{{$users['user_adress']}}</p>
            </dd>
        </dl>  
    </div>
</div>

    <div class="xm-edit-addr-backdrop" id="J_editAddrBackdrop"></div>
</div>                  
</div>
                <!-- 收货地址 END-->
                <div id="checkoutPayment">
                    <!-- 支付方式 -->
                    <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">支付方式</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList">
                        <li class="item selected">
                            <input type="radio" name="Checkout[pay_id]" checked="checked" value="1">
                            <p>
                                在线支付                                
                                <span></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 支付方式 END-->
            <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">配送方式</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutShipmentList" class="checkout-option-list clearfix J_optionList">
                        <li class="item selected">
                            <input type="radio" data-price="0" name="Checkout[shipment_id]" checked="checked" value="1">
                            <p>
                                快递配送（免运费）                       
                                <span></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 配送方式 END-->                    <!-- 配送方式 END-->
                </div>
                <!-- 送货时间 -->
                <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">送货时间</h2>
                    </div>
                    <div class="box-bd">
                        <ul class="checkout-option-list clearfix J_optionList">
                            <li class="item selected"><input type="radio" checked="checked" name="Checkout[best_time]" value="1"><p>不限送货时间<span>周一至周日</span></p></li><li class="item "><input type="radio"  name="Checkout[best_time]" value="2"><p>工作日送货<span>周一至周五</span></p></li><li class="item "><input type="radio"  name="Checkout[best_time]" value="3"><p>双休日、假日送货<span>周六至周日</span></p></li>                        </ul>
                    </div>
                </div>
                <!-- 送货时间 END-->
                <!-- 发票信息 -->
                <div id="checkoutInvoice">
                    <div class="xm-box">
    <div class="box-hd">
        <h2 class="title">发票信息</h2>
    </div>
    <div class="box-bd">
        <ul class="checkout-option-list checkout-option-invoice clearfix J_optionList J_optionInvoice">
             <li class="hide">
                                 电子个人发票4  
             </li>
                        <li class="item selected">
                <!--<label><input type="radio"  class="needInvoice" value="0" name="Checkout[invoice]">不开发票</label>-->
                <input type="radio"    checked="checked"  value="4" name="Checkout[invoice]">
                <p>电子发票（非纸质）</p>
            </li>
                        <li class="item ">
                <input type="radio"   value="1" name="Checkout[invoice]">
                <p>普通发票（纸质）</p>
            </li>
        </ul>
                <p id="eInvoiceTip" class="e-invoice-tip ">
            电子发票是税务局认可的有效凭证，可作为售后维权凭据，不随商品寄送。开票后不可更换纸质发票，如需报销请选择普通发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a>
        </p>
        <div class="invoice-info nvoice-info-1" id="checkoutInvoiceElectronic" style="display:none;">
            <p class="tip">电子发票目前仅对个人用户开具，不可用于单位报销 ，不随商品寄送</p>
            <p>发票内容：购买商品明细</p>
            <p>发票抬头：个人</p>
            <p>
                <span class="hide"><input type="radio" value="4" name="Checkout[invoice_type]"   checked="checked"   id="electronicPersonal" class="invoiceType"></span>
                <dl>
                    <dt>什么是电子发票?</dt>
                    <dd>&#903; 电子发票是纸质发票的映像，是税务局认可的有效凭证，与传统纸质发票具有同等法律效力，可作为售后维权凭据。</dd>
                    <dd>&#903; 开具电子服务于个人，开票后不可更换纸质发票，不可用于单位报销。</dd>
                    <dd>&#903; 您在订单详情的"发票信息"栏可查看、下载您的电子发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a></dd>
                </dl>
            </p>
        </div>
                <div class="invoice-info invoice-info-2" id="checkoutInvoiceDetail"  style="display:none;" >
            <p>发票内容：购买商品明细</p>
            <p>
                发票抬头：请确认单位名称正确,以免因名称错误耽搁您的报销。注：合约机话费仅能开个人发票
            </p>
            <ul class="type clearfix J_invoiceType">
                <li class="hide">
                    <input type="radio" value="0" name="Checkout[invoice_type]" id="noNeedInvoice" > 
                </li>
                <li class="">
                    <input  class="invoiceType" type="radio" id="commonPersonal" name="Checkout[invoice_type]" value="1" >
                    个人
                </li>
                <li class="">
                     <input  class="invoiceType" type="radio" name="Checkout[invoice_type]" value="2" >
                     单位
                </li>
            </ul>
            <div  id='CheckoutInvoiceTitle' class=" hide  invoice-title">
                <label for="Checkout[invoice_title]">单位名称：</label>
                <input name="Checkout[invoice_title]" type="text" maxlength="49" value="" class="input"> <span class="tip-msg J_tipMsg"></span>
            </div>
        </div>
    </div>
</div> 
</div>            <!-- 发票信息 END-->
</div>
            <div class="checkout-box-ft">
                 <!-- 商品清单 -->
                <div id="checkoutGoodsList" class="checkout-goods-box">
                <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">确认订单信息</h2>
                    </div>
                    
                    </div>
                        <div class="checkout-count clearfix">
                            <div class="checkout-count-extend xm-add-buy">
                                <h3 class="title">会员留言</h2></br>
                                <input type="text" />
                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>
                                    <li>
                                       订单总额：<span>{{$price}}元</span>
                                    </li>
                                    <li>
                                        活动优惠：<span>-0元</span>
                                        <script type="text/javascript">
                                            checkoutConfig.activityDiscountMoney=0;
                                            checkoutConfig.totalPrice={{$price}};
                                        </script>
                                    </li>
                                    <li>
                                        优惠券抵扣：<span id="couponDesc">-0元</span>
                                    </li>
                                    <li>
                                        运费：<span id="postageDesc">0元</span>
                                    </li>
                                </ul>
                                
                                <p class="checkout-total">应付总额：<span><strong id="totalPrice"></strong>元</span></p>
                               
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
    <!--S 加价购 产品选择弹框 -->
                <div class="modal hide modal-choose-pro" id="J_choosePro-664">
                <div class="modal-header">
                    <span class="close" data-dismiss='modal'><i class="iconfont">&#xe617;</i></span>
                    <h3>选择产品</h3>
                    <div class="more">
                        <div class="xm-recommend-page clearfix">
                            <a class="page-btn-prev   J_carouselPrev iconfont" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next  J_carouselNext iconfont" href="javascript: void(0);">&#xe605;</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body J_chooseProCarousel">
                    <div class="J_carouselWrap modal-choose-pro-list-wrap">
                        <ul class="clearfix J_carouselList">
                                                    </ul>
                    </div>
                </div>
               
            </div>
                <!--E 加价购 产品选择弹框 -->
    
    <!--S 保障计划 产品选择弹框 -->
                </div>
                <!-- 商品清单 END -->
                <input type="hidden"  id="couponType" name="Checkout[couponsType]">
                <input type="hidden" id="couponValue" name="Checkout[couponsValue]">
                <div class="checkout-confirm">
                    
                     <a href="/dianpus/car" class="btn btn-lineDakeLight btn-back-cart">返回购物车</a>
                     <a href="/jiesuan/tijiao"><input type="" class="btn btn-primary" value="立即支付" id="checkoutToPay" /></a>
                </div>
            </div>
        </div>

    </form>

</div>
<!-- 禮品卡提示 S-->
    <div class="modal hide lipin-modal" id="lipinTip">
        <div class="modal-header">
            <h2 class="title">温馨提示</h2>
            <p> 为保障您的利益与安全，下单后礼品卡将会被使用，<br>
 且订单信息将不可修改。请确认收货信息：</p>
        </div>
        <div class="modal-body">
            <ul>
                <li><strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong><span id="lipin-uname"></span></li>
                <li><strong>联系电话：</strong><span id="lipin-uphone"></span></li>
                <li><strong>收货地址：</strong><span id="lipin-uaddr"></span></li>
            </ul>
        </div>
        <div class="modal-footer">
            <span class="btn btn-primary" id="useGiftCard">确认下单</span><span class="btn btn-dakeLight" id="closeGiftCard">返回修改</span>
        </div>
    </div>
<!--  禮品卡提示 E-->
<!-- 预售提示 S-->
    <div class="modal hide yushou-modal" id="yushouTip">
        <div class="modal-body">
            <h2>请确认收货地址及发货时间</h2>
            <ul class="list">
                <li>
                    <strong>请确认配送地址，提交后不可变更：</strong>
                    <p id="yushouAddr"> </p>
                    <span class="icon-common icon-1"></span>
                </li>
                <li>
                    <strong>支付后发货</strong>
                    <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                    <span class="icon-common icon-2"></span>
                </li>
                <li>
                    <strong>以支付价格为准</strong>
                    <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                    <span class="icon-common icon-3"></span>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
                <p id="yushouOk" class="yushou-ok">
                    <span class="icon-checkbox"><i class="iconfont">&#xe626;</i></span>
                    我已确认收货地址正确，不再变更</p>
                <span class="btn btn-lineDakeLight" data-dismiss="modal">返回修改地址</span>    
                <span class="btn btn-primary" id="yushouCheckout">继续下单</span>
                
            </div>
    </div>
<!--  预售提示 E-->
    <script src="/home/jiesuan/js/base.min.js"></script>

        <script type="text/javascript" src="/home/jiesuan/js/address_all.js"></script>
<script type="text/javascript" src="/home/jiesuan/js/checkout.min.js"></script> 
</div>
 
 <!--收货地址body部分结束-->
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
				<div class="newsview" style="padding:20px;float:right">
                    <div class="share-component" data-disabled="google,twitter,facebook" data-description=""></div>
                </div>
				 <div class="clearfix"> </div>
			   </ul>
			   <h3 class="m_3">订阅</h3>
			   <div class="footer_search">
			    <input type="text" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
			    <input type="submit" value="搜索">
			   </div>
		   </div>
		   
		   <div class="clearfix"> </div>
	   </div>
	</div>
</body>
</html>

