 <?php 
	session_start();
	include 'koneksi.php';

	if (!isset($_SESSION['username'])) {
		header("location:formlogin.php");
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="asset/js/navbar.js"></script>
</head>
<body>
	<header>
		<nav id="head" onscroll="Scroll()">
			<ul>
				<li><a href="user.php">Home</a></li>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="komentar.php">Coment</a></li>
			</ul>
		</nav>
	</header>

	<div class="banner">
		<div class="left">
			<div class="img">
				<img src="asset/img/favicon-96x96.png">
				<p>Asian Games <br> 2018 | Jakarta-Palembang</p>
			</div>
		</div>
		<div class="right">
			<h1>Asian Games</h1>
			<p>Logo yang pertama yang diluncurkan pada tanggal 9 September 2015 mengambarkan cenderawasih, spesies burung langka di Indonesia Drawa, personifikasi cenderawasih, diresmikan sebagai maskot oleh wakil presiden Jusuf Kalla pada tanggal 26 Desember 2015 Namun, setelah munculnya kritik dari masyarakat atas desain maskot dan logo yang kuno dan tidak menarik</p>
		</div>
	</div>
	<content>
				<h1>Maskot Asian Games</h1>
		<div class="all-box">
			<div class="box">
				<img src="asset/img/mascot--1.png">
				<h1>Maskot burung</h1>
				<p>Maskot baru mencerminkan keberagaman Indonesia dengan tiga hewan dari berbagai daerah di Indonesia. Bhin Bhin, personifikasi cendrawasih, mengenakan rompi dengan motif tradisional Asmat dari Papua dan melambangkan strategi. Atung, personifikasi rusa Bawean, mengenakan sarung batik parang dan melambangkan kecepatan. Kaka, personifikasi badak bercula satu</p>
			</div>
			<div class="box">
				<img src="asset/img/mascot--2.png">
				<h1>Maskot Badak</h1>
				<p>Maskot baru mencerminkan keberagaman Indonesia dengan tiga hewan dari berbagai daerah di Indonesia. Bhin Bhin, personifikasi cendrawasih, mengenakan rompi dengan motif tradisional Asmat dari Papua dan melambangkan strategi. Atung, personifikasi rusa Bawean, mengenakan sarung batik parang dan melambangkan kecepatan. Kaka, personifikasi badak bercula satu </p>
			</div>
			<div class="box">
				<img src="asset/img/mascot--3.png">
				<h1>Maskot rusa</h1>
				<p>Maskot baru mencerminkan keberagaman Indonesia dengan tiga hewan dari berbagai daerah di Indonesia. Bhin Bhin, personifikasi cendrawasih, mengenakan rompi dengan motif tradisional Asmat dari Papua dan melambangkan strategi. Atung, personifikasi rusa Bawean, mengenakan sarung batik parang dan melambangkan kecepatan. Kaka, personifikasi badak bercula satu </p>
			</div>
		</div>
		<div style="clear: both;"></div><br><br><br><br><br>
		<div class="banner2">
			<div class="left" align="center">
				<img src="asset/img/android-icon-192x192.png">
				<p>Asian Games 2018</p>
			</div>
			<div class="right">
				<h1>Sponsor Asian Games</h1>
				<p>Komite Penyelenggara Asian Games Indonesia (INASGOC) telah menyetujui kesepakatan sponsor dengan sejumlah perusahaan (lihat tabel).[36] Para sponsor dibagi dalam 5 kategori level sponsorship. Perusahaan-perusahaan ini secara kumulatif menyediakan pendanaan senilai Rp 1,8 triliun,[37] termasuk didalamnya enam Badan Usaha Milik Negara (BUMN) yang turut terlibat dalam kerja sama sponsorship </p>
			</div>
		</div><br><br><br><br>

		<h1>Berita Asian Games</h1>
		<div class="berita">
			<?php 
				include 'koneksi.php';

				$query = mysqli_query($con,"SELECT * FROM berita");
				foreach ($query as $data) {
			?>
				<div class="box">
					<img src="asset/upload/<?= $data['foto'];  ?>">
					<h1><?= $data['judul']; ?></h1>
					<p><?= substr($data['berita'], 0,300); ?></p>
					<a href="detail.php?id=<?= $data['id']; ?>">Baca Selengkapnya</a>
				</div>
			<?php
				}
 			?>
			
		</div>
		<div style="clear: both;"></div><br><br><br><br><br>
		<div class="banner3">
			<div class="left">
				<h1> Penunjukan Jakarta Palembang</h1>
				<p>Setelah Hanoi mengundurkan diri, sebagai tuan rumah Asian Games XVIII, OCA menyatakan bahwa Indonesia, Tiongkok, dan Uni Emirat Arab adalah kandidat yang paling mungkin untuk menjadi tuan rumah.[25] Indonesia dianggap sebagai favorit, karena Surabaya merupakan runner-up dari tawaran sebelumnya,[26] dan bersedia untuk melakukannya jika dipilih.[27] Filipina</p>
			</div>
			<div class="right" align="center">
				<img src="asset/img/mascot--1.png">
				<p>Maskot Burung</p>
			</div>
		</div><br><br><br><br>
	</content>
	<div style="clear: both;"></div><br><br>
	<footer>
		<div class="head">
			<div class="head-left">
				<p>
					Asian Games adalah Pesta Olahraga Asia , dan yang akan dilaksanakan di Jakarta-Palembang
				</p>
			</div>
			<div class="head-right">
				<a href="komentar.php">coment</a>
			</div>
		</div>
		<div class="body">
			<div class="box">
				<h1>Negara participan</h1>
				<p>Seluruh 45 anggota Dewan Olimpiade Asia dijadwalkan berpartisipasi dalam acara ini. Telah disepakati bahwa Korea Utara dan Korea Selatan akan bersaing sebagai tim yang bersatu dalam beberapa pertandingan, seperti yang mereka lakukan di Olimpiade Musim Dingin 2018.[90] Di bawah ini adalah daftar semua NOC yang berpartisipasi; jumlah peserta per delegasi ditunjukkan dalam tanda kurung. 
				
				<br><br>
Afghanistan
• Arab Saudi
• Atlet Olimpiade Individual
• Bahrain
• Bangladesh
• Bhutan
• Brunei
• Filipina
• Hong Kong
• India (523)[91]
• Indonesia (H)
• Irak
• Iran
• Jepang
• Kamboja

			</p>
			</div>
			<div class="box">
				<h3>Referensi</h3>
				<p>Referensi

1.^ Saputra, Odi Aria (10 April 2015). "Keppres Asian Games Turun Pertengahan April". Sriwijaya Post. Diakses tanggal 10 April 2015. 
2.^ Prasetya, Muhammad Hary (12 Februari 2016). "Tema Asian Games 2018, The Energy of Asia, Ini Artinya". Superball.id. Diakses tanggal 12 Juni 2016. 
3.^ a b "18-8-18 start planned for 18th Asian Games". Olympic Council of Asia. 27 Januari 2015. Diakses tanggal 28 Januari 2015. 
4.^ Junida, Ade Irma (2 Oktober 2014). "GBK akan direnovasi demi Asian Games 2018". Antara. Diakses tanggal 10 April 2015. 
5.^ "Keppres Asian Games Turun Pertengahan April". Sriwijaya Post. 10 April 2015. Diakses tanggal 11 November 2016. 

			</p>
			</div>
			<div class="box">
				<h3>Contact</h3>
				<p>Perkampungan atlet di Jakarta dibangun di Kemayoran, Jakarta Pusat di atas lahan seluas 10 hektar, yang memiliki 7,424 apartemen dalam 10 menara. Total kapasitas akomodasi sebesar 22,272 di perkampungan ini melebihi standar Komite Olimpiade Internasional, yang mengharuskan tuan rumah Olimpiade untuk menyediakan kamar bagi 14,000 atlet. Perkampungan atlet di dalam Jakabaring Sport City di Palembang akan menampung 3,000 atlet dan ofisial.
				<br><br><br>
				contact kami <br>
				09876876 <br>
				email : <br>
				irulgraspama621@gmail.com
			</p>
			</div>
		</div>
		<div class="foot">
			&copy; copyright hak cipta | Asian Games 2018 | Hairullah
		</div>
	</footer>
</body>
</html>