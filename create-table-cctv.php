<?php
include('connect.php');

$create_table="CREATE TABLE `cctv`(
`c_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`location` VARCHAR(50)

)";

mysqli_query($conn,$create_table);
?>