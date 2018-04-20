<?php

include('connect.php');
session_start();

session_destroy();
unset($_SESSION['a_id']);
echo"<script>;window.location='a_login.php';</script>";

?>