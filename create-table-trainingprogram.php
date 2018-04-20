<?php
include('connect.php');

$create_table="CREATE TABLE `training_programs`(
`type` VARCHAR(15),
`duration_in_months` VARCHAR(20),
`inspector_incharge` VARCHAR(20),
`inmates_registered` INT(10)
)";

mysqli_query($conn,$create_table);
?>