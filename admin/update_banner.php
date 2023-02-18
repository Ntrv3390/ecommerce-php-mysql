<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from banner";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$title=get_safe_value($con,$_POST['title']);
    $h_title=get_safe_value($con,$_POST['h_title']);
    $description=get_safe_value($con,$_POST['description']);
	mysqli_query($con,"update banner set title='$title',h_title='$h_title',description='$description'");
	header('location:banner');
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
                        <div class="card-header"><strong>Update Banner Details</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="product_title_black" class=" form-control-label">Heading (black)</label>
									<input type="text"  name="title" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="product_title_blue" class=" form-control-label">Heading (blue)</label>
									<input type="text"  name="h_title" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="description" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="description" placeholder="" class="form-control"><?php echo $row1[3];?></textarea>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Banner Details</span>
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