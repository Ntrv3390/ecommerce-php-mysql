<?php
session_start();
$con=mysqli_connect("localhost","root","","swipe_right_db");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/swipe/');
define('SITE_PATH','http://localhost/swipe');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'wp-content/uploads/2022/08/');
define('PRODUCT_IMAGE_SITE_PATH','/');
?>