<h2><a href="../index.php">Back to Index</a></h2>
<html>
<head>
<link rel="stylesheet" href="css.css">
<title>Seeker Registration</title>
</head>
<body bgcolor="lightgreen">
<br><br><br>
<h1 align="center" class="style1 style3">Seeker Registration</h1>

<form method="post" action="seekerreg.php" enctype="multipart/form-data">
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
include('../dbcon.php');	
if(isset($_POST['submit']))
{	
	
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
		alert('Registration Successfully Done');
		</script>
		<?php
	}
}
?>
