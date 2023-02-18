<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update testimonial set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from testimonial where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
}
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from testimonial";
if(isset($_GET['search_submit']))
{
    $search = get_safe_value($con,$_GET['search']);
    if($search!=''){
        $sql1.=" where testimonial.id like '%$search%' or testimonial.client_name like '%$search%' or testimonial.description like '%$search%' order by id desc";
    }
}else{
        $sql1.=" order by id desc";
    }
$res1=mysqli_query($con,$sql1);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Testimonials </h4>
                   <h4 class="box-link"><a href="update_testimonial">Add new testimonial</a> </h4>
                   <form method="get">
							<div class="card-body card-block">
                                <div class="form-group" style="margin-top: -70px; margin-left:400px;">
									<input  type="text" style="width:70%;margin-bottom:-5px;height:45px;margin-left:58px;" name="search" placeholder="Search in testimonials - id, name, description..." class="form-control">
							        <button style="width: 25%;margin-top: -62px;height: 45px;margin-left:440px;" id="payment-button" name="search_submit" type="submit" class="btn btn-lg btn-info btn-block"><span id="payment-button-amount">Search</span>
							        </button>
							    </div>
							</div>
						</form>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							  
							   <th>ID</th>
							   <th>Client Name</th>
							   <th>Description</th>
							   <th>Background Color</th>
							   <th>Added On</th>
                               <th>Status</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row1=mysqli_fetch_assoc($res1)){?>
							<tr>
							   <td><?php echo $row1['id']?></td>
							   <td><?php echo $row1['client_name']?></td>
							   <td><?php echo $row1['description']?></td>
							   <td><?php echo $row1['color']?></td>
							   <td><?php echo $row1['added_on']?></td>
							   <td>
                               <?php
								if($row1['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row1['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row1['id']."'>Deactive</a></span>&nbsp;";
								}
                                echo "<span class='badge badge-edit'><a href='update_testimonial/".$row1['id']."'>Edit</a></span>&nbsp;";
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row1['id']."'>Delete</a></span>";
								?>
							   </td>
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