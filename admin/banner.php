<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from banner";
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
                        <div class="card-header"><strong>Banner Details</strong>
                        <h4 class="box-link"><a href="update_banner">Update Banner Details</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
                        
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (black)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (blue)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="description" class=" form-control-label">Description</label>
									<textarea id="ckedit" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1[3];?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Highlighted Image</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['4']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['4']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['4']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_banner_highlight_image">Update Highlighted Image</a>
                                    </div>
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