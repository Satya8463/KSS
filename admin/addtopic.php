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





<form method="post" action="addtopic.php">
<table align="center" border="1" style="width:70%; margin-top:40px;">



  <th>Topic Area Name</th>
  <td><input type="text" name="tareanm"></td>
 </tr> 
<tr>
  <th>Topic Description</th>
  <td><input type="text" name="topicds"></td>
 </tr>
<tr>
  <th>Topic Status</th>
  <td><input type="text" name="status"></td>
 </tr>
<tr>
  <th colspan="2" align="center"><input type="submit" name="submit" value="CREATE"></th>
</tr>

</table>
</form>



<?php
if(isset($_POST['submit']))
{
	
$tareanm=$_POST["tareanm"];
$topicds=$_POST["topicds"];
$status=$_POST["status"];

include('../dbcon.php');
$sql="insert into topic_area(areaname,topicdescription,status) values('$tareanm','$topicds','$status')";
$run=mysqli_query($con,$sql);

if($run==true)
	{
		?>
		<script>
		alert('Topic Area Created Successfully');
		</script>
		<?php
	}

}
?>

