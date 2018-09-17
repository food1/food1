<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
    body,
    html,
    #allmap {
        width: 100%;
        height: 100%;
        overflow: hidden;
        margin: 0;
        font-family: "微软雅黑";
    }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=QDcQtMGgRI3DIIohbMMPpjsa5BaopWen"></script>
    <title>吃了么所在地</title>
</head>

<body>
    <div id="allmap"></div>
</body>
<script type="text/javascript">
// 百度地图API功能
var map = new BMap.Map("allmap");
// 设置中心点
var point = new BMap.Point(116.342044,40.10835);
// 设置显示比例
map.centerAndZoom(point, 18);
// 允许滚动进行缩放
map.enableScrollWheelZoom(true);
// 创建标注
var marker = new BMap.Marker(point);
// 将标注添加到地图中
map.addOverlay(marker);
//跳动的动画        
marker.setAnimation(BMAP_ANIMATION_BOUNCE);
</script>
</html>

