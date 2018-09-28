<?php 
header('Content-Type: text/html;charset=utf-8');
require_once 'init.php';
$mode = $_POST['m']?$_POST['m']:'0';
$order = $mode=='0'?'create_time':'support';
$sql = "SELECT * FROM  $table ORDER BY $order  DESC";
$html_array = array();
$res = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($res);
$data_array  = array( );
if ($nums>0) {
	$data = GenDataArray($res);
	$result = genList($data);
	echo json_encode($result) ;
}

function GenDataArray($res)
{
	global $data_array;
	while ($row = mysqli_fetch_assoc($res)) {$rows[$row['id']]=$row;}
	foreach ($rows as $i => $row) {
		$newData = recursiveData($rows[$i],$rows);
		array_push($data_array,$newData);
	}
	return $data_array;
}

function recursiveData($row,$rows)
{
	$name = $row['nickname'];
	$attitude = $row['attitude'];
	$pid  = $row['pid'];
	$content = $row['content'];
	$id    = $row['id'];
	$pltime = $row['create_time'];
	$support = $row['support'];
	$ip = str_replace(strrchr($row['ip'], '.'), '.*',$row['ip']);
	$this_array=array(
		"id"=>$id,
		'pid'=>$pid,
		'name'=>$name,
		'content'=>$content,
		'time'=>$pltime,
		"ip"=>$ip,
		'support'=>$support,
		'attitude'=>$attitude,
		'child'=>'',
		);
	if ($pid==0) {
		return $this_array;
	}
	for ($i=1; $i <count($rows)+1 ; $i++) { 
			if ($rows[$i]['id']==$pid) {
				$this_array['child']=recursiveData($rows[$i],$rows);
				return $this_array;
			}
		}
}

function genList($data_array)
{	
	global $html_array;
	for($i=0;$i<count($data_array);$i++) {
		$meta = $data_array[$i];
		$head = '<li class="Cli" id="'.$meta['id'].'">';
		$mid = recursived($meta,1 );
		$end = '</li>';
		array_push($html_array,$head.$mid.$end);
	}
	return $html_array;
}

function recursived($meta,$flag )
{
	global $img_src;
	$timeStamp = $meta['time'];
	$support  = $meta['support'];
	$attitude = $meta['attitude'];
	$id = $meta['id'];
	$content = $meta['content'];
	$ip = $meta['ip'];
	$name = $meta['name'];
	$child = $meta['child'];
	$head = $img_src[$attitude].'<label class="Clabel"><span id="timeStamp">'.$timeStamp.'</span>&nbsp;<span id="nickname">'.$name.'</span>(<span id="ip">'.$ip.'</span>)发表：<span class="lays">'.$id.'楼</span></label>
						<div class="Ccontent" >';
	if ($child) {
		$mid = recursived($child,$flag-1 );
	}
	else{
		$mid='';
		if ($flag==1) {
			$t = '<label style="float:right"><span class="bottomSpan" onclick="answer('.$id.')">回复</span >&nbsp;&nbsp;<span class="bottomSpan" onclick="like('.$id.')" id="support'.$id.'"><i class="glyphicon glyphicon-thumbs-up"></i></span>(<span class="scount" id="like'.$id.'">'.$support.'</span>)</label>';
			$end = $content.$t.'</div>';
		    return $head.$mid.$end;
		}
		 
	}
	if ($flag==1) {
		$t = '<label style="float:right"><span class="bottomSpan" onclick="answer('.$id.')">回复</span >&nbsp;&nbsp;<span class="bottomSpan" onclick="like('.$id.')" id="support'.$id.'"><i class="glyphicon glyphicon-thumbs-up"></i></span>(<span class="scount" id="like'.$id.'">'.$support.'</span>)</label>';
	}
	else{
		$t='';
	}
	$end = $content.$t.'</div>';
	return $head.$mid.$end;
}
  
mysqli_close($conn);
?>