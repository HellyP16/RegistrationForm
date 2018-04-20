<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agency registration</title>
</head>
<body>

	<?php
if(isset($_REQUEST['reg_agency']))
{
$ag_id=$_POST['agencyid'];

$ta=$_POST['ta'];
$pass=$_POST['pwd'];
//$image_file="image";

$file_name=$_FILES["upload"]["name"];
$file_tmpname=$_FILES["upload"]["tmp_name"];
$file_type=$_FILES["upload"]["type"];
$file_error=$_FILES["upload"]["error"];
$file_size=$_FILES["upload"]["size"];

$a="SELECT * FROM agency WHERE `ag_id`='$ag_id'";
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

$insert="INSERT INTO agency(`ag_id`,`type_of_agency`, `pwd`) VALUES('$ag_id','$ta','$pass')";
mysqli_query($conn,$insert);
echo"<script>alert('Successfully Registered');window.location='agsignup.php';</script>";
}

else
{
	echo"<script>alert('Agency's Id already exists');window.location='agsignup.php';</script>";	
}
}

?>

</body>
</html>