<?php
session_start();
$con=mysqli_connect("localhost","u893319158_swipe_right","Swiperightdb1","u893319158_swipe_right_db");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('SITE_PATH','http://swiperight.in/');

define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'wp-content/uploads/2022/08/');
define('PRODUCT_IMAGE_SITE_PATH','/');



define('SMTP_EMAIL','swiperightsales@gmail.com');
define('SMTP_PASSWORD','sihl@1234');





?>