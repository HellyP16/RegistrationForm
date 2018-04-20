<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
	<script src="usignup.js"></script>
</head>
<body>
	<header>
		<legend align="center" class="hd">USER SIGN UP</legend>
	</header>
	<div>
        <form onsubmit="return valid();" method="post" action="uregister.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>User name</label>
			<input type="text" name="uname" id="uname">
		</div>
		
		<div class="input-group">
			<label>Email ID</label>
			<input type="text" name="email" id="email">
 		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd" id="pwd">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" value="signup">Sign up</button>
		</div>
		
	</form>


	</div>

</body>
</html>