<?php
require('top.inc.php');
$sql1="select * from users order by id desc";
$res1=mysqli_query($con,$sql1);
$sql="select * from settings";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$search = get_safe_value($con,$_GET['search']);
$sql1="select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.payment_status='success'";
if($search!=''){
        $sql1.=" and `order`.id like '%$search%' or `order`.first_name like '%$search%' or `order`.last_name like '%$search%' or `order`.state like '%$search%' or `order`.city like '%$search%' or `order`.address like '%$search%' or `order`.phone like '%$search%' order by id desc";
        $res1=mysqli_query($con,$sql1);
    }
	else{
	    ?>
	    <script>window.location.href='manage_orders?status=1';</script>
	    <?php }
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Orders > <?php echo $_GET['search']; ?></h4>
				   <form method="get" action="search_orders.php">
							<div class="card-body card-block">
                                <div class="form-group" style="margin-top: -50px; margin-left:400px;">
									<input  type="text" style="width:70%;margin-bottom:-5px;height:45px;margin-left:58px;" name="search" placeholder="Search in orders..." class="form-control">
							        <button style="width: 25%;margin-top: -62px;height: 45px;margin-left:440px;" id="payment-button" name="search_submit" type="submit" class="btn btn-lg btn-info btn-block"><span id="payment-button-amount">Search</span>
							        </button>
							    </div>
							</div>
						</form>
				   <span>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="manage_orders?status=1">Pending Orders |</a></h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="manage_orders?status=2">Processing Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="manage_orders?status=3">Shipped Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="manage_orders?status=4">Cancelled Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="manage_orders?status=5">Delivered Orders </a> </h4>
				   </span>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">Order ID</th>
									<th class="product-name"><span class="nobr">Order Date</span></th>
									<th class="product-price"><span class="nobr"> Address </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
								</tr>
							</thead>
							<tbody id="realtime_order">
							    <?php
									while($row1=mysqli_fetch_assoc($res1)){
								?>
								<tr>
									<td class="product-add-to-cart"><?php echo $row1['id']?><br><a href="order_details?id=<?php echo $row1['id']?>"> View Details</a></td>
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
							</tbody>
							
						</table>
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