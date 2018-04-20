<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PRISONER REQUEST</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">FILE A REQUEST</legend>
	</header>
	
	<form method="post" action="rqst_p.php">

		

		<div class="input-group">
			<label>Prisoner ID</label>
			<input type="text" name="p_id" id="p_id">
		</div>
		<div class="input-group">
			<label>Request</label>
			<input type="text" name="rqs" id="rqs">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="rqst_prisoner" value="alogin">Submit</button>
		</div>
		
	</form>


</body>
</html>