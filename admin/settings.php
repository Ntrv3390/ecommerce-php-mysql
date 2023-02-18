<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
?>

<script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="assets/js/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Settings</strong>
                        <h4 class="box-link"><a href="update_settings">Update Settings</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Company Number</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row[1];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Company Email</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row[2];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Copyright Message</label>
									<textarea id="ckedit2" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row[3];?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Logo</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_logo">Update Logo</a>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row[5];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea id="ckedit4" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row[6];?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keywords</label>
									<textarea id="ckedit5" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row[7];?></textarea>
								</div>
							   
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script>
			var editor2 = CKEDITOR.replace( 'ckedit2' );
CKFinder.setupCKEditor( editor2 );
var editor4 = CKEDITOR.replace( 'ckedit4' );
CKFinder.setupCKEditor( editor4 );
var editor5 = CKEDITOR.replace( 'ckedit5' );
CKFinder.setupCKEditor( editor5 );
		 </script>
<?php
require('footer.inc.php');
?>