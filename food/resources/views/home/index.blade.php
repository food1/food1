<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>吃了么&nbsp; 歡迎您~ </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico">
	<link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/home/sass/css/animate.css">
	<link rel="stylesheet" href="/home/sass/css/icomoon.css">
	<link rel="stylesheet" href="/home/sass/css/simple-line-icons.css">
	<link rel="stylesheet" href="/home/sass/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="/home/sass/css/flexslider.css">
	<link rel="stylesheet" href="/home/sass/css/bootstrap.css">
	<link rel="stylesheet" href="/home/sass/css/style.css">
	<!-- Modernizr JS -->
	<script src="/home/sass/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">
			<div class="flexslider">
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
								<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
								<script src="/home/sass/ass/js/jquery.cxselect.js"></script>
								<div id="city_china">
								<h1>吃了么</h1>
								<br>				
								<!-- 城市三级联动 -->
								<form action="/dianpus">
								<div class="form-group">

								<label class="col-sm-2 control-label" style="color:black;font-size:26px;">
								<i>*</i>所在地址</label>
								  	<div class="col-sm-3">
								    	<select name="input_province" id="input_province" class="form-control" style="width:200px;height:45px;border:solid 2px #aaa;">
								      	<option value="">--请选择--</option></select>
								  	</div>
								  	<div class="col-sm-3">
								    	<select name="input_city" id="input_city" class="form-control" style="width:200px;height:45px;border:solid 2px #aaa;">
								      	<option value=""></option>
								    	</select>
								  	</div>
								  	<div class="col-sm-3">
								    	<select name="input_area" id="input_area" class="form-control" style="width:200px;height:45px;border:solid 2px #aaa;">
								      	<option value=""></option>
								    	</select>
								  	</div>
								</div>								
									<a href="/home/dianpus"><button class="btn-stress">搜 索</button></a><i style="color:black;font-size:28px;">*</i>

         						</form>
						       <!-- 城市三级联动 -->
						    </div>	
						</div>
					</div>
				</div>
				<ul class="slides">
					<li style="background-image: url(/home/sass/images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(/home/sass/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(/home/sass/images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
				</ul>
			</div>
			<div style="width:100%;height:130px;background-color:#ddd;">
				<p style="text-align:center;font-family:'叶根友毛笔行书2.0版';">
					<a href="" style="color:#666;">用户帮助</a>|
					<a href="" style="color:#666;">商务合作</a>|
					<a href="" style="color:#666;">在线咨询</a>|
					<a href="" style="color:#666;">官方微信</a>|
					<a href="" style="color:#666;">官方微博</a>
				</p>
				<p style="text-align:center;font-family:'叶根友毛笔行书2.0版';">所有方:内蒙F4组 | 北京市昌平区兄弟连</p>
			</div>
		</div>
	</div>
	<script src="/home/sass/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/home/sass/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="/home/sass/js/moment.js"></script>
	<script src="/home/sass/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="/home/sass/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/home/sass/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="/home/sass/js/jquery.flexslider-min.js"></script>
	<script src="/home/js/adress.min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<script src="/home/sass/js/main.js"></script>
</body>
</html>
<script>	
	$(function () {
        var html = "";
        $("#input_city").append(html); $("#input_area").append(html);
        $.each(pdata,function(idx,item){
            if (parseInt(item.level) == 0) {
                html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
            }
        });
        $("#input_province").append(html);
        $("#input_province").change(function(){
            if ($(this).val() == "") return;
            	$("#input_city option").remove(); $("#input_area option").remove();
            	var code = $(this).find("option:selected").attr("exid"); code = code.substring(0,2);
            	var html = "<option value=''>--请选择--</option>"; $("#input_area").append(html);
            	$.each(pdata,function(idx,item){
                if (parseInt(item.level) == 1 && code == item.code.substring(0,2)) {
                    html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
                	}
            	});
            $("#input_city").append(html);
        });
        $("#input_city").change(function(){
            if ($(this).val() == "") return;
            	$("#input_area option").remove();
            	var code = $(this).find("option:selected").attr("exid"); code = code.substring(0,4);
            	var html = "<option value=''>--请选择--</option>";
            	$.each(pdata,function(idx,item){
                if (parseInt(item.level) == 2 && code == item.code.substring(0,4)) {
                    html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
                	}
            	});
            $("#input_area").append(html);
        });
	});
</script>	    
