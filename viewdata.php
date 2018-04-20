<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>VIEW DATA</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
	<script src="viewdata.js"></script>
</head>
<body>
	<header>
		<legend align="center" class="hd">VIEW PRISONER'S DATA</legend>
	</header>
	<div>
        <form onsubmit="return valid();" method="post" action="pridata.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Priaoner's ID</label>
			<input type="text" name="p_id" id="p_id">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" value="signup">Go</button>
		</div>
		
	</form>


	</div>

</body>
</html>