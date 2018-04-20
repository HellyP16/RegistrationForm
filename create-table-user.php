<?php
include('connect.php');

$create_table="CREATE TABLE `user`(
`name` VARCHAR(15),
`email` VARCHAR(100)
)";

mysqli_query($conn,$create_table);
?>