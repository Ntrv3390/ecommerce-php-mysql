<?php
require('top.inc.php');
$search='';
$status=get_safe_value($con,$_GET['status']);
$search=get_safe_value($con,$_GET['search']);
if($status=='1'){
	$sql1="select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='1' and `order`.payment_status='success' order by `order`.id desc";
	$res1=mysqli_query($con,$sql1);
}else if($status=='2'){
	$res1=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='2'and `order`.payment_status='success' order by `order`.id desc");
}else if($status=='3'){
	$res1=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='3' and `order`.payment_status='success' order by `order`.id desc");
}else if($status=='4'){
	$res1=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='4' and `order`.payment_status='success' order by `order`.id desc");
}else if($status=='5'){
	$res1=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='5' and `order`.payment_status='success' order by `order`.id desc");
}
else{
	//nothing;
}
								while($row1=mysqli_fetch_assoc($res1)){
								?>
								<tr>
									<td class="product-add-to-cart"><?php echo $row1['id']?><br><a href="<?php echo SITE_PATH?>/admin/order_details/<?php echo $row1['id']?>"> View Details</a></td>
									<td class="product-name"><?php echo $row1['added_on']?></td>
									<td class="product-name">
									<?php echo $row1['address']?><br/>
									<?php echo $row1['city']?><br/>
									<?php echo $row1['pincode']?>
									</td>
									<td class="product-name"><?php echo $row1['payment_type']?></td>
									<td class="product-name"><?php echo $row1['payment_status']?></td>
									<td class="product-name"><?php echo $row1['order_status_str']?></td>
									
								</tr>
								<?php } ?>