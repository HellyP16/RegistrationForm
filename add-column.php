<?php

include('connect.php');

$add_column="ALTER TABLE user ADD pwd VARCHAR(15) after email";

mysqli_query($conn,$add_column);

?>
