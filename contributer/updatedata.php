<?php
	include('../dbcon.php');
	$id=$_POST['sid'];
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
	
	
	
	
	$sql="update seeker_detail set username='$username',password='$password',cnfm_password='$cnfm_password',name='$name',image='$imagename',gender='$egen',age='$age',dob='$dob',mobile='$mob',address='$add'";
	$run=mysqli_query($con,$sql);
	if($run==true)
	{
		?>
		<script>
		alert('Data Updated Successfully');
		window.open('updateform.php?sid=<?php echo "$id";?>','_self');
		</script>
		<?php
	}
?>