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
?>

<div class="admintitle" align="center">
<h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
<h1>Welcome to Contributer Dashboard</h1>
</div>

<div class="dashboard">

<table  style="width:50% ;" align="center">


	<tr>
		<td>1.</td><td><a href="updateseeker.php">Update Seeker Details</a></td>
	</tr>
	
	<tr>
		<td>2.</td><td><a href="deleteseeker.php">Delete Seeker Details</a></td>
	</tr>
	
	<tr>
		<td>3.</td><td><a href="addtopic.php">Create Topic Area</a></td>
	</tr>
	
	<tr>
		<td>4.</td><td><a href="upload1.php">Upload Material</a></td>
	</tr>
	

</table>

</div>

</body>
</html>
