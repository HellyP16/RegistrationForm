<?php

$hostname="localhost";
$username="root";
$psw="";

$conn=mysqli_connect($hostname,$username,$psw) or mysqli_error("Server Connection failed");

$db_name="pms_db";

$sql_connect=mysqli_select_db($conn,$db_name) or mysqli_error($conn);


?>