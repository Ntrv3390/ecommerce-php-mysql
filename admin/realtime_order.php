<?php require('top.inc.php');?>

						<?php 
							$start=date('Y-m-d'). ' 00-00-00';
							$end=date('Y-m-d'). ' 23-59-59';
							$sql1="select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status and `order`.order_status='1' and `order`.payment_status='success' and added_on between '$start' and '$end' order by `order`.id desc";
							$res1=mysqli_query($con,$sql1);
							while($row1=mysqli_fetch_assoc($res1)){?>
							<tr>
							<td>
							<?php echo $row1['id']?><br><a href="order_details?id=<?php echo $row1['id']?>"> View Details</a></td>
							   <td><?php echo $row1['first_name'].$row1['last_name'];?></td>
							   <td><?php echo $row1['email'];?></td>
							   <td><?php echo $row1['phone'];?></td>
							   <td><?php echo $row1['payment_type'];?></td>
							   <td><?php echo $row1['payment_status'];?></td>
							   <td><?php echo $row1['order_status_str'];?></td>
							</tr>
						<?php } ?>

						
					