<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
	<script src="psignup.js"></script>
</head>
<body>
	<header>
		<legend align="center" class="hd">PRISONER SIGN UP</legend>
	</header>
	<div>
        <form onsubmit="return valid();" method="post" action="pregister.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Prisoner ID</label>
			<input type="text" name="prisonerid" id="pid">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" id="name">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" id="address">
		</div>
		<div class="input-group">
			<label>Gender</label>
            <input type="radio" name="gender" id="male" value="MALE" />MALE
            <input type="radio" name="gender" id="female" value="FEMALE" />FEMALE
        </div>
        <div class="input-group">
			<label>Date Joined</label>
			<input type="date" name="join_date" id="d1">
		</div>
		<div class="input-group">
			<label>Releasing date</label>
			<input type="date" name="release_date" id="d2">
		</div>
        <div class="input-group">
			<label>Relative's name</label>
			<input type="text" name="relative" id="rname">
		</div>
		<div class="input-group">
			<label>Relative's number</label>
			<input type="text" name="relative_num" id="rnum">
		</div>
		<div class="input-group">
			<label>Crime attempted</label>
			<input type="text" name="crime" id="crime">
		</div>
		<div class="input-group">
			<label>Latest feedback</label>
			<input type="text" name="feedback" id="feedback">
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
			<label>Password</label>
			<input type="password" name="password_1" id="pwd">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_pris" value="signup">Sign up</button>
		</div>
		
	</form>


	</div>

</body>
</html>