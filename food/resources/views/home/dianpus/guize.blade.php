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
                    <div>
                    	<p>
                    		<h3>吃了么网上订餐平台服务协议</h3>
                    		<h6>吃了么网上订餐平台依据以下条件和条款为您提供所享有的服务,请仔细阅读并遵守.</h6>
                    		<h4>一.总则</h4>
                    		请您审慎阅读并选择同意或不同意本协议，除非您接受本协议所有条款，否则您无权使用本协议项下相关服务.您的申请、使用、帐号获取和登录等行为表明您自愿接受本协议的全部内容并受其约束，不得以任何理由包括但不限于未能认真阅读本协议等作为纠纷抗辩理由.
                    		<br>
                    		<h4>二.定义</h4>
                    		吃了么平台：是搭建、提供及维护网上订餐服务信息发布的平台，用户和商户通过吃了么平台对订餐及外卖服务达成合意.
                    		<br>
                    		<h4>三.吃了么权利与义务</h4>
                    		1.&nbsp; 吃了么为商户在消费群体中做相关宣传介绍并进行相关推荐，以提升商户的知名度.商户同意授权吃了么使用其品牌、LOGO、名称、商标等知识产权.<br>
							2.&nbsp; 吃了么有权对商户拟在吃了么发布的内容、信息进行审核，必要时可删改.吃了么有权对不符合法律法规、政策规定的内容或任何侵犯第三方合法权益的内容予以删改或拒绝发布，但甲乙双方确认，吃了么的前述审核、删改不为吃了么设置任何义务，也不免除商户根据本协议应承担的责任.<br>
							3.&nbsp; 如任何第三方向吃了么投诉，吃了么经核实后，有权要求商户配合解决该投诉.如出现不符合法律法规、政策规定或侵犯第三方合法权益的内容的，吃了么有权在不通知商户的情况下做下线处理、立即停止为其提供网络交易平台服务、冻结商户账户等.<br>
							4.&nbsp; 商户店铺内所售品类如有违反吃了么平台经营范围的相关规定或有向消费者私自售卖违禁品的行为，吃了么平台有权按照相关规定对商户进行处罚，并举报至相关行政主管部门.<br>
							5.&nbsp; 吃了么用户退订情形，吃了么应在收到退订申请后告知商户取消对应外卖订餐项目.商户应根据吃了么通知做相应的调整.<br>
							6.&nbsp; 如商户违反本协议第三条项下约定的义务，吃了么有权随时停止提供服务，并操作商户商品信息下线.<br>
							7.&nbsp; 本协议项下服务终止时，吃了么有权删除吃了么网上订餐上的商户已发布的外卖商品信息，且有权拒绝向商户提供相关信息；吃了么有权保存商户资质信息、商品信息、交易记录等相关资料.
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