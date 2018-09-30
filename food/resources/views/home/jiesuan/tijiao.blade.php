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
    
    <!--订单提交body部分开始-->  
  <div class="order-info" style="height: 350px;">
    <center>
                <img src="/home/jiesuan/images/wancheng.jpg" "><br>
                
                <span style="color: red;"><a href="/dianpus/choujiang">您获得一次抽奖机会，点击前往</a></span>
                
    </center>
 </div>

 <div>
     
 </div>
 <!--订单提交body部分结束-->
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

