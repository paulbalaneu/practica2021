<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
session_start();
if(!isset($_SESSION["username"]))
{
    header("location: login.php");
    exit;
}
else
{
	header("location: dashboard.php");
    exit;
}
?>