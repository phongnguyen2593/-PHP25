<?php 
include('../helpers/sql.php');
$data = $_POST;
$status = insert('posts',$data);
if ($status) {
	header('Location: posts.php');
}else{
	echo "FALSE";
}
 
 ?>