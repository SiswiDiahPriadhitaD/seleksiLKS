-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 05:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seleksilks`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `berita` text NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `foto`) VALUES
(4, 'Pesta Olahraga Asia 2018', 'Pesta Olahraga Asia 2018 (bahasa Inggris: 2018 Asian Games), secara resmi dikenal sebagai Pesta Olahraga Asia ke-18, adalah acara olahraga multi-event regional Asia yang akan diselenggarakan di Indonesia pada tanggal 18 Agustus - 2 September 2018.[3], di dua kota yaitu Jakarta dan Palembang[5], serta beberapa tempat sebagai tuan rumah pendukung yang tersebar di provinsi Jawa Barat dan Banten[6][7]. Jumlah cabang olahraga yang akan dipertandingkan sebanyak 40 cabang, terdiri dari 32 cabang olahraga olimpiade dan 8 cabang olahraga non olimpiade[8][9]\r\n\r\nIni merupakan kedua kalinya Indonesia menjadi tuan rumah perhelatan Asian Games setelah Asian Games IV yang diadakan di Jakarta pada tahun 1962. Sebagian fasilitas yang dibangun untuk Asian Games IV akan kembali digunakan dalam Asian Games XVIII ini. Untuk pertama kalinya dalam sejarah, Asian Games akan diadakan di dua kota sekaligus.[10]\r\n\r\nIndonesia disetujui menjadi tuan rumah Asian Games XVIII oleh Dewan Eksekutif Dewan Olimpiade Asia pada 19 September 2014.[11] Penyelenggaraan Asian Games XVIII yang awalnya akan diadakan pada tahun 2019 kemudian dimajukan menjadi tahun 2018 untuk menghindari pemilihan legislatif dan pemilihan presiden Indonesia yang juga akan diselenggarakan pada tahun tersebut.[12][13]\r\n\r\nAwalnya Hanoi, Vietnam terpilih sebagai tuan rumah mengalahkan Surabaya, namun mereka mengundurkan diri akibat kendala keuangan.[14][15]\r\n\r\nUntuk pertama kalinya pula, eSports dan polo kano akan dipertandingkan sebagai olahraga eksibisi. eSports dijadwalkan akan menjadi pertandingan medali pada Pesta Olahraga Asia 2022.', 'past-asiangames--desktop.jpg'),
(5, 'Hanoi', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem', 'banner-moovit--desktop.png'),
(6, 'Penunjukkan Jakarta dan Palembang', 'Setelah Hanoi mengundurkan diri, sebagai tuan rumah Asian Games XVIII, OCA menyatakan bahwa Indonesia, Tiongkok, dan Uni Emirat Arab adalah kandidat yang paling mungkin untuk menjadi tuan rumah.[25] Indonesia dianggap sebagai favorit, karena Surabaya merupakan runner-up dari tawaran sebelumnya,[26] dan bersedia untuk melakukannya jika dipilih.[27] Filipina[28] dan India menyatakan minat mereka menjadi tuan rumah Asian Games XVIII, tetapi India gagal mengajukan tawaran karena gagal mendapatkan audiensi dengan Perdana Menteri Narendra Modi setelah diberi batas perpanjangan waktu oleh OCA.[29]\r\n\r\nPada tanggal 5 Mei 2014, OCA mengunjungi beberapa kota di Indonesia yang mungkin bisa menjadi tuan rumah Asian Games, seperti Jakarta, Surabaya, Bandung, dan Palembang, sementara Surabaya memutuskan untuk tidak menjadi tuan rumah Asian Games dan sebaliknya berfokus pada tuan rumah Asian Youth Games pada tahun 2021.[30] Pada tanggal 25 Juli 2014, dalam pertemuan di Kota Kuwait, OCA menunjuk Jakarta sebagai tuan rumah Asian Games XVIII dengan Palembang sebagai tuan rumah pendukung. Jakarta dipilih karena telah dilengkapi dengan sarana olahraga, jaringan transportasi yang memadai, dan fasilitas lain seperti hotel dan penginapan untuk tamu.[31] Penjadwalan pertandingan Asian Games, diubah dari tahun 2019 menjadi tahun 2018, karena pada tahun 2019 akan diselenggarakan pemilihan presiden 2019. Pada tanggal 20 September 2014, Indonesia menandatangani kontrak tuan rumah,[32] dan selama upacara penutupan Asian Games 2014 di Incheon, Indonesia ditunjuk secara simbolis oleh OCA untuk menjadi tuan rumah Asian Games berikutnya.[33][34][35]', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `username`, `komentar`) VALUES
(2, 'hoyirul', 'asik\r\n'),
(4, 'admin', 'banget');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'hoyirul', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `resgister`
--

CREATE TABLE `resgister` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resgister`
--

INSERT INTO `resgister` (`id`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'hoy', 'jgkjgkjg', 'jgkjgkjgj'),
(2, 'hoyrul', 'duko kembang', '0887687');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `resgister`
--
ALTER TABLE `resgister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resgister`
--
ALTER TABLE `resgister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
