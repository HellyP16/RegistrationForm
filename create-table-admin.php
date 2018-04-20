<?php
include('connect.php');

$create_table="CREATE TABLE `admin`(
`a_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50),
`tenure_in_year` VARCHAR(15),
`designation` VARCHAR(25),
`pwd` VARCHAR(15)
)";

mysqli_query($conn,$create_table);
?>