<?php
include('connect.php');

$create_table="CREATE TABLE `activity`(
`type` VARCHAR(15),
`duration_in_months` VARCHAR(20),
`inspector_incharge` VARCHAR(20)
)";

mysqli_query($conn,$create_table);
?>