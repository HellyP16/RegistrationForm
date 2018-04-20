<?php

include('connect.php');
session_start();

session_destroy();
unset($_SESSION['ag_id']);
echo"<script>;window.location='ag_login.php';</script>";

?>