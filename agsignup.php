<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
	<script src="agsignup.js"></script>
</head>
<body>
	<header>
		<legend align="center" class="hd">AGENCY SIGN UP</legend>
	</header>
	<div>
        <form onsubmit="return valid();" method="post" action="agregister.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Agency ID</label>
			<input type="text" name="agencyid" id="agid">
		</div>
		
		<div class="input-group">
			<label>Type of Agency</label>
			<select name="ta" id="ta">
            <option value="">--SELECT AGENCY--</option>
            <option value="Bureau of Police Research and Development">Bureau of Police Research and Development</option>
            <option value="Central Bureau of Investigation">Central Bureau of Investigation</option>
            <option value="Directorate of Revenue Intelligence">Directorate of Revenue Intelligence</option>
            <option value="Intelligence Bureau">Intelligence Bureau</option>
            <option value="Joint Intelligence Committee">Joint Intelligence Committee</option>
            <option value="Narcotics Control Bureau">Narcotics Control Bureau</option>
            <option value="National Investigation Agency">National Investigation Agency</option>
            </select>
 		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd" id="pwd">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_agency" value="signup">Sign up</button>
		</div>
		
	</form>


	</div>

</body>
</html>