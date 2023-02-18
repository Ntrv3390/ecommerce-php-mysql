<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from social_links";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$facebook=get_safe_value($con,$_POST['facebook']);
    $twitter=get_safe_value($con,$_POST['twitter']);
    $linkedin=get_safe_value($con,$_POST['linkedin']);
    $youtube=get_safe_value($con,$_POST['youtube']);
    $instagram=get_safe_value($con,$_POST['instagram']);
	$heading=get_safe_value($con,$_POST['heading']);
	$highlight_heading=get_safe_value($con,$_POST['highlight_heading']);
	$description=get_safe_value($con,$_POST['description']);
	mysqli_query($con,"update social_links set facebook='$facebook',twitter='$twitter',linkedin='$linkedin',youtube='$youtube',instagram='$instagram' ,heading='$heading',highlight_heading='$highlight_heading',description='$description'");
	header('location:social_media_links');
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
									<label for="heading" class=" form-control-label">Heading</label>
									<input type="text"  name="heading" placeholder="" class="form-control" value="<?php echo $row1[5];?>">
								</div>
								<div class="form-group">
									<label for="highlight_heading" class=" form-control-label">Highlighted Heading</label>
									<input type="text"  name="highlight_heading" placeholder="" class="form-control" value="<?php echo $row1[6];?>">
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="description" placeholder="" class="form-control"><?php echo $row1[7];?></textarea>
								</div>
                            <div class="form-group">
									<label for="facebook" class=" form-control-label">Facebook</label>
									<input type="text"  name="facebook" placeholder="" class="form-control" value="<?php echo $row1[0];?>">
								</div>
                            <div class="form-group">
									<label for="twitter" class=" form-control-label">Twitter</label>
									<input type="text"  name="twitter" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="linkedin" class=" form-control-label">LinkedIn</label>
									<input type="text"  name="linkedin" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="youtube" class=" form-control-label">YouTube</label>
									<input type="text"  name="youtube" placeholder="" class="form-control" value="<?php echo $row1[3];?>">
								</div>
                                <div class="form-group">
									<label for="instagram" class=" form-control-label">Instagram</label>
									<input type="text"  name="instagram" placeholder="" class="form-control" value="<?php echo $row1[4];?>">
								</div>
                                
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Links</span>
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