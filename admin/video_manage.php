<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from video";
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
                        <div class="card-header"><strong>Video Section Management</strong>
                        <h4 class="box-link"><a href="video_update">Update Video Section </a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Black Title</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['title_black'];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Blue Title</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['title_blue'];?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Video Link</label></label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['video_link'];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Paragraph</label>
									<textarea id="ckedit2" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row1['para'];?></textarea>
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
		 </script>
<?php
require('footer.inc.php');
?>