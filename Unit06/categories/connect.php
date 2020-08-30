<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "my_blog";

//Tạo kết nối đến database

$connect = new mysqli($servername, $username, $password, $database_name);
//kiểm tra xem có thể kết nối được không ?
//nếu không thì in ra Fail + tên lỗi
if ($connect->connect_errno) {
	echo "Fail" . $connect->connect_error;
	exit();
}
 ?>