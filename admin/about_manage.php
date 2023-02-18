<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from about";
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
                        <div class="card-header"><strong>Manage About Section</strong>
                        <h4 class="box-link"><a href="update_about">Update About Section</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">About Title</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1['about_title'];?>">
								</div>
                                
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea id="ckedit2" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row1['about_description'];?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keywords</label>
									<textarea id="ckedit5" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row1['meta_keyword'];?></textarea>
								</div>
							   
                                
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea id="ckedit4" type="text" readonly name="categories" placeholder="" class="form-control"><?php echo $row1['meta_description'];?></textarea>
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
var editor4 = CKEDITOR.replace( 'ckedit4' );
CKFinder.setupCKEditor( editor4 );
var editor5 = CKEDITOR.replace( 'ckedit5' );
CKFinder.setupCKEditor( editor5 );
		 </script>
<?php
require('footer.inc.php');
?>