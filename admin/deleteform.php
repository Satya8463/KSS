<?php
	include('../dbcon.php');

	
	$id=$_REQUEST['sid'];
	
	$qry="delete from seeker_detail where seek_id='$id';";
	
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
		alert('Data Deleted Successfully');
		window.open('deleteseeker.php','_self');
		</script>
		<?php
	}
?>