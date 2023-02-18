<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from cta";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$title_black=get_safe_value($con,$_POST['title_black']);
    $title_blue=get_safe_value($con,$_POST['title_blue']);
    $cta_para=get_safe_value($con,$_POST['cta_para']);

	mysqli_query($con,"update cta set title_black='$title_black',title_blue='$title_blue',cta_para='$cta_para'");
	?>
	 
	<script>
	window.location.href="cta";
	</script>
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
                        <div class="card-header"><strong>Update Call To Action Details</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="product_title_black" class=" form-control-label">Title (black)</label>
									<input type="text"  name="title_black" placeholder="" class="form-control" value="<?php echo $row1['title_black'];?>">
								</div>
                                <div class="form-group">
									<label for="product_title_blue" class=" form-control-label">Title (blue)</label>
									<input type="text"  name="title_blue" placeholder="" class="form-control" value="<?php echo $row1['title_blue'];?>">
								</div>
                                <div class="form-group">
									<label for="description" class=" form-control-label">Paragraph</label>
									<textarea type="text" id="ckedit" name="cta_para" placeholder="" class="form-control"><?php echo $row1['cta_para'];?></textarea>
								</div>
							
                                
                               
                                
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Call To Action Details</span>
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