<?php

include './mysqlcon.php';
	//var_dump($_POST);exit;
if ($_POST) {
	
	
	$newarr=array();
	foreach ($_POST as $k => $v) {
		$suoyou=json_decode($v);
		$newarr[$k]['img']=$suoyou[0];
		$newarr[$k]['name']=$suoyou[1];
		$newarr[$k]['piec']=$suoyou[2];
		$newarr[$k]['number']=$suoyou[3];
		
	}
	// var_dump(json_encode($newarr));exit();
	$insql="INSERT INTO `ordershop` ( `orderno`, `shopjson`) VALUES ('".date("Ymdhis")."', '".addslashes(json_encode($newarr))."')";
	//var_dump($insql);exit;
	$result = $conn->query($insql);
	if ($result) {
		echo json_encode(array("success"=>200,"成功"));
	}


}



?>