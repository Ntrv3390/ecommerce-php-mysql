<?php
require('top.inc.php');
$client_name='';
$description='';
$color='';
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res1=mysqli_query($con,"select * from testimonial where id='$id'");
	$check=mysqli_num_rows($res1);
	if($check>0){
		$row1=mysqli_fetch_assoc($res1);
		$client_name=$row1['client_name'];
		$description=$row1['description'];
		$color=$row1['color'];
	}else{?>
	<script>
		window.location.href="manage_testimonial";
	</script>
	<?php }
	}

if(isset($_POST['submit'])){
	$client_name=get_safe_value($con,$_POST['client_name']);
	$description=get_safe_value($con,$_POST['description']);
	$color=get_safe_value($con,$_POST['color']);
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update testimonial set client_name='$client_name',description='$description',color='$color' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into testimonial(client_name,description,color,status) values('$client_name','$description','$color',1)");
		}
		?>
			<script>
				window.location.href="<?php echo SITE_PATH ?>/admin/manage_testimonial";
			</script>
			<?php 
}
?>
<script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="assets/js/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add/Update Testimonial</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Client Name</label>
									<input type="text" name="client_name" placeholder="Enter client name" class="form-control" required value="<?php echo $client_name?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="description" placeholder="" class="form-control"><?php echo $description ?></textarea>
								</div>
								
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Color</label>
									<input type="color" name="color" placeholder="Enter color of your choice" class="form-control" required value="<?php echo $color?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
         <script>
			var editor = CKEDITOR.replace( 'ckedit' );
CKFinder.setupCKEditor( editor );
</script>
         
<?php
require('footer.inc.php');
?>