<?php 
include('connect.php');

$data = $_POST;
// echo "<pre>";
// print_r($data);
$query = "INSERT INTO users (`name`,`email`,`password`,`avatar`) VALUES ('".$data['name'] . "','".$data['email']."','".$data['password']."','".$data['avatar']."')";
// echo $query;

$status = $connect->query($query);
// if ($status) {
// 	echo "true";
// }else {
// 	echo "false";
// }

header("Location: users.php");

 ?>