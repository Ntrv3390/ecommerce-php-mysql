<?php
require('top.inc.php');
$sql_news = "select * from settings";
    $res=mysqli_query($con,$sql_news);
    $row=mysqli_fetch_array($res);
$msg='';
if(isset($_GET['send']))
{
    $send = get_safe_value($con,$_GET['send']);
    if($send == 1)
    {
        $msg = 'Newsletter has been delivered successfully!';
        $bg = 'green';
    }else{
        $msg = 'Oops, there was an error sending that newsletter, please try again in a while.';
        $bg = '#ed5818';
    }
}
?>
<script src="<?php echo SITE_PATH ?>/admin/assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?php echo SITE_PATH ?>/admin/assets/js/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Send a newsletter</strong><br>
                        <div class="card-header" style="background-color:<?php echo $bg ?>;color:#fff;"><?php echo $msg;?></div>
                        </div>
                        <form method="post" action="send_newsletter" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">

                               <div class="form-group">
									<label for="categories" class=" form-control-label">Sender name</label>
									<input type="text" name="sender_name" placeholder="Enter sender name" class="form-control" required value="Swipe Right">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Sender email</label>
									<input type="email" name="sender_email" placeholder="Enter sender email" class="form-control" required value="<?php echo $row['company_email']; ?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Subject</label>
									<input type="text" name="subject" placeholder="Enter subject" class="form-control" required value="Weekly Newsletter | Swipe Right">
								</div>
					
								
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Body</label>
									<textarea type="text" id="ckedit" name="body"  placeholder="Enter body" class="form-control"></textarea>
								</div>

							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
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
