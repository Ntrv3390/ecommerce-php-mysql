<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from product";
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
                        <div class="card-header"><strong>Product Details</strong>
                        <h4 class="box-link"><a href="update_product">Update Product Detail</a> </h4>
                    </div>
                        
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (black)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Heading (blue)</label>
									<input type="text" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Product Image</label></br>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['image']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['image']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['image']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
                                    <a href="update_product_image">Update Product Image</a>
								</div>
                            
								<div class="form-group">
									<label for="description" class=" form-control-label">Description</label>
									<textarea id="ckedit" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1[4];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Why Sneaker Wipes?</label>
									<textarea id="ckedit1" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1[11];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Direction Of Use</label>
									<textarea id="ckedit2" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1[12];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Warning</label>
									<textarea id="ckedit3" type="text" readonly name="description" placeholder="" class="form-control"><?php echo $row1[13];?></textarea>
								</div>
                                
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Cancelled Price</label>
									<input type="number" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[5];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="number" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[6];?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">In Stock</label>
									<input type="number" readonly name="categories" placeholder="" class="form-control" value="<?php echo $row1[7];?>">
								</div>

                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<textarea type="text" id=""  readonly name="categories" placeholder="" class="form-control"><?php echo $row1[8];?></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keywords</label>
									<textarea type="text" id="ckedit4"  readonly name="categories" placeholder="" class="form-control"><?php echo $row1[9];?></textarea>
								</div>
                                
                                
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea type="text" id="ckedit5"  readonly name="categories" placeholder="" class="form-control"><?php echo $row1[10];?></textarea>
								</div>
							   
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
var editor1 = CKEDITOR.replace( 'ckedit1' );
CKFinder.setupCKEditor( editor1 );
			var editor2 = CKEDITOR.replace( 'ckedit2' );
CKFinder.setupCKEditor( editor2 );
var editor3 = CKEDITOR.replace( 'ckedit3' );
CKFinder.setupCKEditor( editor3 );
var editor4 = CKEDITOR.replace( 'ckedit4' );
CKFinder.setupCKEditor( editor4 );
var editor5 = CKEDITOR.replace( 'ckedit5' );
CKFinder.setupCKEditor( editor5 );
		 </script>
         
<?php
require('footer.inc.php');
?>