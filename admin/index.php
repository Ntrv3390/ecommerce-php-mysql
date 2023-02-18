<?php
require('top.inc.php');
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  	<div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Dashboard</h4>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#e63030;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Today's Sales</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php 
					$start=date('Y-m-d'). ' 00-00-00';
					$end=date('Y-m-d'). ' 23-59-59';
					echo "₹".getSale($start,$end);
					?>
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#6065fc;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Last 7 Day's Sales</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php 
					$start=strtotime(date('Y-m-d'));
					$start=strtotime("-7 day",$start);
					$start=date('Y-m-d',$start);
					$end=date('Y-m-d'). ' 23-59-59';
					echo "₹".getSale($start,$end);
					?>
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#14cc6d;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Last 30 Day's Sales</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php 
					$start=strtotime(date('Y-m-d'));
					$start=strtotime("-30 day",$start);
					$start=date('Y-m-d',$start);
					$end=date('Y-m-d'). ' 23-59-59';
					echo "₹".getSale($start,$end);
					?>
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#be1cc7;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Last 365 Day's Sales</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php 
					$start=strtotime(date('Y-m-d'));
					$start=strtotime("-365 day",$start);
					$start=date('Y-m-d',$start);
					$end=date('Y-m-d'). ' 23-59-59';
					echo "₹".getSale($start,$end);
					?>
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#18ba74;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Product Stock</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_stock = "select in_stock from `product`";
						$res_stock=mysqli_query($con,$sql_stock);
						$row_stock=mysqli_fetch_array($res_stock);
						$stock = $row_stock['in_stock'];
						if($stock > 0)
						{
						echo $stock;
						}
						else
						{
						    echo "Stock Not Available";
						}
					?>
				
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#c92688;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Orders Pending</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select order_status from `order` where order_status='1'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#d1344c;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Orders Processing</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select order_status from `order` where order_status='2'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#522d9c;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Orders Shipped</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select order_status from `order` where order_status='3'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				
				</p>
				</div>
			</div>
			
			<div class="card" style="width: 18rem;display:inline-block;background-color:#804a94;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Orders Delivered (till date)</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
				
					<?php
						$sql_pend = "select order_status from `order` where order_status='5'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#1e8a32;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Newsletter Subscribers</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select email from `email_subscribe` where status='1'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#d113a5;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Total Blogs (Published)</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select id from `blog` where status='1'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;display:inline-block;background-color:#db784d;color:#fff;">
				<div class="card-body">
					<h5 class="card-title"><b>Total Testimonials</b></h5>
					<p class="card-text" style="font-size:27px;color:#fff;">
					<?php
						$sql_pend = "select id from `testimonial` where status='1'";
						$res_pend=mysqli_query($con,$sql_pend);
						$count = mysqli_num_rows($res_pend);
						echo $count;
					?>
				
					</p>
				</div>
			</div>
			
			<div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Realtime Orders (Current Day)</h4>
				   <h4 class="box-title"><a href="manage_orders/1">View All</a></h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
				   <table class="table ">
						 <thead>
							<tr>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Phone No.</th>
							   <th>Payment Type</th>
							   <th>Payment Status</th>
							   <th>Order Status</th>
							</tr>
						 </thead>
					<tbody id="realtime_order">

					</tbody>
					</table>
					</div>
				</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<script>
function loadXMLDoc(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
		document.getElementById("realtime_order").innerHTML= this.responseText;
		}
	};
	xhttp.open("GET","realtime_order",true);
	xhttp.send();
}
setInterval(function(){
loadXMLDoc();
},4000);
window.onload = loadXMLDoc();
</script>
<?php
require('footer.inc.php');
?>