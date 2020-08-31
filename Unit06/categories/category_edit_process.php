<?php 

include '../helpers/connect.php';

$data = $_POST;
$id = $data['id'];
// echo $id;
$query = "UPDATE categories SET `name` = '" . $data['name'] . "', `description` = '" . $data['description'] . "', `thumbnail` ='" . $data['thumbnail'] . "', `slug`='" . $data['slug']."', `created_at` ='" .$data['date']."' WHERE id = " . $id; 
// echo $query;
$connect = connect();
$status = $connect->query($query);

if ($status) {
	header("Location: categories.php");
}else{
	echo "Update thất bại";
}
 ?>