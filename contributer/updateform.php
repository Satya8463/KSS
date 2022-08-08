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

<?php

  include('../dbcon.php');
  $sid=$_GET['sid'];
  
  $sql="select * from seeker_detail where seek_id='$sid'";
  $run=mysqli_query($con,$sql);
  
  $data=mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
<th>Username</th>
<td><input type="text" name="uname" value=<?php echo $data['username'];?>required></td>
</tr>


<tr>
<th>Password</th>
<td><input type="password" name="pass" value=<?php echo $data['password'];?> required></td>
</tr>

<tr>
<th>Confirm Password</th>
<td><input type="password" name="cnfmpass" value=<?php echo $data['cnfm_password'];?> required></td>
</tr>


<tr>
<th>Name</th>
<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="seeker_image" required></td>
</tr>


<tr>
 <th>Gender</th>
 <td><input type="radio"name="gen"value=<?php echo $data['gender'];?>>Male
<input type="radio"name="gen"value=<?php echo $data['gender'];?>>Female
 </td> 
</tr>


<tr>
<th>Age</th>
<td><input type="text" name="age" value=<?php echo $data['age'];?> required></td>
</tr>

<tr>
<th>Date of Birth</th>
<td><input type="date" name="dob" value=<?php echo $data['dob'];?> required></td>
</tr>


<tr>
<th>Mobile</th>
<td><input type="text" name="mob" value=<?php echo $data['mobile'];?> required></td>
</tr>


<tr>
<th>Address</th>
<td><input type="text" name="eadd" value=<?php echo $data['address'];?> required></td>
</tr>


<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['seek_id'];?>">
<input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>
</body>
</html>