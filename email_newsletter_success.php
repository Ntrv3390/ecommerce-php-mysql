<?php
require('connection.inc.php');
require('functions.inc.php');

$email=get_safe_value($con,$_POST['email']);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from email_subscribe where email='$email'"));
if($check_user>0){
	echo "email_present";
}else{
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into email_subscribe(email,status,added_on) values('$email',1,'$added_on')");
	echo "insert";
}
?>