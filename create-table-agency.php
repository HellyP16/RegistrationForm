<?php
include('connect.php');

$create_table="CREATE TABLE `agency`(
`ag_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`type_of_agency` VARCHAR(50),
`pwd` VARCHAR(15)
)";

mysqli_query($conn,$create_table);
?>