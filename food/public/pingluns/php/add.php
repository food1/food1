<?php 
 header('Content-Type: text/html;charset=utf-8');
 require_once 'init.php';

 $name = $_POST['name'];
 $content = $_POST['content'];
 $pid = $_POST['pid'];
 $attitude = $_POST['attitude'];
 $ip = $_SERVER['REMOTE_ADDR'];
 $pltime = $_POST['time'];
 $sql = "INSERT INTO  $table(nickname,pid,content,attitude,create_time,ip) VALUES('$name','$pid','$content','$attitude','$pltime','$ip')";
 if (mysqli_query($conn,$sql)) {
 	echo '1';
 }
 else{
 	echo '0';
 }
mysqli_close($conn);
?>