<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
if(isset($_POST['submit'])){
	$company_number=get_safe_value($con,$_POST['company_number']);
    $company_email=get_safe_value($con,$_POST['company_email']);
    $copyright_msg=get_safe_value($con,$_POST['copyright_msg']);
    $title=get_safe_value($con,$_POST['title']);
    $meta_desc=get_safe_value($con,$_POST['meta_desc']);
    $meta_keywords=get_safe_value($con,$_POST['meta_keywords']);
	mysqli_query($con,"update settings set company_number='$company_number',company_email='$company_email',copyright_msg='$copyright_msg',title='$title',meta_desc='$meta_desc',meta_keywords='$meta_keywords' ");
	?>
	<script>window.location.href="settings";</script>
	<?php
	die();
	}
?>
<script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="assets/js/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update Settings</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="company_number" class=" form-control-label">Company Number</label>
									<input type="text"  name="company_number" placeholder="" class="form-control" value="<?php echo $row[1];?>">
								</div>
                                <div class="form-group">
									<label for="company_email" class=" form-control-label">Company Email</label>
									<input type="text"  name="company_email" placeholder="" class="form-control" value="<?php echo $row[2];?>">
								</div>
                                
                                <div class="form-group">
									<label for="title" class=" form-control-label">Meta Title</label>
									<input type="text"  name="title" placeholder="" class="form-control" value="<?php echo $row[5];?>">
								</div>
                                <div class="form-group">
									<label for="meta_desc" class=" form-control-label">Meta Description</label>
									
									<textarea id="ckedit4" type="text"  name="meta_desc" placeholder="" class="form-control"><?php echo $row[6];?></textarea>
								</div>
                                <div class="form-group">
									<label for="meta_keywords" class=" form-control-label">Meta Keywords</label>
									<textarea id="ckedit5" type="text"  name="meta_keywords" placeholder="" class="form-control"><?php echo $row[7];?></textarea>
								</div>
								<div class="form-group">
									<label for="copyright_msg" class=" form-control-label">Copyright Message</label>
									<textarea id="ckedit2" type="text"  name="copyright_msg" placeholder="" class="form-control"><?php echo $row[3];?></textarea>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Settings</span>
							   </button>
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