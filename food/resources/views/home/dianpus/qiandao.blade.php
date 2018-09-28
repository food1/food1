<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>吃了么签到</title>
    <link rel="stylesheet" href="/home/qiandao/css/qiandao_style.css">
</head>

<body>
    <div class="qiandao-warp">
        <div class="qiandap-box">
            <div class="qiandao-banner">
                <img src="images/qiandao_banner.jpg" height="551" width="1120" alt="">
            </div>
            <div class="qiandao-con clear">
                <div class="qiandao-left">
                    <div class="qiandao-left-top clear">
                        <div class="current-date">2016年1月6日</div>
                        <div class="qiandao-history qiandao-tran qiandao-radius" id="js-qiandao-history" onclick="history.go(-1)">返回</div>
                    </div>
                    <div class="qiandao-main" id="js-qiandao-main">
                        <ul class="qiandao-list" id="js-qiandao-list">
                        </ul>
                    </div>
                </div>
                <div class="qiandao-right">
                    <div class="qiandao-top">
                        <div class="just-qiandao qiandao-sprits" id="js-just-qiandao">
                        </div>
                    </div>
                    <div class="qiandao-bottom">
                        <div class="qiandao-rule-list">
                            <h4>签到规则</h4>
                            <p>首次签到获得0.05元现金奖励</p>
                            <p>连续签到每天增加0.01元现金奖励</p>
                            <p>连续签到16天及以上每天获得0.2元现金奖励</p>
                        </div>
                        <div class="qiandao-rule-list">
                            <h4>其他说明</h4>
                            <p>如果中间有一天间断未签到的，重先开始计算连续签到时间。</p>
                            <p>连续签到获得奖励后分享到QQ空间、微信朋友圈后再获得一次奖励，每天只限分享一次。</p>
                            <p>获得的奖励不能直接提现，只能投资后转让变现。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 签到 layer start -->
    <div class="qiandao-layer qiandao-active">
        <div class="qiandao-layer-con qiandao-radius">
            <a href="javascript:;" class="close-qiandao-layer qiandao-sprits"></a>
            <div class="yiqiandao clear">
                <div class="yiqiandao-icon qiandao-sprits"></div>您已连续签到<span>1</span>天
            </div>
            <div class="qiandao-jiangli qiandao-sprits">
                <span class="qiandao-jiangli-num">0.05<em>元</em></span>
            </div>
            <a href="#" class="qiandao-share qiandao-tran">分享获取双倍收益</a>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>
    <!-- 签到 layer end -->
    <script src="/home/qiandao/js/jquery-1.10.2.min.js"></script>
    <script src="/home/qiandao/js/qiandao_js.js"></script>
</body>

</html>
