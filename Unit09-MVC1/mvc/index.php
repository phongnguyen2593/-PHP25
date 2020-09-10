<?php 

$mod = $_GET['mod'];
$act = $_GET['act'];
$param = isset($_GET['id']) ? [$_GET['id']] : [];
include_once('controller/CategoryController.php');
include_once('controller/PostController.php');

$class = ucfirst($mod)."Controller";
// echo $class;
// die();

//duong dan
$path = "controller/$class.php";
// echo $path;

require_once($path);
$controller_obj = new $class();
// $controller_obj = new CategoryController();
// $controller_obj->$act($id);
// $controller_obj->list();
$data = $_POST;
$param[] = $data;
call_user_func_array([$controller_obj,$act],$param);
// $controller_obj = new PostController();
// $controller_obj->list();

 ?>