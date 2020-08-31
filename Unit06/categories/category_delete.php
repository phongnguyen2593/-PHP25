<?php 
include '../helpers/connect.php';

$id = $_GET['id'];


$query = "DELETE FROM categories where id =" . $id;
echo $query;

$connect = connect();
$status = $connect->query($query);

if ($status) {
	header("Location: categories.php");
}else {
	echo "FALSE";
}

 ?>