<?php
include('connect.php');

$create_table="CREATE TABLE `visitor`(
`name` VARCHAR(50),
`inmate's_id` INT(10),
`time_of_last_visit` DATE,
`mobile_number` VARCHAR(12),
`address` VARCHAR(255)
)";

mysqli_query($conn,$create_table);
?>