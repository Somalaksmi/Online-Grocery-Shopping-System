<?php
$servername = "localhost";
$username = "user1";
$password = "user1abc";
$dbname = "tb005";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接


if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

 
mysqli_set_charset($conn , 'utf8');
 

function mysqlsetectall($conn,$sql){
    $array=array();
    $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res))
      {

      $array[]=$row;
      }
    return $array;
}

function mysqlsetectalltwo($conn,$sql){
    $array=array();
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
       $array[]=$row;
    }
} 
    return $array;
}


?>