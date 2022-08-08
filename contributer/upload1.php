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
<form action="upload1.php" method="POST">
<tr>

<th>Enter Topic Id</th>
<td><input type="number" name="id" palceholder="Enter Topic Id" required></td>

<th>Enter Topic Name</th>
<td><input type="text" name="name" palceholder="Enter Area Name" required></td>

<td colspan="2"><input type="submit" name="submit" value="Search"></td>
</tr>
</form>
</table>


<?php
include('../dbcon.php');
if(isset($_POST['submit']))
{
$areaid=$_POST['id'];
$areaname=$_POST['name'];	

$qry="select * from topic_area where areaid='$areaid'  and areaname LIKE '%$areaname%'";
$run=mysqli_query($con, $qry);
$row=mysqli_num_rows($run);

if(mysqli_num_rows($run)<1)
{
	?>
	
	<script>
	alert('Id and Name is not Matched !!');
	window.open('upload1.php', '_self');
	</script>
	<?php	
}
else
{

	header('location:upload2.php');
}
}

?>



