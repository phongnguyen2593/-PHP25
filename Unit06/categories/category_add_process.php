<?php 
include '../helpers/connect.php';
//Lấy dữ liệu
$data = $_POST;

//Tạo câu lệnh
$query = "INSERT INTO categories (`name`, `thumbnail`, `slug`, `description`, `created_at`) VALUES ('" . $data['name'] ."', '". $data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['date']. "')";
// echo $query;
$connect = connect();
$status = $connect->query($query);
// if ($status) {
// 	echo "TRUE";
// }else {
// 	echo "FALSE";
// }
header("Location: categories.php")
 ?>