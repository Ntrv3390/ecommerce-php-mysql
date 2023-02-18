<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
if(isset($_POST['submit'])){
    $company_logo=$_FILES['company_logo']['name'];
    move_uploaded_file($_FILES['company_logo']['tmp_name'],'../wp-content/uploads/2022/08/'.$_FILES['company_logo']['name']);

	mysqli_query($con,"update settings set company_logo='$company_logo' ");
	header('location:settings');
	die();
	}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update Logo</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="categories" class=" form-control-label">Old Logo</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
								</div>
                                <div class="form-group">
									<label for="company_logo" class=" form-control-label">Upload Logo</label>
									<input type="file" required name="company_logo" class="form-control">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Upload New Logo</span>
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