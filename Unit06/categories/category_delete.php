<?php 
include 'connect.php';

$id = $_GET['id'];


$query = "DELETE FROM categories where id =" . $id;
echo $query;

$status = $connect->query($query);

if ($status) {
	header("Location: categories.php");
}else {
	echo "FALSE";
}

 ?>