<?php
	include_once 'database/connection.php';

session_start();
 unset($_SESSION['email']);
session_destroy();
header ('location:login.php');
exit;
?>