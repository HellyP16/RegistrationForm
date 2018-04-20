<?php
include('connect.php');

$create_table="CREATE TABLE `prisoner`(
`p_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50),
`address` VARCHAR(255),
`gender` ENUM('male','female'),
`date_joined` DATE,
`release_date` DATE,
`relative's_name` VARCHAR(50),
`relative's_number` VARCHAR(12),
`crime_attempted` VARCHAR(100),
`latest_feedback` VARCHAR(255),
`training_program` VARCHAR(50)
)";

mysqli_query($conn,$create_table);
?>