<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么登录页面 </title>
    <link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.min.js"></script>
    <!-- 反馈 -->
    <script src="/Bjs/jquery-1.7.2.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="/Acss/style.css">
    <!-- end -->
    <link href="/home/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
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
                <ul class="phone">
                    <li class="phone_right">吃了么24小时竭诚为您服务!</li>
                    <div class="clearfix"></div>
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
                </div>
            </div>
        </div>
        <div class="search">
            <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
            <input type="submit" value="搜索">
        </div>
    </div>
    </div>
    </div>
    <!-- 闪存 -->
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
                        <!-- 闪存 -->
    <div class="main">
        <div class="container">
            <div class="Product_top">
                <div class="row content">
                    <div class="user_mesg">

                        <form action="/fankui" method="post" id="msgform" class="fl">
                            <div class="quick_liuyan_con">
                                <div class="item" style="display: none;">
                                    <span><b class="star">*</b>用户ID</span>
                                    <div class="item-right">
                                        <input type="text" class="v-ipt" value="{{$users['id']}}" name="user_id" placeholder="姓名">
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="item">
                                    <span><b class="star">*</b>姓名</span>
                                    <div class="item-right">
                                        <input type="text" class="v-ipt" value="" name="fankui_name" placeholder="姓名">
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="item">
                                    <span><b class="star">*</b>电话</span>
                                    <div class="item-right">
                                        <input type="text" value="{{$users['user_phone']}}" name="fankui_phone" maxlength="11" placeholder="请输入手机号">
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="item">
                                    <span>QQ/Email</span>
                                    <div class="item-right">
                                        <input type="text" value="" name="email" id="email">
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="item">
                                    <span>留言</span>
                                    <div class="item-right">
                                        <textarea name="content" id="Message" class="Message" cols="30" rows="10"></textarea>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="item">
                                    <input name="url" value="" id='burl' type="hidden">
                                     {{csrf_field()}}
                                    <input type="submit" class="btn-mesSubmit" id="imgBtnUp1" value="提交留言">
                                </div>
                            </div>
                        </form>
                        <div class="form-right fl">
                            <h3>您可以根据下列意向,<span>快捷留言</span></h3>
                            <ul class="quickMessage">
                                <li>
                                    <a>
                                        <p>1.我想加盟，请速与我联系！</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <p>2.加盟不错，我想了解一下具体细节！</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <p>3.我想开个店，不知道如何加盟？</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <p>4.我们这个地方有加盟商吗？想去看看！</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <p>5.我想到贵公司考察，请与我联系！</p>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <p>6.吃了么十分的好,希望你们继续加油！</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script src="/Bjs/script.js" type="text/javascript"></script>
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
            <div class="clearfix"> </div>
        </div>
    </div>
</body>

</html>