<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>GUARD LOGIN</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">LOG IN</legend>
	</header>
	
	<form method="post" action="login_g.php">

		

		<div class="input-group">
			<label>UserID</label>
			<input type="text" name="g_id" id="g_id">
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