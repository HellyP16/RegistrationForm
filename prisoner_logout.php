<?php

include('connect.php');
session_start();

session_destroy();
unset($_SESSION['p_id']);
echo"<script>;window.location='p_login.php';</script>";

?>