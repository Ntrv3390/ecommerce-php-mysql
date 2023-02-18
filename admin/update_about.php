<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from about";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$about_title=get_safe_value($con,$_POST['about_title']);
    $about_description=get_safe_value($con,$_POST['about_description']);
    $meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
    $meta_description=get_safe_value($con,$_POST['meta_description']);
	mysqli_query($con,"update about set about_title='$about_title',about_description='$about_description',meta_keyword='$meta_keyword',meta_description='$meta_description'");
    ?>
	<script>window.location.href("about_manage");</script>
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
                        <div class="card-header"><strong>Update About Details</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="company_number" class=" form-control-label">About Title</label>
									<input type="text"  name="about_title" placeholder="" class="form-control" value="<?php echo $row1['about_title'];?>">
								</div>
                                
                                <div class="form-group">
									<label for="copyright_msg" class=" form-control-label">About Description</label>
									<textarea id="ckedit2" type="text"  name="about_description" placeholder="" class="form-control"><?php echo $row1['about_description'];?></textarea>
								</div>
                                <div class="form-group">
									<label for="meta_keywords" class=" form-control-label">Meta Keywords</label>
									<textarea id="ckedit5" type="text"  name="meta_keyword" placeholder="" class="form-control"><?php echo $row1['meta_keyword'];?></textarea>
								</div>
                                <div class="form-group">
									<label for="meta_desc" class=" form-control-label">Meta Description</label>
									<textarea id="ckedit4" type="text"  name="meta_description" placeholder="" class="form-control"><?php echo $row1['meta_description'];?></textarea>
								</div>
                                
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update About Section</span>
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