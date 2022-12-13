<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
 	$query = mysqli_query($con,"DELETE FROM komentar WHERE id='$id'");
 	mysqli_fetch_array($query);

 	header("location:admin.php");
 ?>