<!DOCTYPE HTML>
<html>

<head>
    <title>吃了么-我的订单</title>
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
    <!-- 个人中心 -->
    <link rel="icon" type="image/png" href="/home/personassets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/home/person/assets/i/app-icon72x72@2x.png">
    <link rel="stylesheet" href="/home/person/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/home/person/assets/css/admin.css">
    <link rel="stylesheet" href="/home/person/assets/css/app.css">
    <script src="/home/person/assets/js/echarts.min.js"></script>
    <!--  -->
</head>

<body>
    <form action="/order">
        <div class="tpl-portlet-components" style="height: 670px;">
            <div style="height: 20px"></div>
            <div class="portlet-title" style="height:20px">
                <div class="caption font-green bold">
                    我的订单
                </div>
            </div>
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                                <tr>
                                    <th class="table-time">下单时间</th>
                                    <th class="table-title">订单内容</th>
                                    <th class="table-set">支付金额 (元)</th>
                                    <th class="table-set">订单编号</th>
                                    <th class="table-set">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 40px">
                                    <td>fdfdsfds</td>
                                    <td>fdsfdsfds</td>
                                    <td>dsfdsfds</td>
                                    <td><span id="ddbh"></span> </td>
                                    <td><a href="">已完成 </a>| <a href="">删除</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tpl-alert"></div>
        </div>
    </form>
</body>

</html>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
/** 随机生成固定位数或者一定范围内的字符串数字组合
 * @param {Number} min 范围最小值
 * @param {Number} max 范围最大值，当不传递时表示生成指定位数的组合
 * @param {String} charStr指定的字符串中生成组合
 * @returns {String} 返回字符串结果
 * */
function randomRange(min, max, charStr) {
    var returnStr = "",
        range;
    if (typeof min == 'undefined') {
        min = 10;
    }
    if (typeof max == 'string') {
        charStr = max;
    }
    range = ((max && typeof max == 'number') ? Math.round(Math.random() * (max - min)) + min : min);
    charStr = charStr || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (var i = 0; i < range; i++) {
        var index = Math.round(Math.random() * (charStr.length - 1));
        returnStr += charStr.substring(index, index + 1);
    }
    return returnStr;
}
var rand = randomRange();
document.getElementById("ddbh").innerHTML=rand;
</script>