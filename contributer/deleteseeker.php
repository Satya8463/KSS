<?php
session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../conlogin.php');
	}
?>
<?php
 include('conheader.php');
  include('contitleheader.php');
?>
<table align="Center"> 
<form action="deleteseeker.php" method="POST">
<tr>

<th>Enter Seeker Id</th>
<td><input type="number" name="id" palceholder="Enter Id" required></td>

<th>Enter Seeker Name</th>
<td><input type="text" name="seekername" palceholder="Enter Seeker Name" required></td>

<td colspan="2"><input type="submit" name="submit" value="Search"></td>
</tr>
</form>
</table>

<table border="1" align="center" width="80%" style="margin-top:10px;">
<tr style="background-color:#000; color:#fff;">
<th>Seeker Id</th>
<th>Seeker Name</th>
<th>Seeker Image</th>
<th>Seeker Gender</th>
<th>Seeker Age</th>
<th>Seeker Date of Birth</th>
<th>Seeker Mobile</th>
<th>Seeker Address</th>
</tr>

<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$id=$_POST['id'];
	$name=$_POST['seekername'];
	$sql="select * from seeker_detail where seek_id='$id' and name LIKE '%$name%'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
	echo"<tr><td colspan='10'>No Record Found</td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr>
<td><?php echo $count; ?></td>
<td><?php echo $data['name'];?></td>
<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
<td><?php echo $data['gender'];?></td>
<td><?php echo $data['age'];?></td>
<td><?php echo $data['dob'];?></td>
<td><?php echo $data['mobile'];?></td>
<td><?php echo $data['address'];?></td>
<th><a href="deleteform.php?sid=<?php echo $data['seek_id']?>">Delete</a></th>
</tr>
				<?php
			}
	}
}
?>

</table>


