<?php

function showdetails($username,$id)
{
	include('dbcon.php');
	$sql="select * from seeker_detail where username='$username' and  id='$id'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)>0)
		
		{
			$data=mysqli_fetch_assoc($run);
			?>
			<table>
			<tr>
			<th colspan="5">Seeker Details</th>
			</tr>
			
			<tr>
			<td rowspan="7"> <img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px;"> </td>
			<th>Id</th>
			<td><?php echo $data['id'];?></td>
			</tr>
			
			<tr>
			<th>Name</th>
			<td><?php echo $data['name'];?></td>
			</tr>
			
			
			<tr>
			<th>Gender</th>
			<td><?php echo $data['gender'];?></td>
			</tr>
			
			<tr>
			<th>Age</th>
			<td><?php echo $data['age'];?></td>
			</tr>
			
			<tr>
			<th>Date Of Birth</th>
			<td><?php echo $data['dob'];?></td>
			</tr>
			
			<tr>
			<th>Mobile</th>
			<td><?php echo $data['mobile'];?></td>
			</tr>
			
			<tr>
			<th>Address</th>
			<td><?php echo $data['address'];?></td>
			</tr>
			
			</table>
			<?php
		}
		else
		{
			echo "<script>alert('No Seeker Found.');</script>";
		}
}
?>