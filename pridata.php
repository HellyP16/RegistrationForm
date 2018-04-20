<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prisoner's data</title>
	<style type="text/css">

		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i');
		body {
			font-size: 30px;
			background-color: black;
			color: pink;
			font-family: 'Josefin Sans', sans-serif;
		}


	</style>
</head>

<body>

	<?php
if(isset($_REQUEST['reg_user']))
{
$p_id=$_POST['p_id'];


	
		$a="SELECT * FROM prisoner WHERE `p_id`='$p_id'";
		$b=mysqli_query($conn,$a);
		$row=mysqli_fetch_array($b);

		echo " id : ".$row['p_id'].",<br>  name : ".$row['name'].",<br>   address : ".$row['address'].",<br>   gender : ".$row['gender'].",<br>   date joined : ".$row['date_joined'].",<br>   release date : ".$row['release_date'].",<br>   crime : ".$row['crime_attempted'].",<br>   latest feedback : ".$row['latest_feedback'].",<br>   training program : ".$row['training_program'];
		
	


}
?>
</body>
</html>