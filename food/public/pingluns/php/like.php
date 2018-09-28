<?php 
header('Content-Type: text/html;charset=utf-8');
require_once 'init.php';
$nTime = $_POST['time'];
$likes  =$_POST['like'];
$id = $_POST['id'];
$IP  = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM $table WHERE id='$id'";
$res = mysqli_query($conn,$sql);
$result =mysqli_fetch_assoc($res); 
$oTime = $result['like_time'];
$likeIPs = $result['likeIPs'];
$IP_array = explode(',', $likeIPs);
$hour_gap = floor((strtotime($nTime)-strtotime($oTime))%86400/3600);
if ($likeIPs and in_array($IP, $IP_array)) {
	if ($hour_gap<$like_time_gap) {
		echo "0";
	}
	else{
		$sql = "UPDATE $table SET like_time='$nTime',support='$likes' WHERE id='$id'";
		$res = mysqli_query($conn,$sql);
		echo '1';
	}
	
}else{
	$IPs = $likeIPs.','.$IP;
	$sql = "UPDATE $table SET like_time='$nTime',support='$likes',likeIPs='$IPs' WHERE id='$id'";
	$res = mysqli_query($conn,$sql);
	echo '1';
}
mysqli_close($conn);
?>