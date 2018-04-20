<?php

include('connect.php');
session_start();

if(!isset($_SESSION['p_id']))
{
	header('Location:p_login.php');
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRISONER PAGE</title>
<link rel="stylesheet" type="text/css" href="prisonerpage.css">
</head>

<?php

$a="SELECT * FROM prisoner WHERE p_id='".$_SESSION['p_id']."'";
$b=mysqli_query($conn,$a);
$row=mysqli_fetch_array($b);

echo"WELCOME"." ". strtoupper($row['name']);


?>
<br />



<body>

	<div class="hdr">
		
		<?php

		$a="SELECT * FROM prisoner WHERE p_id='".$_SESSION['p_id']."'";
		$b=mysqli_query($conn,$a);
		$row=mysqli_fetch_array($b);

		echo"WELCOME"." ". strtoupper($row['name']);


		?>

	</div>

	<div class="cntr">
		
		<legend align="center">
			<button class="btn"><a href="request.php">REQUEST</a></button>
		</legend>

		<legend align="center">
			<button class="btn"><a href="chooseprog.php">CHOOSE PROGRAM</a></button>
		</legend>
	</div>

	<div class="cntr">
		
		<legend align="center"><button class="btn"><a href="prisoner_logout.php">LOGOUT</a></button></legend>

	</div>


</body>
</html>