<?php
$hostname="localhost";
$username="root";
$psw="";

$conn=mysqli_connect($hostname,$username,$psw) or mysql_error("Server connection failed");

$create_database="CREATE DATABASE pms_db";
mysqli_query($conn,$create_database);
?>