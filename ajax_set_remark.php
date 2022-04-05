<?php

include './mysqlcon.php';
	// var_dump($_POST);
if ($_POST) {
	
	$data=$_POST;
	$upsql="UPDATE `ordershop` SET `".$data['zidaun']."` = '".$data['remark']."' WHERE `ordershop`.`id` = ".$data['id'].";";
	$result = $conn->query($upsql);
	if ($result) {
		echo json_encode(array("success"=>200,"成功"));
	}
 	// var_dump($_POST);

}



?>