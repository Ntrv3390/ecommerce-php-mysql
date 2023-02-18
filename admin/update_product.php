<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from product";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_POST['submit'])){
	$product_title_black=get_safe_value($con,$_POST['product_title_black']);
    $product_title_blue=get_safe_value($con,$_POST['product_title_blue']);
    $description=get_safe_value($con,$_POST['description']);
	$why_sneaker_wipes=get_safe_value($con,$_POST['why_sneaker_wipes']);
	$direction_of_use=get_safe_value($con,$_POST['direction_of_use']);
    $warning=get_safe_value($con,$_POST['warning']);
    $cancel_price=get_safe_value($con,$_POST['cancel_price']);
    $actual_price=get_safe_value($con,$_POST['actual_price']);
    $in_stock=get_safe_value($con,$_POST['in_stock']);
    $meta_ptitle=get_safe_value($con,$_POST['meta_ptitle']);
	$meta_pkey=get_safe_value($con,$_POST['meta_pkey']);
    $meta_pdesc=get_safe_value($con,$_POST['meta_pdesc']);
	
	mysqli_query($con,"update product set product_title_black='$product_title_black',product_title_blue='$product_title_blue',description='$description',why_sneaker_wipes='$why_sneaker_wipes',direction_of_use='$direction_of_use',warning='$warning',cancel_price='$cancel_price',actual_price='$actual_price',in_stock='$in_stock',meta_ptitle='$meta_ptitle',meta_pkey='$meta_pkey',meta_pdesc='$meta_pdesc'");
	?>
	 
	<script>
	window.location.href="product";
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
                        <div class="card-header"><strong>Update Product Details</strong></div>
                        <form method="post">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="product_title_black" class=" form-control-label">Heading (black)</label>
									<input type="text"  name="product_title_black" placeholder="" class="form-control" value="<?php echo $row1[1];?>">
								</div>
                                <div class="form-group">
									<label for="product_title_blue" class=" form-control-label">Heading (blue)</label>
									<input type="text"  name="product_title_blue" placeholder="" class="form-control" value="<?php echo $row1[2];?>">
								</div>
                                <div class="form-group">
									<label for="description" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="description" placeholder="" class="form-control"><?php echo $row1[4];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Why Sneaker Wipes?</label>
									<textarea type="text" id="ckedit1" name="why_sneaker_wipes" placeholder="" class="form-control"><?php echo $row1[11];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Direction Of Use</label>
									<textarea type="text" id="ckedit2" name="direction_of_use" placeholder="" class="form-control"><?php echo $row1[12];?></textarea>
								</div>
								<div class="form-group">
									<label for="description" class=" form-control-label">Warning</label>
									<textarea type="text" id="ckedit3" name="warning" placeholder="" class="form-control"><?php echo $row1[13];?></textarea>
								</div>
                                <div class="form-group">
									<label for="cancel_price" class=" form-control-label">Cancelled Price</label>
									<input type="number"  name="cancel_price" placeholder="" class="form-control" value="<?php echo $row1[5];?>">
								</div>
                                <div class="form-group">
									<label for="actual_price" class=" form-control-label">Price</label>
									<input type="number"  name="actual_price" placeholder="" class="form-control" value="<?php echo $row1[6];?>">
								</div>
                                <div class="form-group">
									<label for="in_stock" class=" form-control-label">In Stock</label>
									<input type="number"  name="in_stock" placeholder="" class="form-control" value="<?php echo $row1[7];?>">
								</div>
                                <div class="form-group">
									<label for="meta_ptitle" class=" form-control-label">Product - Meta Title</label>
									<textarea type="text" name="meta_ptitle" placeholder="" class="form-control"><?php echo $row1[8];?></textarea>
								</div>
								<div class="form-group">
									<label for="meta_pkey" class=" form-control-label">Product - Meta keywords</label>
									<textarea type="text" id="ckedit4"  name="meta_pkey" placeholder="" class="form-control"><?php echo $row1[9];?></textarea>
								</div>
                                <div class="form-group">
									<label for="meta_pdesc" class=" form-control-label">Product - Meta Description</label>
									<textarea type="text" id="ckedit5"  name="meta_pdesc" placeholder="" class="form-control"><?php echo $row1[10];?></textarea>
								</div>
                                
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Update Product Details</span>
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