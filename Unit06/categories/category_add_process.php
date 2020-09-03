<?php 
include '../helpers/sql.php';
//Lấy dữ liệu
$data = $_POST;

$status = insert('categories', $data);

// if ($status) {
// 	echo "TRUE";
// }else {
// 	echo "FALSE";
// }
header("Location: categories.php")
 ?>