<?php
require('top.inc.php');
$sqliii="select * from settings";
   $res=mysqli_query($con,$sqliii);
   $row=mysqli_fetch_array($res);
   $alias='';
$blog_title='';
$blog_category='';
$blog_image='';
$blog_description='';
$author='';
$meta_keyword='';
$meta_description	='';
$image_required='required';
$msg='';

if(isset($_GET['alias']) && $_GET['alias']!=''){
	$image_required='';
	$alias=get_safe_value($con,$_GET['alias']);
	$res1=mysqli_query($con,"select * from blog where alias='$alias'");
	$check=mysqli_num_rows($res1);
	if($check>0){
		$row1=mysqli_fetch_assoc($res1);
		$blog_title=$row1['blog_title'];
		$blog_category=$row1['blog_category'];
		$blog_description=$row1['blog_description'];
		$author=$row1['author'];
        $meta_keyword=$row1['meta_keyword'];
		$meta_description=$row1['meta_description'];
		
	}else{
		header('location:<?php echo SITE_PATH ?>/admin/manage_blog');
		die();
	}
}

if(isset($_POST['submit'])){
    if(!isset($_GET['alias'])){
    $alias=get_safe_value($con,$_POST['alias']);
    }
	$blog_title=get_safe_value($con,$_POST['blog_title']);
	$blog_category=get_safe_value($con,$_POST['blog_category']);
	$blog_description=get_safe_value($con,$_POST['blog_description']);
	$author=get_safe_value($con,$_POST['author']);
    $meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
	$meta_description=get_safe_value($con,$_POST['meta_description']);
	
	
	if(isset($_GET['alias']) && $_GET['alias']!=0){
		if($_FILES['blog_image']['type']!='image/png' && $_FILES['blog_image']['type']!='image/jpg' && $_FILES['blog_image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['blog_image']['type']!=''){
				if($_FILES['blog_image']['type']!='image/png' && $_FILES['blog_image']['type']!='image/jpg' && $_FILES['blog_image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['alias']) && $_GET['alias']!=''){
			if($_FILES['blog_image']['name']!=''){
				$blog_image=rand(111111111,999999999).'_'.$_FILES['blog_image']['name'];
				move_uploaded_file($_FILES['blog_image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$blog_image);
				$update_sql="update blog set blog_title='$blog_title',blog_category='$blog_category',blog_image='$blog_image',blog_description='$blog_description',author='$author',meta_keyword='$meta_keyword',meta_description='$meta_description' where alias='$alias'";
			}else{
				$update_sql="update blog set blog_title='$blog_title',blog_category='$blog_category',blog_image='$blog_image',blog_description='$blog_description',author='$author',meta_keyword='$meta_keyword',meta_description='$meta_description' where alias='$alias'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$blog_image=rand(111111111,999999999).'_'.$_FILES['blog_image']['name'];
			move_uploaded_file($_FILES['blog_image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$blog_image);
			mysqli_query($con,"insert into blog(alias,blog_title,blog_category,blog_image,blog_description,author,meta_keyword,meta_description,status) values('$alias','$blog_title','$blog_category','$blog_image','$blog_description','$author','$meta_keyword','$meta_description','1')");
		}
        ?>
	<script>	window.location.href="<?php echo SITE_PATH ?>/admin/manage_blog";</script>
        <?php
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
                        <div class="card-header"><strong>Add/Update Blogs</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
                            <?php if(!isset($_GET['alias'])){  ?>
                            <div class="form-group">
									<label for="categories" class=" form-control-label">Alias (Unique, Dont't leave space use "-")</label>
									<input type="text" name="alias" placeholder="Enter blog alias" class="form-control" required>
								</div>
                            <?php } ?>
                               <div class="form-group">
									<label for="categories" class=" form-control-label">Blog Title</label>
									<input type="text" name="blog_title" placeholder="Enter blog title" class="form-control" required value="<?php echo $blog_title?>">
								</div>

									<label for="categories" class=" form-control-label">Select Category</label>
									<select class="form-control" name="blog_category" id="blog_category"  required>
										<option>Select Category</option>
										<?php
										$res2=mysqli_query($con,"select id,categories from blog_categories order by categories asc");
										while($row2=mysqli_fetch_assoc($res2)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row2['id'].">".$row2['categories']."</option>";
											}else{
												echo "<option value=".$row2['id'].">".$row2['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="blog_image" class="form-control">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea type="text" id="ckedit" name="blog_description" placeholder="" class="form-control"><?php echo $blog_description ?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Author</label>
									<input type="text" name="author" placeholder="Enter author name" class="form-control" required value="<?php echo $author?>">
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keywords</label>
									<textarea type="text" id="ckedit1" name="meta_keyword" placeholder="" class="form-control"><?php echo $meta_keyword ?></textarea>
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea type="text" id="ckedit2" name="meta_description" placeholder="" class="form-control"><?php echo $meta_description ?></textarea>
								</div>

								
								
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Add/Update Blog</span>
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
</script>
        
         
<?php
require('footer.inc.php');
?>
