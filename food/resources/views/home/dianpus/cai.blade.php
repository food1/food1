<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么-小店美食</title>
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
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
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
                                    <li><a href="/dianpus">首页</a></li>
                                    <li><a href="/dianpus/order">我的订单</a></li>
                                    <li><a href="/dianpus/guize">规则中心</a></li>
                                    <li><a href="contact.html">我的客服</a></li>
                                </ul>
                                <ul class="login">
                                    @if(Session::has('id') == null)
                                    <a href="/home/login">
                                        <li class="login_top"><i class="sign"> </i><span>登录</span></li>
                                    </a>
                                    <a href="/home/zhuce">
                                        <li class="login_bottom"><i class="register"> </i><span>注册</span></li>
                                    </a>
                                    @endif @if(Session::has('id') != null)
                                    <a href="/home/logout">
                                        <li class="login_top"><i class="sign"> </i><span>退出登录</span></li>
                                    </a>
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
        <div class="container" style="width: 80%">
            <div class="row content">
                <div class="col-md-2 content_top">
                </div>
                <div class="col-md-8">
                    </ul>
                    <ul class="feature">
                        <h3><i class="arrow"> </i><span>热菜</span></h3>
                    </ul>
                    <div class="row content_bottom">
                        @foreach($food1s as $v)
                        <div class="col-md-3">
                            <div class="content_box">
                                <a href="/dianpus/xiangqing">
                                    <div class="view view-fifth">
                                        <img src="{{$v['food1_img']}}" class="img-responsive" alt="" />
                                        <div class="content_box-grid">
                                            <p class="m_1">{{$v['food1_name']}}</p>
                                            <div class="price">价格:
                                                <span class="actual">¥{{$v['food1_price']}}</span>
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
                         @endforeach
                    </div>
                  
                    <div class="row content_bottom1"></div>
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
                    <input type="text" class="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value="搜索">
                </div>
            </div>
            <!-- 友情链接 -->
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
            <div class="clearfix"> </div>
        </div>
    </div>
</body>

</html>