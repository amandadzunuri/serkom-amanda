-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 10:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesan_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_kamar_hotel` int(11) NOT NULL,
  `jenis_kamar_hotel` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_hotel` varchar(60) NOT NULL,
  `video_hotel` longtext NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_kamar_hotel`, `jenis_kamar_hotel`, `harga`, `foto_hotel`, `video_hotel`, `deskripsi`) VALUES
(1, 'Kamar Standar', 500000, 'kamar_standar', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=g__gEnVWHNc&list=PLabOZUYjAKF8Uwge0r75V-FryV2U__B9U&index=2&pp=iAQB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<p>Kamar hotel standar adalah pilihan ideal bagi tamu yang mencari akomodasi sederhana namun nyaman. Dengan ukuran yang lebih compact dibandingkan dengan jenis kamar lainnya, kamar ini dirancang untuk memberikan kenyamanan dasar yang memadai tanpa mengorbankan kualitas. Kamar ini dilengkapi dengan berbagai fasilitas penting untuk memastikan pengalaman menginap yang menyenangkan dan praktis.</p>\r\n\r\nFasilitas:\r\n<ul>\r\n  <li>Tempat tidur ukuran queen atau twin</li>\r\n  <li>Televisi dengan saluran kabel</li>\r\n  <li>Meja kerja</li>\r\n  <li>Kamar mandi dengan shower</li>\r\n  <li>Wi-Fi gratis</li>\r\n  <li>AC atau kipas angin</li>\r\n</ul>\r\n\r\nKamar standar ini adalah pilihan yang sempurna bagi tamu yang menginginkan akomodasi yang terjangkau namun tetap nyaman dan fungsional.'),
(2, 'Kamar Deluxe', 750000, 'kamar_deluxe', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=fqmhH6wHags&pp=ygUPaG90ZWwgcm9vbSB0b3Vy\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<p>Kamar hotel deluxe menawarkan pengalaman menginap yang lebih mewah dan nyaman dibandingkan dengan kamar standar. Dirancang dengan perhatian terhadap detail dan kenyamanan, kamar ini memberikan ruang tambahan serta berbagai fasilitas premium yang memastikan kepuasan setiap tamu. Kamar deluxe cocok untuk mereka yang mencari akomodasi dengan sentuhan elegan dan kualitas lebih tinggi.</p>\r\n\r\nFasilitas:\r\n<ul>\r\n  <li>Tempat tidur ukuran king atau queen dengan kasur berkualitas tinggi</li>\r\n  <li>Televisi layar datar dengan saluran kabel atau satelit</li>\r\n  <li>Meja kerja yang nyaman dan kursi ergonomis</li>\r\n  <li>Kamar mandi pribadi dengan shower atau bathtub, perlengkapan mandi mewah, dan pengering rambut</li>\r\n  <li>Wi-Fi gratis dengan kecepatan tinggi</li>\r\n  <li>AC atau pemanas ruangan sesuai dengan musim</li>\r\n  <li>Mini bar atau fasilitas pembuat kopi dan teh</li>\r\n  <li>Brankas pribadi dan fasilitas tambahan seperti setrika dan papan setrika</li>\r\n</ul>\r\n\r\nKamar deluxe menawarkan ruang yang lebih luas dan desain yang lebih stylish, membuatnya ideal untuk tamu yang ingin menikmati kenyamanan ekstra dan layanan berkualitas tinggi selama menginap.'),
(3, 'Kamar Family', 1000000, 'kamar_family', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=weVEdZup_Gk&pp=ygUPaG90ZWwgcm9vbSB0b3Vy\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<p>Kamar family dirancang untuk memberikan ruang dan kenyamanan ekstra bagi keluarga yang bepergian. Dengan ukuran yang lebih luas dan fasilitas yang memadai, kamar ini memastikan semua anggota keluarga dapat menikmati masa menginap mereka dengan nyaman. Dilengkapi dengan berbagai fasilitas yang cocok untuk keluarga, kamar ini menawarkan pengalaman menginap yang menyenangkan dan praktis.</p>\r\n\r\nFasilitas:\r\n<ul>\r\n  <li>Tempat tidur besar, biasanya satu ranjang king atau queen dan beberapa ranjang twin atau sofa bed tambahan</li>\r\n  <li>Televisi layar datar dengan saluran kabel atau satelit</li>\r\n  <li>Area duduk atau ruang tamu dengan sofa yang nyaman</li>\r\n  <li>Kamar mandi pribadi yang luas, dilengkapi dengan shower atau bathtub, perlengkapan mandi berkualitas, dan pengering rambut</li>\r\n  <li>Wi-Fi gratis dengan kecepatan tinggi</li>\r\n  <li>AC atau pemanas ruangan sesuai dengan musim</li>\r\n  <li>Mini bar atau fasilitas pembuat kopi dan teh</li>\r\n  <li>Brankas pribadi dan fasilitas tambahan seperti setrika dan papan setrika</li>\r\n  <li>Meja kerja dan area makan jika tersedia</li>\r\n</ul>\r\n\r\nKamar family adalah pilihan ideal untuk keluarga yang membutuhkan lebih banyak ruang dan kenyamanan, dengan fasilitas yang dirancang untuk memenuhi kebutuhan semua anggota keluarga selama menginap.');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(60) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `tipe_kamar` enum('Standar','Deluxe','Family') NOT NULL,
  `tgl_pesan` date NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `breakfast` enum('Ya','Tidak') NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `tgl_pesan`, `durasi_menginap`, `breakfast`, `total_bayar`) VALUES
(17, 'Latifah Anggraeni', 'Perempuan', '3301028901232322', 'Deluxe', '2024-09-05', 5, 'Ya', 2610000),
(20, 'Anggoro', 'Laki-laki', '3301012387230002', 'Deluxe', '2024-08-23', 2, 'Ya', 1160000),
(21, 'Dwi', 'Perempuan', '3302013089823002', 'Family', '2024-08-23', 4, 'Ya', 3888000),
(22, 'Latifah', 'Perempuan', '1209348720012093', 'Standar', '2024-08-24', 3, 'Ya', 540000),
(23, 'Anggra', 'Laki-laki', '1230934820923213', 'Standar', '2024-08-23', 4, 'Tidak', 360000),
(24, 'anggra', 'Perempuan', '9723487239821423', 'Standar', '2024-08-23', 4, 'Tidak', 360000),
(25, 'Amanda', 'Perempuan', '3302054412030002', 'Deluxe', '2024-08-24', 3, 'Ya', 1740000),
(26, 'Ahmad', 'Laki-laki', '3302054412050007', 'Standar', '2024-08-25', 1, 'Ya', 180000),
(27, 'amandaaa', 'Perempuan', '1234567887654321', 'Standar', '2024-08-25', 2, 'Ya', 360000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_kamar_hotel`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_kamar_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
