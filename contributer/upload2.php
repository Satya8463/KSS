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

<form method="post" action="upload2.php" enctype="multipart/form-data">
<table align="center">
<tr>
<th>File Upload</th>
<td><input type="file" name="file" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Upload"></td>
</tr>
</table>
</form>

<?php
include('../dbcon.php');
if(isset($_REQUEST['submit']))
{
	$file=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$path="../uploads/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","pdf","txt","docx","ppt");
	if(in_array($ext,$allowed))
	{
		move_uploaded_file($tmp_name,$path);
		$res="insert into knowledge_detail(k_file) values('$file')";
	
		$run=mysqli_query($con,$res);

		if($run==true)
			{
			?>
			<script>
			alert('Document Uploaded Successfully');
			</script>
			<?php
			}
	}
}
?>