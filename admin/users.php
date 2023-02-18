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
		$update_status_sql="update users set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from users where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
}
$sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from users";
if(isset($_GET['search_submit']))
{
    $search = get_safe_value($con,$_GET['search']);
    if($search!=''){
        $sql1.=" where users.id like '%$search%' or users.name like '%$search%' or users.email like '%$search%' or users.number like '%$search%' order by id desc";
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
				   <h4 class="box-title">Manage Users </h4>
				    <form method="get">
							<div class="card-body card-block">
                                <div class="form-group" style="margin-top: -50px; margin-left:400px;">
									<input  type="text" style="width:70%;margin-bottom:-5px;height:45px;margin-left:58px;" name="search" placeholder="Search in users - id, name, email, number..." class="form-control">
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
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Date</th>
                               <th>Status</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row1=mysqli_fetch_assoc($res1)){?>
							<tr>
							   <td><?php echo $row1['id']?></td>
							   <td><?php echo $row1['name']?></td>
							   <td><?php echo $row1['email']?></td>
							   <td><?php echo $row1['number']?></td>
							   <td><?php echo $row1['added_on']?></td>
							   <td>
                               <?php
								if($row1['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row1['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row1['id']."'>Deactive</a></span>&nbsp;";
								}
                                echo "<span class='badge badge-edit'><a href='update_user_details?id=".$row1['id']."'>Edit</a></span>&nbsp;";
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