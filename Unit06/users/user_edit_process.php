<?php 	
include('../helpers/sql.php');
$data = $_POST;
// print_r($data);
// $query = "UPDATE users SET `name`='".$data['name']."', `email` ='".$data['email']."', `password` = '".$data['password']."',`avatar`= '".$data['avatar']."' WHERE `id`= ".$data['id'];
// // echo $query;
// $connect = connect();
// $status = $connect->query($query);
// if ($status) {
// 	header("Location: users.php");
// }else {
// 	echo "Update user failed";
// }

$status = update('users', $data);

 ?>

