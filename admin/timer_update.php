<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from offer_timer";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$title_black=get_safe_value($con,$_POST['title_black']);
    $title_blue=get_safe_value($con,$_POST['title_blue']);
    $offer_para=get_safe_value($con,$_POST['offer_para']);
    $day_end=get_safe_value($con,$_POST['day_end']);
    $month_end=get_safe_value($con,$_POST['month_end']);
	mysqli_query($con,"update offer_timer set title_black='$title_black',title_blue='$title_blue',offer_para='$offer_para',day_end='$day_end',month_end='$month_end'");
	?>
	<script>window.location.href="timer"</script>
	
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
                        <div class="card-header"><strong>Update Offer (timer) Section Details</strong></div>
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
									<label for="copyright_msg" class=" form-control-label">Paragraph</label>
									<textarea id="ckedit2" type="text"  name="offer_para" placeholder="" class="form-control"><?php echo $row1['offer_para'];?></textarea>
								</div>
                            <div class="form-group">
									<label for="title" class=" form-control-label">Date Of End</label>
									<input type="number"  name="day_end" placeholder="" class="form-control" value="<?php echo $row1['day_end'];?>">
								</div>
								<div class="form-group">
									<label for="title" class=" form-control-label">Month Of End</label>
									<input type="number"  name="month_end" placeholder="" class="form-control" value="<?php echo $row1['month_end'];?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Offer (timer) Settings</span>
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