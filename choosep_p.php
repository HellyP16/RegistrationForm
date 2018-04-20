<?php
include('connect.php');

session_start();

if(!isset($_SESSION['p_id']))
{
	header('Location:prisoner_page.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>CHOOSE PROG</title>
</head>
<body>

	<?php
if(isset($_REQUEST['choose_prog']))
{
$p_id=$_POST['p_id'];

$training=$_POST['training'];
//$image_file="image";

/*$file_name=$_FILES["upload"]["name"];
$file_tmpname=$_FILES["upload"]["tmp_name"];
$file_type=$_FILES["upload"]["type"];
$file_error=$_FILES["upload"]["error"];
$file_size=$_FILES["upload"]["size"];*/

$a="SELECT * FROM prisoner WHERE p_id='".$_SESSION['p_id']."'";
$b=mysqli_query($conn,$a);

$row=mysqli_fetch_array($b);

if($p_id==$row['p_id'])
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


$sql = "UPDATE prisoner SET training_program='$training' WHERE p_id='$p_id'";

if ($conn->query($sql) === TRUE) {
	echo"<script>alert('succesfully updated program');window.location='chooseprog.php';</script>";	
} else {
	echo"<script>alert('Sonething went wrong');window.location='chooseprog.php';</script>";	
}

}


else
{
	echo"<script>alert('ID is not correct');window.location='chooseprog.php';</script>";	
}
}

?>

</body>
</html>

