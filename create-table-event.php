<?php
include('connect.php');

$create_table="CREATE TABLE `event`(
`chief_guest` VARCHAR(50),
`type` VARCHAR(15),
`date_of_occurrence` DATE,
`duration_in_hour` VARCHAR(20),
`inspector_incharge` VARCHAR(20)
)";

mysqli_query($conn,$create_table);
?>