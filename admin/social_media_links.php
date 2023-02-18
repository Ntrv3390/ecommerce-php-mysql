<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from social_links";
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
                        <div class="card-header"><strong>Social Media Links</strong>
                        <h4 class="box-link"><a href="update_social_links">Update Links</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
                     <div class="form-group">
									<label for="categories" class=" form-control-label">Heading</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[5];?>">
								</div>
                        <div class="form-group">
									<label for="categories" class=" form-control-label">Highlighted Heading</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[6];?>">
								</div>
                        <div class="form-group">
									<label for="meta_desc" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="description" readonly placeholder="" class="form-control"><?php echo $row1[7];?></textarea>
								</div>
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Facebook</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[0];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Twitter</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">LinkedIn</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">YouTube</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[3];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Instagram</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[4];?>">
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