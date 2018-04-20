<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
	<script src="gsignup.js"></script>
</head>
<body>
	<header>
		<legend align="center" class="hd">GUARD SIGN UP</legend>
	</header>
	<div>
        <form onsubmit="return valid();" method="post" action="gregister.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Guard ID</label>
			<input type="text" name="guardid" id="gid">
		</div>
		
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="gname" id="gname">

 		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd" id="pwd">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_guard" value="signup">Sign up</button>
		</div>
		
	</form>


	</div>

</body>
</html>