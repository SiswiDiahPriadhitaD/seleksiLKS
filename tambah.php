<?php 
	session_start();
	include 'koneksi.php';

	// if (!isset($_SESSION['username'])) {
	// 	header("location:formlogin.php");
	// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="asset/css/admin.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<aside>
		<div class="profil" align="center">
			<div class="img">
			<img src="asset/img/mascot--3.png" style="width: 100%; height: 150px;">
			</div>
			<p>Administrator</p>
			<p>Hoyirul</p>
		</div>
		<div class="sidebar">
			<a href="admin.php" class="active">Dashboard</a>
			<a href="">Tambah Berita</a>
			<a href="logout.php">logout</a>
		</div>
	</aside>

	<content>
		<div class="head">
			<a href="admin.php">Home /</a>Dashboard
		</div>
		<center>
		<div class="body">
			<form action="" method="post" enctype="multipart/form-data">
				<h1>Tambah berita</h1>
				<table>
					<tr>
						<td><input type="text" name="judul" placeholder="Judul"></td>
					</tr>
					<tr>
						<td><textarea name="berita" placeholder="Tambah berita terkini"></textarea></td>
					</tr>
					<tr>
						<td><input type="file" name="foto"></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-save">Tambahkan</button></td>
					</tr>
				</table>
			</form>
		</div>
		</center>
	</content>
</body>
</html>
<?php
if (isset($_POST['btn-save'])) {
		$judul = $_POST['judul'];
		$berita = $_POST['berita'];
		$foto = $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], "./asset/upload/$foto");
		$query = mysqli_query($con,"INSERT INTO berita VALUES('','$judul','$berita','$foto')");

		if ($query) {
?>
				<script type="text/javascript">
					alert('berhasil ditambahkan');
					window.location='admin.php';
				</script>
<?php
		}else{
?>
				<script type="text/javascript">
					alert('gagal ditambahkan');
					window.location='';
				</script>
<?php
		}
	}
?>