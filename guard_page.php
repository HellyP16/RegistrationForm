<?php

include('connect.php');
session_start();

if(!isset($_SESSION['g_id']))
{
	header('Location:g_login.php');
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GUARD PAGE</title>
<link rel="stylesheet" type="text/css" href="guardpage.css">
</head>


<br />


<body>

	<div class="hdr">
		
		<?php

		$a="SELECT * FROM guard WHERE g_id='".$_SESSION['g_id']."'";
		$b=mysqli_query($conn,$a);
		$row=mysqli_fetch_array($b);

		echo"WELCOME"." ". strtoupper($row['name']);


		?>

	</div>
	<div class="cntr">
		<legend align="center">
			<button class="btn"><a href="feedback.php">FEEDBACK</a></button>
		</legend>


	</div>

	<div class="foot">
		
		<legend align="center"><button class="btn"><a href="guard_logout.php">LOGOUT</a></button></legend>


	</div>


</body>
</html>