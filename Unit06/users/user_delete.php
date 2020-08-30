<?php 
include('connect.php');
$id = $_GET['id'];
// print_r($id);
$query = "DELETE FROM users WHERE `id` = " . $id;
// echo $query;
$status = $connect->query($query);
if ($status) {
	header("Location: users.php");
}else {
	echo "Xóa user thất bại.";
}
 ?>