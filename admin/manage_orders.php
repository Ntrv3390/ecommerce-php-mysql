<?php
require('top.inc.php');
$sql1="select * from users order by id desc";
$res1=mysqli_query($con,$sql1);
$sql="select * from settings";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$status=get_safe_value($con,$_GET['status']);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Manage Orders </h4>
				   <form method="get" action="search_orders">
							<div class="card-body card-block">
                                <div class="form-group" style="margin-top: -50px; margin-left:400px;">
									<input  type="text" style="width:70%;margin-bottom:-5px;height:45px;margin-left:58px;" name="search" placeholder="Search in orders..." class="form-control">
							        <button style="width: 25%;margin-top: -62px;height: 45px;margin-left:440px;" id="payment-button" name="search_submit" type="submit" class="btn btn-lg btn-info btn-block"><span id="payment-button-amount">Search</span>
							        </button>
							    </div>
							</div>
						</form>
				   <span>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="<?php echo SITE_PATH ?>/admin/manage_orders/1">Pending Orders |</a></h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="<?php echo SITE_PATH ?>/admin/manage_orders/2">Processing Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="<?php echo SITE_PATH ?>/admin/manage_orders/3">Shipped Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="<?php echo SITE_PATH ?>/admin/manage_orders/4">Cancelled Orders |</a> </h4>
				   <h4 style="display:inline;font-size:17px;margin-right:10px;" class="box-title"><a href="<?php echo SITE_PATH ?>/admin/manage_orders/5">Delivered Orders </a> </h4>
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
								
							</tbody>
							
						</table>
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
	xhttp.open("GET","<?php echo SITE_PATH ?>/admin/realtime_orders?status=<?php echo $status;?>",true);
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