<?php 
	session_start();
	include '../../dbconfig/config.php';

	session_destroy();
	unset($_SESSION['username']);
	header("location:formlogin.php");
 ?>