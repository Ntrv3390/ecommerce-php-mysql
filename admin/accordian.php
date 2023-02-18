<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from accordian";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
?>

<script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="assets/js/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Accordian Management</strong>
                        
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Accordian Image 1</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_accordian_image?img=1">Update Image 1</a>
								</div>
								 <div class="form-group">
									<label for="categories" class=" form-control-label">Accordian Image 2</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_accordian_image?img=2">Update Image 2</a>
								</div>
								 <div class="form-group">
									<label for="categories" class=" form-control-label">Accordian Image 3</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_accordian_image?img=3">Update Image 3</a>
								</div>
								 <div class="form-group">
									<label for="categories" class=" form-control-label">Accordian Image 4</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_accordian_image?img=4">Update Image 4</a>
								</div>
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