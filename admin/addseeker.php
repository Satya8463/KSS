<?php
session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>
<?php
 include('header.php');
  include('titleheader.php');
?>

<form method="post" action="addseeker.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
<th>Username</th>
<td><input type="text" name="uname" placeholder="Enter E-Mail" required></td>
</tr>


<tr>
<th>Password</th>
<td><input type="password" name="pass" placeholder="Enter Password" required></td>
</tr>

<tr>
<th>Confirm Password</th>
<td><input type="password" name="cnfmpass" placeholder="Enter Confirm Password" required></td>
</tr>


<tr>
<th>Name</th>
<td><input type="text" name="name" placeholder="Enter Name" required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="seeker_image" required></td>
</tr>


<tr>
 <th>Gender</th>
 <td><input type="radio"name="gen"value="Male">Male
<input type="radio"name="gen"value="Female">Female
 </td> 
</tr>


<tr>
<th>Age</th>
<td><input type="text" name="age" placeholder="Enter Age" required></td>
</tr>

<tr>
<th>Date of Birth</th>
<td><input type="date" name="dob" required></td>
</tr>


<tr>
<th>Mobile</th>
<td><input type="text" name="mob" placeholder="Enter Mobile Number" required></td>
</tr>


<tr>
<th>Address</th>
<td><input type="text" name="eadd" placeholder="Enter Address" required></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
	
	include('../dbcon.php');
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$cnfm_password=$_POST['cnfmpass'];
	$name=$_POST['name'];
	$imagename=$_FILES['seeker_image']['name'];
	$tempname=$_FILES['seeker_image']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	$egen=$_POST['gen'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$mob=$_POST['mob'];
	$add=$_POST['eadd'];
	
	
	
	
	$qry="insert into seeker_detail(username,password,cnfm_password,name,image,gender,age,dob,mobile,address) values('$username','$password','$cnfm_password','$name','$imagename','$egen','$age','$dob','$mob','$add')";
	
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
		alert('Data Inserted Successfully');
		</script>
		<?php
	}
}
?>
