<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PRISONER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">LOG IN</legend>
	</header>
	
	<form method="post" action="login_p.php">

		

		<div class="input-group">
			<label>UserID</label>
			<input type="text" name="p_id" id="p_id">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass" id="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" value="plogin">Login</button>
		</div>
		
	</form>


</body>
</html>