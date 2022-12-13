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
	<title>Admin</title>
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
			<!-- <p>Hoyirul</p> -->
		</div>
		<div class="sidebar">
			<a href="admin.php" class="active">Dashboard</a>
			<a href="tambah.php">Tambah Berita</a>
			<a href="logout.php">logout</a>
		</div>
	</aside>

	<content>
		<div class="head">
			<a href="admin.php">Home /</a>Dashboard
		</div><br>
		<div class="body">
			<div class="left">
			<h1>Daftar Berita</h1>
			<table border="1">
				<tr>
					<!-- <th>No</th> -->
					<th>Judul</th>
					<th>berita</th>
					<th>Opsi</th>
				</tr>
			<?php 
				$query = mysqli_query($con,"SELECT * FROM berita");
				foreach ($query as $data) {
					// $no++;
				?>
					<div class="box">
						<tr>
							<!-- <td><?= $no; ?></td> -->
							<td content="Judul"><?= $data['judul']; ?></td>
							<td content="berita"><?= substr($data['berita'], 0,30); ?></td>
							<td content="Opsi"><a href="edit.php?id=<?= $data['id']; ?>" class="edit" onclick="return confirm('Yakin?')">edit</a><a href="delete.php?id=<?= $data['id']; ?>" class="hapus" onclick="return confirm('Yakin?')">delete</a></td>
						</tr>
					</div>
				<?php
				}
			 ?>
			</table>
			</div>

			<div class="right">
				<h1>Daftar Komentar</h1>
			<table border="1">
				<tr>
					<!-- <th>No</th> -->
					<th>Username</th>
					<th>komentar</th>
					<th>Opsi</th>
				</tr>
			<?php 
				$query = mysqli_query($con,"SELECT * FROM komentar");
				foreach ($query as $data) {
					// $no++;
				?>
					<div class="box">
						<tr>
							<!-- <td><?= $no; ?></td> -->
							<td content="username"><?= $data['username']; ?></td>
							<td content="komentar"><?= $data['komentar'] ?></td>
							<td content="Opsi"><a href="hapus.php?id=<?= $data['id']; ?>" class="hapus" onclick="return confirm('Yakin?')">delete</a></td>
						</tr>
					</div>
				<?php
				}
			 ?>
			</table>
			</div>
		</div>
	</content>
</body>
</html>