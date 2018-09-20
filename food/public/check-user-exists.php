<?php
	
	//获取请求的参数
	$username = $_POST['user_name'];
	// var_dump($username);
	// die;

	//数据库检测
	$pdo = new PDO('mysql:host=localhost;dbname=food;charset=utf8','root','');

	$stmt = $pdo -> prepare('select * from users where user_name =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	// var_dump($user);
	if($user === false){
		echo '1';
	}else{
		echo '0';
	}