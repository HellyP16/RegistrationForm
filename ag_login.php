<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>AGENCY LOGIN</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">LOG IN</legend>
	</header>
	
	<form method="post" action="login_ag.php">

		

		<div class="input-group">
			<label>UserID</label>
			<input type="text" name="ag_id" id="ag_id">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass" id="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" value="alogin">Login</button>
		</div>
		
	</form>


</body>
</html>