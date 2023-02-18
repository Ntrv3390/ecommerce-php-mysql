<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$order_id=get_safe_value($con,$_GET['id']);
$coupon_details=mysqli_fetch_assoc(mysqli_query($con,"select coupon_value, coupon_code from `order` where id='$order_id'"));
if(isset($_POST['update_order_status'])){
	$update_order_status=$_POST['update_order_status'];
	if($update_order_status=='5'){
		mysqli_query($con,"update `order` set order_status='$update_order_status',payment_status='Success' where id='$order_id'");
		sentInvoice($con,$order_id);
	}else{
		mysqli_query($con,"update `order` set order_status='$update_order_status' where id='$order_id'");
		sentInvoice($con,$order_id);
	}
	
}
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Details > <?php echo $order_id; ?></h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
								<thead>
									<tr>
										<th class="product-thumbnail">Product Name</th>
										<th class="product-thumbnail">Product Image</th>
										<th class="product-name">Qty</th>
										<th class="product-price">Price</th>
										<th class="product-price">Total Price</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$res1=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,`product`.product_title_black,`product`.product_title_blue,`product`.image,`order`.address,`order`.city,`order`.pincode from `order_detail`,`product` ,`order` where `order_detail`.order_id='$order_id' and  `order_detail`.product_id=`product`.id GROUP by order_detail.id");
									
									$userInfo=mysqli_fetch_assoc(mysqli_query($con,"select * from `order` where id='$order_id'"));
									$first_name=$userInfo['first_name'];
									$last_name=$userInfo['last_name'];
									$email=$userInfo['email'];
									$number=$userInfo['phone'];
									$address=$userInfo['address'];
									$city=$userInfo['city'];
									$state=$userInfo['state'];
									$pincode=$userInfo['pincode'];
									
									while($row1=mysqli_fetch_assoc($res1)){
									
									$total_price=($row1['qty']*$row1['price']);
									?>
									<tr>
										<td class="product-name"><?php echo $row1['product_title_black'].' '.$row1['product_title_blue']?></td>
										<td class="product-name"> <img src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['image']?>"></td>
										<td class="product-name"><?php echo $row1['qty']?></td>
										<td class="product-name">₹ <?php echo $row1['price']?></td>
										<td class="product-name">₹ <?php echo $total_price; ?></td>
										
									</tr>
									<tr><?php if($coupon_details['coupon_value']!=''){ ?>
										<td colspan="3"></td>
										<td class="product-name">Coupon Value</td>
										<td class="product-name">
										₹ <?php echo $coupon_details['coupon_value']; ?> (<?php echo $coupon_details['coupon_code']; ?>)</td>
										
									</tr>
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Total Price</td>
										<td class="product-name">
										₹ <?php echo $total_price-$coupon_details['coupon_value']; ?></td>
										
									</tr><?php }else{?>
										<tr>
										<td colspan="3"></td>
										<td class="product-name">Total Price</td>
										<td class="product-name">
										₹ <?php echo $total_price; ?></td>
										
									</tr>
									<?php } ?>
									<?php } ?>
								</tbody>
							
						</table>
						<div id="address_details">
							<strong>Name</strong>
							<?php echo $first_name.' '.$last_name?><br/><br/>
							<strong>Email</strong>
							<?php echo $email?><br/><br/>
							<strong>Number</strong>
							<?php echo $number?><br/><br/>
							<strong>Address</strong>
							<?php echo $address?>, <?php echo $city?>, <?php echo $state?>, <?php echo $pincode?><br/><br/>
							<strong>Order Status</strong>
							<?php 
							$order_status_arr=mysqli_fetch_assoc(mysqli_query($con,"select order_status.name from order_status,`order` where `order`.id='$order_id' and `order`.order_status=order_status.id"));
							echo $order_status_arr['name'];
							?>
							
							<div>
								<form method="post">
									<select class="form-control" name="update_order_status" required>
										<option value="">Select Status</option>
										<?php
										$res1=mysqli_query($con,"select * from order_status");
										while($row1=mysqli_fetch_assoc($res1)){
											if($row1['id']==$categories_id){
												echo "<option selected value=".$row1['id'].">".$row1['name']."</option>";
											}else{
												echo "<option value=".$row1['id'].">".$row1['name']."</option>";
											}
										}
										?>
									</select>
									<input type="submit" class="form-control"/>
								</form>
							</div>
						</div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>