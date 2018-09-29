<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么-小店美食</title>
    <link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.min.js"></script>
    <link href="/home/css/style.css" rel='stylesheet' type='text/css' />
    <!-- 评论JS CS 引入 -->
    <link rel="stylesheet" type="text/css" href="/pingluns/css/show.css">
    <script type="text/javascript" src="/pingluns/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/pingluns/js/qna.js"></script>
    <script type="text/javascript" src="/pingluns/js/pager.js"></script>
    <!-- 结束 -->
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    </script>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/home/kefu/css/style.css">
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
                    @if(Session::has('id') == null) @endif @if(Session::has('id') != null)
                    <li style="color:#aaa;font-size:16px;">
                        <a href="/person">个人中心</a>&nbsp;|
                        <a href="#">用户:{{$users['user_name']}}</a> &nbsp; <img src="{{$users['user_img']}}" width="30px" height="30px" />
                    </li>
                    @endif
                </ul>
                <ul class="shopping_cart">
                    <a href="/dianpus/car">
                        <li class="shop_left"><i class="cart"> </i><span>购物车</span></li>
                    </a>
                    <a href="#">
                        <li class="shop_right"><span>$0.00</span></li>
                    </a>
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
			        <span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav menu1">
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a href="/dianpus?cate_id=1">首页</a></li>
                    <li><a href="/dianpus/order">我的订单</a></li>
                    <li><a href="/dianpus/guize">规则中心</a></li>
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
        <div class="container" style="width: 95%">
            <div class="col-md-3 content_top">
                <ul class="product_reviews">
                </ul>               
                </div>
            <div class="row content">

                <div class="col-md-2 content_top">
                </div>
                <div class="col-md-8">
                    </ul>
                    <br>
                    <ul class="feature">
                    <h3><i class="arrow"> </i><span>热菜</span></h3>
                    </ul>
                    <div class="row content_bottom">
                        @foreach($foods as $v)
                        <form action="/dianpus/car/{{$v['id']}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
                        <div class="col-md-3">
                            <div class="content_box">
                                <div class="view view-fifth">
                                    <img name="shoping_img" src="{{$v['food1_img']}}" class="img-responsive" alt="" style="width: 170px;height: 100px;" />
                                    <div class="content_box-grid">
                                        <p class="m_1" name="shoping_name">{{$v['food1_name']}}</p>
                                        <div class="price">价格:
                                            <span class="actual" name="shoping_price">¥{{$v['food1_price']}}</span>
                                        </div> <a href="/dianpus/car?food1_id={{$v['id']}}">
                                        <ul class="product_but">
                                            {{csrf_field()}}
                                            <a href="/addshopcar?food1_id={{$v['id']}}"><li class="but3">加入购物车</li></a>
                                            <li class="like"><span>120</span><i class="like1"> </i></li>
                                            <div class="clearfix"> </div>
                                        </ul></a>
                                        <div class="mask">
                                            <div class="info">Quick View</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        @endforeach
                    </div>
                   <!-- 评论开始 -->
                   @if(Session::has('id') == null) @endif @if(Session::has('id') != null)
                    <div class="mainContainner">

                        <div class="commentBox" name="one">
                                <div class="Ctop">
                                    <label class="Ctitle"><img src="/pingluns/img/user_comment.png">我来说两句</label>
                                    <label class="Ctip">已有<span class="Ccount" id="Ccount"></span>条评论</label>
                                </div>
                                <div class="Cattitude">
                                    <form>
                                        <label>我的态度：</label>
                                        <input type="radio" name="attitude"value='1' checked="checked"><img src="/pingluns/img/zheng.png"></input>
                                        <input type="radio" name="attitude"value='-1'><img src="/pingluns/img/fan.png"></input>
                                        <input type="radio" name="attitude"value='0'><img src="/pingluns/img/zhong.png"></input>
                                    </form>
                                </div>
                                <div class="Cinput">
                                    <textarea placeholder="请输入评论内容" class="Ccont" id="Ccont"></textarea>
                                </div>
                                <div class="Csunbmit">
                                    <label class="Cnick" >你的昵称：</label>
                                    <input class="Cusername" value="{{$users['user_name']}}" id="Cusername" ></input>
                                    <button class="submitBtn" onclick="submit_pl(0)">发布评论</button>
                                </div>

                        </div>
                    @endif
                        <div class="Corder">
                            <button id="newBtn" onclick="start(0)">最新</button>
                            <button id="hotBtn" onclick="start(1)">最热</button>
                        </div>
                        <div class="CommentList">
                            <ul class="listul">
                            </ul>
                        </div>
                        <div class="fydiv">
                            <ul class="fenye">
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                    start(0)
                    </script>
                    <!-- 评论结束 -->
                </div>
            </div>
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
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=35788153&site=qq&menu=yes" class="clearfix"><span class="circle"><i class="i-qq"></i></span><h3>咨询在线客服</h3></a>
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
<script type="text/javascript">
$(document).ready(function(){

    /* ----- 侧边悬浮 ---- */
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