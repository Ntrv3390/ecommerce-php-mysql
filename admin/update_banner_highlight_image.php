<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from banner";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
    $h_img=$_FILES['h_img']['name'];
    move_uploaded_file($_FILES['h_img']['tmp_name'],'../wp-content/uploads/2022/08/'.$_FILES['h_img']['name']);

	mysqli_query($con,"update banner set h_img='$h_img' ");
	header('location:banner');
	die();
	}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update Highlighted Image</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="h_img" class=" form-control-label">Old Highlighted Image</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['h_img']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['h_img']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['h_img']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
								</div>
                                <div class="form-group">
									<label for="bg_banner" class=" form-control-label">Upload New Highlighted Image</label>
									<input type="file" required name="h_img" class="form-control">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Upload New Highlighted Image</span>
							   </button>
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