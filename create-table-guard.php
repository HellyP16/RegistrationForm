<?php
include('connect.php');

$create_table="CREATE TABLE `guard`(
`g_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50),
`pwd` VARCHAR(15)
)";

mysqli_query($conn,$create_table);
?>