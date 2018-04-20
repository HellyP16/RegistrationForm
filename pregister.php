<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prisoner registration</title>
</head>
<body>

	<?php
if(isset($_REQUEST['reg_pris']))
{
$p_id=$_POST['prisonerid'];
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$date1=$_POST['join_date'];
$date2=$_POST['release_date'];
//$hobby=implode(",",$_POST['hobby']);
$rname=$_POST['relative'];
$phone=$_POST['relative_num'];

$crime=$_POST['crime'];
$feedback=$_POST['feedback'];
$tp=$_POST['training'];
$pass=$_POST['password_1'];
//$image_file="image";

$file_name=$_FILES["upload"]["name"];
$file_tmpname=$_FILES["upload"]["tmp_name"];
$file_type=$_FILES["upload"]["type"];
$file_error=$_FILES["upload"]["error"];
$file_size=$_FILES["upload"]["size"];

$a="SELECT * FROM `prisoner` WHERE `p_id`='$p_id'";
$b=mysqli_query($conn,$a);
$count=mysqli_fetch_array($conn,$b);

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

$insert="INSERT INTO `prisoner`(`p_id`, `name`, `address`, `gender`, `date_joined`,`release_date`,`relative's_name` ,`relative's_number`,`crime_attempted`,`latest_feedback`,`training_program`, `pwd`) VALUES('$p_id','$name','$address','$gender','$date1','$date2','$rname','$phone', '$crime','$feedback','$tp','$pass')";
mysqli_query($conn,$insert);
echo"<script>alert('Successfully Registered');window.location='psignup.php';</script>";
}

else
{
	echo"<script>alert('Prisoner's Id already exists');window.location='psignup.php';</script>";	
}
}

?>

</body>
</html>