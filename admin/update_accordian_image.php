<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
    $img=get_safe_value($con,$_GET['img']);
$sql1="select * from accordian";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
  
if(isset($_POST['submit'])){
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'../wp-content/uploads/2022/08/'.$_FILES['image']['name']);
    if($img==1){
	mysqli_query($con,"update accordian set img1='$image' ");
	
    }else if($img==2){
        	mysqli_query($con,"update accordian set img2='$image' ");
        	
    }else if($img==3){
        	mysqli_query($con,"update accordian set img3='$image' ");
        		
    }else if($img==4){
        	mysqli_query($con,"update accordian set img4='$image' ");
        		
    }else{
        //nothing
    }
    	?>
    	<script>window.location.href="accordian"</script>
    	<?php
    	die();

	}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update Accordian Image</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
                            <div class="form-group">
									<label for="categories" class=" form-control-label">Old Accordian Image</label></br>
									<?php if($img==1){ ?>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img1']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
									<?php } ?>
									<?php if($img==2){ ?>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img2']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
									<?php } ?>
									<?php if($img==3){ ?>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img3']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
									<?php } ?>
									<?php if($img==4){ ?>
									<img width="200" height="150" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['img4']?> 100w" sizes="(max-width: 200px) 50vw, 200px"></br>
									<?php } ?>
								</div>
                                <div class="form-group">
									<label for="image" class=" form-control-label">Upload New Accordian Image</label>
									<input type="file" required name="image" class="form-control">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Upload New Accordian Image</span>
							   </button>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>