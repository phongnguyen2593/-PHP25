<?php 
include('../helpers/sql.php');
$id = $_GET['id'];
$status = delete('posts',$id);
 ?>