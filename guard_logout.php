<?php

include('connect.php');
session_start();

session_destroy();
unset($_SESSION['g_id']);
echo"<script>;window.location='g_login.php';</script>";

?>