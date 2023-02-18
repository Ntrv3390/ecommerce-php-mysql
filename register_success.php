<?php
require('connection.inc.php');
require('functions.inc.php');

$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$number=get_safe_value($con,$_POST['number']);
$password=get_safe_value($con,$_POST['password']);
$password=md5($password);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if($check_user>0){
	echo "email_present";
}else{
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into users(name,email,number,password,status,added_on) values('$name','$email','$number','$password',1,'$added_on')");
	echo "insert";
}
?>