<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>CHOOSE PROGRAM</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">CHOOSE PROGRAM</legend>
	</header>
	
	<form method="post" action="choosep_p.php">

		

		<div class="input-group">
			<label>Prisoner ID</label>
			<input type="text" name="p_id" id="p_id">
		</div>
		<div class="input-group">
			<label>Training program</label>
			<select name="training" id="tp">
            <option value="">--SELECT PROGRAM--</option>
            <option value="ASSET NAINTENANCE">ASSET NAINTENANCE</option>
            <option value="HOSPITALITY">HOSPITALITY</option>
            <option value="CONSTRUCTION">CONSTRUCTION</option>
            <option value="TRANSPORT">TRANSPORT</option>
            <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
            <option value="ENGINEERING">ENGINEERING</option>
            <option value="BUSINESS MANAGEMENT">BUSINESS MANAGEMENT</option>
            </select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="choose_prog" value="choosep">CHOOSE</button>
		</div>
		
	</form>


</body>
</html>