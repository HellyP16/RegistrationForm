<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
</head>
<body>

	<?php
if(isset($_REQUEST['reg_user']))
{
$uname=$_POST['uname'];

$email=$_POST['email'];
$pass=$_POST['pwd'];
//$image_file="image";

$file_name=$_FILES["upload"]["name"];
$file_tmpname=$_FILES["upload"]["tmp_name"];
$file_type=$_FILES["upload"]["type"];
$file_error=$_FILES["upload"]["error"];
$file_size=$_FILES["upload"]["size"];

$a="SELECT * FROM user WHERE `name`='$uname'";
$b=mysqli_query($conn,$a);
$count=mysqli_fetch_array($b);

if($count==0)
{
	/*if(!is_dir($image_file))
	{
		mkdir($image_file,0777,true);	
	}
	
	if(file_exists("image/".$_FILES['upload']['name']))
	{
		$pic=rand(1,1000).$_FILES['upload']['name'];
	}
	else
	{
		$pic=$_FILES['upload']['name'];
	}
	move_uploaded_file($_FILES['upload']['tmp_name'],"image/".$pic);*/

$insert="INSERT INTO user(`name`,`email`, `pwd`) VALUES('$uname','$email','$pass')";
mysqli_query($conn,$insert);
echo"<script>alert('Successfully Registered');window.location='usignup.php';</script>";
}

else
{
	echo"<script>alert('Agency's Id already exists');window.location='usignup.php';</script>";	
}
}

?>

</body>
</html>