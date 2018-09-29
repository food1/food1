<?php
 
 $host     = 'localhost';//数据库主机名
 $account  = 'root';//账户
 $password = '';//密码
 $database = 'food';//数据库名称
 $coding = 'utf8';//数据库交互字符集
 $table  = 'pingluns';//存放评论数据的表名
 $like_time_gap = 24;//点赞支持时间间隔，单位：小时，这个时间内不能重复点赞
 $img_src = array(
 	'-1'=>'<img src="/pingluns/img/fan.png">',//态度小图标:反面态度 22px * 22px 可以自己制作更改
 	'0'=>'<img src="/pingluns/img/zhong.png">',//态度小图标:中立态度
 	'1'=>'<img src="/pingluns/img/zheng.png">',//态度小图标:正面态度
 	'2'=>'',//无图标
 	);

?>