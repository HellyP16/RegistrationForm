<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">LOG IN</legend>
	</header>
	
	<form method="post" action="login_u.php">

		

		<div class="input-group">
			<label>User name</label>
			<input type="text" name="uname" id="uname">
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