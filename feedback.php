<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PRISONER FEEDBACK</title>
	<link rel="stylesheet" type="text/css" href="psignup.css">
</head>
<body>

	<header>
		<legend align="center" class="hd">SUBMIT A FEEDBACK</legend>
	</header>
	
	<form method="post" action="feedback_p.php">

		

		<div class="input-group">
			<label>Prisoner ID</label>
			<input type="text" name="p_id" id="p_id">
		</div>
		<div class="input-group">
			<label>feedback</label>
			<input type="text" name="feed" id="feed">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="feedback_prisoner" value="feedbackp">Submit</button>
		</div>
		
	</form>


</body>
</html>