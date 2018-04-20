<?php

session_start();
include('connect.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
</head>

<body>
<?php

if(isset($_REQUEST['login_user']))
{
	$a_id=$_POST['a_id'];
	$pass=$_POST['pass'];
	
	$a="SELECT * FROM admin WHERE a_id='$a_id' AND pwd='$pass'";
	$b=mysqli_query($conn,$a);
	$count=mysqli_num_rows($b);
	if($count==0)
	{
		echo"<script>alert('Wrong Id and password');window.location='a_login.php';</script>";
	}
	else
	{
		$_SESSION['a_id']=$a_id;
		echo"<script>alert('Matched Found');window.location='admin_page.php';</script>";
	}
	
}


?>



</body>
</html>