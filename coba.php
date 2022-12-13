<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
</body>
</html>
<?php
include 'koneksi.php';
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