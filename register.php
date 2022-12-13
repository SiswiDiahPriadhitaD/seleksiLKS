<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="left">
		<div class="img">
			<img src="asset/img/favicon-96x96.png">
			<p>Asian Games <br> 2018 | Jakarta-Palembang</p>
		</div>
	</div>
	<center>
	<div class="right-reg">
		<form action="" method="post" enctype="multipart/form-data">
			<h1>Register Page</h1>
			<table>
				<tr>
					<td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
				</tr>
				<tr>
					<td><textarea name="alamat" placeholder="Alamat"></textarea></td>
				</tr>
				<tr>
					<td><input type="text" name="no_telp" placeholder="Nomor Telepon"></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Username"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="status" class="cek" style="display: none;"></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-reg">Register</button></td>
				</tr>
				<tr>
					<td><p>Sudah Sign up?<a href="formlogin.php">Login</a></p></td>
				</tr>
			</table>
		</form>
	</div>
	</center>
</body>
</html>
<?php 
	include 'koneksi.php';

	if (isset($_POST['btn-reg'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$query = mysqli_query($con,"INSERT INTO resgister VALUES('','$nama','$alamat','$no_telp')");

	}
	if (isset($_POST['btn-reg'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$status = $_POST['status'];
		$query = mysqli_query($con,"INSERT INTO login VALUES('','$username','$password','$status')");
		if ($query) {
?>
				<script type="text/javascript">
					alert('Register berhasil');
					window.location='formlogin.php';
				</script>
<?php
		}else{
?>
				<script type="text/javascript">
					alert('Register gagal');
					window.location='';
				</script>
<?php
		}
}
 ?>
