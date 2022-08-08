
<?php
include('seektitleheader.php');
include('seekheader.php');
	include('../dbcon.php');
	$qry="select * from knowledge_detail";
	$run=mysqli_query($con,$qry);
	$rowcount=mysqli_num_rows($run);
?>
<table border="1" align="center">
<tr>
<td>Files</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	 $row=mysqli_fetch_array($run);
	 ?>
	 <tr>
	 <td><a href="../uploads/<?php echo $row['k_file'];?>"><?php echo $row['k_file']?></a></td>
	 </tr>
<?php
}
?>
</table>