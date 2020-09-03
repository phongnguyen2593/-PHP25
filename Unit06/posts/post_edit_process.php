<?php 
include('../helpers/sql.php');
$data = $_POST;
$status = update('posts', $data);
 ?>