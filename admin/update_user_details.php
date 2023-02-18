<?php
require('top.inc.php');
$name='';
$email='';
$number='';

$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res1=mysqli_query($con,"select * from users where id='$id'");
	$check=mysqli_num_rows($res1);
	if($check>0){
		$row1=mysqli_fetch_assoc($res1);
		$name=$row1['name'];
		$email=$row1['email'];
		$number=$row1['number'];
	}else{
		header('location:users');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$email=get_safe_value($con,$_POST['email']);
	$number=get_safe_value($con,$_POST['number']);
	$res1=mysqli_query($con,"select * from users where email='$email'");
	$check=mysqli_num_rows($res1);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res1);
			if($email==$getData['email']){
			
			}else{
				$msg="User with this email already exist";
			}
		}else{
			$msg="User with this email already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
				$update_sql="update users set name='$name',email='$email',number='$number' where id='$id'";
			}else{
				$update_sql="update users set name='$name',email='$email',number='$number' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into users(name,email,number,status) values('$name','$email','$number','1')");
		}
		?>
		<script>window.location.href="<?php echo SITE_PATH?>/admin/users";</script>
		<?php
		die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Edit User Details</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
								<div class="form-group">
									<label for="name" class=" form-control-label">User Name</label>
									<input type="text" name="name" placeholder="Enter user name" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="email" class=" form-control-label">User Email</label>
									<input type="text" name="email" placeholder="Enter user email" class="form-control" required value="<?php echo $email?>">
								</div>
								
								
								<div class="form-group">
									<label for="mobile" class=" form-control-label">Mobile No</label>
									<input type="number" name="number" placeholder="Enter mobile number" class="form-control" required value="<?php echo $number?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
                               <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>