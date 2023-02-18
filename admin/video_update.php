<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from video";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$title_black=get_safe_value($con,$_POST['title_black']);
    $title_blue=get_safe_value($con,$_POST['title_blue']);
    $video_link=get_safe_value($con,$_POST['video_link']);
    $para=get_safe_value($con,$_POST['para']);
	mysqli_query($con,"update video set title_black='$title_black',title_blue='$title_blue',video_link='$video_link',para='$para'");
	?>
	<script>window.location.href="video_manage"</script>
	
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
                        <div class="card-header"><strong>Update Video Section Details</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="company_number" class=" form-control-label">Title(black)</label>
									<input type="text"  name="title_black" placeholder="" class="form-control" value="<?php echo $row1['title_black'];?>">
								</div>
                                <div class="form-group">
									<label for="company_email" class=" form-control-label">Title(blue)</label>
									<input type="text"  name="title_blue" placeholder="" class="form-control" value="<?php echo $row1['title_blue'];?>">
								</div>
								<div class="form-group">
									<label for="title" class=" form-control-label">Video Link</label>
									<input type="text"  name="video_link" placeholder="" class="form-control" value="<?php echo $row1['video_link'];?>">
								</div>
                                <div class="form-group">
									<label for="copyright_msg" class=" form-control-label">Paragraph</label>
									<textarea id="ckedit2" type="text"  name="para" placeholder="" class="form-control"><?php echo $row1['para'];?></textarea>
								</div>
                            
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Video Section Settings</span>
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

		 </script>
<?php
require('footer.inc.php');
?>