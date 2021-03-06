<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么登录页面 </title>
    <link href="/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.min.js"></script>
    <link href="/home/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 分享 -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/css/share.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/js/social-share.min.js"></script>
<!-- 分享 -->  
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
    <div class="main">
        <div class="container">
            <div class="Product_top">
                <div class="row content">
                    <div style="height: 150px;">
                    	<p>
                            <li><a href="/dianpus/weizhi">我的位置</a></li>
                            <br>
                    		<b style="font-size:16px">“吃了么”</b>是2018年创立的本地生活平台,主营在线外卖、新零售、即时配送和餐饮供应链等业务.以诚信服务客户为使命，致力于用创新科技打造全球领先的本地生活平台.成为了中国人继做饭、堂食后的第三种常规就餐方式.
                    	</p>
                    </div>
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
</body>
</html>