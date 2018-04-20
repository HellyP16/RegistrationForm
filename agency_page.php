<?php

include('connect.php');
session_start();

if(!isset($_SESSION['ag_id']))
{
	header('Location:ag_login.php');
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCY PAGE</title>
<link rel="stylesheet" type="text/css" href="agencypage.css">
</head>


<br />


<body>

	<div class="hdr">
		<?php

		$a="SELECT * FROM agency WHERE ag_id='".$_SESSION['ag_id']."'";
		$b=mysqli_query($conn,$a);
		$row=mysqli_fetch_array($b);

		echo"WELCOME"." ". strtoupper($row['type_of_agency']);


		?>


	</div>

	<div class="foot">
		
		<legend align="center"><button class="btn"><a href="agency_logout.php">LOGOUT</a></button></legend>

		<legend align="center"><button class="btn"><a href="viewdata.php">VIEW DATA</a></button></legend>

	</div>


</body>
</html>