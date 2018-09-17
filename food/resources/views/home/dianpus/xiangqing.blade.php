<!DOCTYPE HTML>
<html>

<head>
    <title>详情</title>
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
    <link rel="stylesheet" href="/home/css/etalage.css">
    <script src="/home/js/jquery.etalage.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            show_hint: true,
            click_callback: function(image_anchor, instance_id) {
                alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });
        $('.dropdownlist').change(function() {
            etalage_show($(this).find('option:selected').attr('class'));
        });

    });
    </script>
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
			   <a href="#"><li class="shop_right"><span>$0.00</span></li></a>
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
                                    <li><a href="/dianpus">首页</a></li>
                                    <li><a href="/dianpus/order">我的订单</a></li>
                                    <li><a href="/dianpus/guize">规则中心</a></li>
                                    <li><a href="#">用户反馈</a></li>
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
    <div class="main">
        <div class="container">
            <div class="single">
                <div class="row content">
                    <div class="col-md-3">
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
                                    <li class="review1_img"><img src="/home/images/f3.jpg" class="img-responsive" alt="" /></li>
                                    <li class="review1_desc">
                                        <h3><a href="#">aaaaaa</a></h3>
                                        <p>Wed, June 2014</p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </li>
                            <li>
                                <ul class="review1">
                                    <li class="review1_img"><img src="/home/images/l4.jpg" class="img-responsive" alt="" /></li>
                                    <li class="review1_desc">
                                        <h3><a href="#">bbbbbb</a></h3>
                                        <p>Wed, June 2014</p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </li>
                            <li>
                                <ul class="review1">
                                    <li class="review1_img"><img src="/home/images/p3.jpg" class="img-responsive" alt="" /></li>
                                    <li class="review1_desc">
                                        <h3><a href="#">cccccc</a></h3>
                                        <p>Wed, June 2014</p>
                                    </li>
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
                            <a href=""><img src="/home/images/3.png" style="width:50px;height:50px;"/></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="single_image">
                            <ul id="etalage">
                                <li>
                                    <a href="optionallink.html">
									<img class="etalage_thumb_image" src="/home/images/p1.jpg" class="img-responsive" alt=""/>
									<img class="etalage_source_image"  src="/home/images/p1.jpg" class="img-responsive" alt=""/>
								</a>
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/p2.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/p2.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/s3.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/s3.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/p3.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/p3.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/p4.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/p4.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/p5.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/p5.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="/home/images/p6.jpg" class="img-responsive" alt="" />
                                    <img class="etalage_source_image" src="/home/images/p6.jpg" class="img-responsive" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="single_right">
                            <h3>产品介绍</h3>
                            <p class="m_5">em vel eum iriure dolor in hendrerit in vulputate velit esse</p>
                            <div class="price_single">
                                <span class="reducedfrom">¥66.00</span>
                                <span class="actual1">¥12.00</span>
                            </div>
                            <div style="width: 50"></div>
                            <div class="btn_form">
                                <form type="post" action="/dianpu/xiangqing">
                                    <input type="submit" value="立即购买" title="">
                                </form>
                            </div>
                            <ul class="add-to-links">
                                <li><img src="/home/images/wish.png" alt=""><a href="#">加入收藏</a></li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <h3 class="m_2">分享</h3>
                            <ul class="footer_social">
                                <li><a href="https://connect.qq.com/widget/shareqq/index.html?url=http"><img src="/home/images/QQ.png"/></a></li>
                                <li><a href="https://www.douban.com/share/service?href=http"><img src="/home/images/douban.png"/></a></li>
                                <li><a href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey"><img src="/home/images/qqkj.png"/></a></li>
                                <li><a href="http://service.weibo.com/share/share.php"><img src="/home/images/weibo.png"/></a></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="product-reviwes">
                            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default',
                                    width: 'auto',
                                    fit: true,
                                    closed: 'accordion',
                                    activate: function(event) {
                                        var $tab = $(this);
                                        var $info = $('#tabInfo');
                                        var $name = $('span', $info);
                                        $name.text($tab.text());
                                        $info.show();
                                    }
                                });
                                $('#verticalTab').easyResponsiveTabs({
                                    type: 'vertical',
                                    width: 'auto',
                                    fit: true
                                });
                            });
                            </script>
                        </div>
                        <div class="related_products">
                            <h3>店主推荐</h3>
                            <div class="row">
                                <div class="col-md-4 related">
                                    <img src="/home/images/p6.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="col-md-4 related">
                                    <img src="/home/images/p7.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="col-md-4 related">
                                    <img src="/home/images/p5.jpg" class="img-responsive" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <li><a href=""> <i class="tw"> </i> </a></li>
                    <li><a href=""><i class="fb"> </i> </a></li>
                    <li><a href=""><i class="rss"> </i> </a></li>
                    <li><a href=""><i class="msg"> </i> </a></li>
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