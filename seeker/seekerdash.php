<?php
session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../seekerlogin.php');
	}
?>
<?php

 include('seekheader.php');
?>

<div class="admintitle" align="center">
<h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
<h1>Welcome to Seeker Dashboard</h1>
</div>

<div class="dashboard">

<table  style="width:50% ;" align="center">


	<tr>
		<td>1.</td><td><a href="download.php">Download Material</a></td>
	</tr>
	
	

</table>

</div>

</body>
</html>
