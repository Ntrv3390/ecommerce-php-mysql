<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from cta";
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
                        <div class="card-header"><strong>Call To Action Details</strong>
                        <h4 class="box-link"><a href="update_cta">Update Call To Action Details</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (black)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['title_black'];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (blue)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['title_blue'];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">CTA Image</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['cta_img']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['cta_img']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['cta_img']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_cta_image">Update CTA Image</a>
								</div>
                            
								<div class="form-group">
									<label for="description" class=" form-control-label">Paragraph</label>
									<textarea id="ckedit" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1['cta_para'];?></textarea>
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