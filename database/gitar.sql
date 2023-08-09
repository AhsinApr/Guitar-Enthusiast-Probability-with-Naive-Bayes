-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 11:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gitar`
--

CREATE TABLE `gitar` (
  `id_gitar` int(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `id_merk` text NOT NULL,
  `warna` varchar(50) NOT NULL,
  `jenis` varchar(60) NOT NULL,
  `ukuran` varchar(60) NOT NULL,
  `harga` text NOT NULL,
  `gambar` text NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gitar`
--

INSERT INTO `gitar` (`id_gitar`, `nama`, `id_merk`, `warna`, `jenis`, `ukuran`, `harga`, `gambar`, `hasil`) VALUES
(49, 'DR32SE TVS Top Solid', 'Cetta', 'Hitam Kuning', 'Elektrik', 'Normal', 'Super', '1686814644_41324a54dc4f11c65504.jpg', 'Disukai'),
(50, 'DR32SE MS', 'Cetta', 'Natural', 'Elektrik', 'Normal', 'Super', '1686814644_41324a54dc4f11c65504.jpg', 'Disukai'),
(51, 'Original FM28E', 'Cetta', 'Natural Doff', 'Elektrik', 'Normal', 'Terjangkau', '1686814764_91768dd55da504b8d855.jpg', 'Disukai'),
(52, 'OM28CE Red', 'Cetta', 'Merah', 'Elektrik', 'Normal', 'Terjangkau', '1686816371_1f11eade6423fc2831ca.jpg', 'Tidak'),
(53, 'OM28CE Black', 'Cetta', 'Hitam Doff', 'Elektrik', 'Normal', 'Terjangkau', '1686816464_1ec5eb7b6fe59eebd95c.jpg', 'Tidak'),
(55, 'Original XO28E', 'Cetta', 'Merah Tua', 'Elektrik', 'Normal', 'Terjangkau', '1686816645_6e2ea3b4cfcc197ccba1.jpg', 'Tidak'),
(56, 'CG21CEN', 'Cetta', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1686816716_74dbaa53093bcb9ff611.jpg', 'Tidak'),
(57, 'CX28CE', 'Cetta', 'Merah Tua', 'Elektrik', 'Normal', 'Terjangkau', '1686816793_a3e4de21508c67835d6e.jpg', 'Disukai'),
(58, 'CD22CE N', 'Cetta', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1686816869_8e7ce7755d77908f50f1.jpg', 'Disukai'),
(59, 'Original AD810OP', 'Cort', 'Natural', 'Akustik', 'Normal', 'Terjangkau', '1686817117_0ef7a2911249998f8ca2.jpg', 'Disukai'),
(60, 'GWC 235 NA PREAMP HSY 400G', 'Cowboy', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1686817222_1f9f265849279d76c4e5.jpg', 'Disukai'),
(61, 'CGC 100 NA', 'Cowboy', 'Natural', 'Akustik', 'Normal', 'Murah', '1686817337_d3efce5be21fc93663d9.jpg', 'Disukai'),
(62, 'UK 23 NS', 'Cowboy', 'Natural Doff', 'Ukulele', 'Kecil', 'Murah', '1686817425_a79b5aaa7ab7dece1244.jpg', 'Disukai'),
(63, 'UK 21 NA', 'Cowboy', 'Natural', 'Ukulele', 'Kecil', 'Murah', '1686817510_842af004230692292654.jpg', 'Disukai'),
(64, 'UK 21 BL', 'Cowboy', 'Hitam', 'Ukulele', 'Kecil', 'Murah', '1686817591_9279521bc696a4192507.jpg', 'Tidak'),
(65, 'Junior 3/4 Cowboy GW 120 NS', 'Cowboy', 'Natural', 'Akustik', 'Sedang', 'Murah', '1686817710_9fd7efb3eb2a87447065.jpg', 'Disukai'),
(66, 'Junior 3/4 Cowboy GW 120 NA', 'Cowboy', 'Natural Doff', 'Akustik', 'Sedang', 'Murah', '1686817835_4689dd8e2f1618468035.jpg', 'Disukai'),
(67, 'DD 320 CE Top Solid', 'Delta', 'Natural Doff', 'Elektrik', 'Normal', 'Super', '1686820411_bea5efce97dfb5195b49.jpg', 'Tidak'),
(68, 'DD 320 CE', 'Delta', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1686820500_ff0054f2b123fc958484.jpg', 'Disukai'),
(69, 'DA 350 CE SMB Top Solid', 'Delta', 'Hitam Kuning', 'Elektrik', 'Normal', 'Terjangkau', '1686820588_03f40af49088ec05a5cd.jpg', 'Disukai'),
(70, 'DC 300 CE Top Solid Spruce', 'Delta', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1686820664_e93d862eb489c3fe4b05.jpg', 'Tidak'),
(71, 'JGS GUITAR CR 01 NS', 'Jgs', 'Natural Doff', 'Akustik', 'Normal', 'Murah', '1686820803_7163b5301c4b9d86b628.jpg', 'Tidak'),
(72, 'JGS TR 01 NAOP', 'Jgs', 'Natural Doff', 'Akustik', 'Normal', 'Murah', '1686820990_361afab754d226ead481.jpg', 'Disukai'),
(73, 'JGS GUITAR CR 01 NA', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1686821156_b3d19120ff02641dd72d.jpg', 'Disukai'),
(74, 'JGS GUITAR TR 01 NA', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1686821295_86065c2dfe4f7df5400e.jpg', 'Tidak '),
(75, 'JGS TR 01 NS', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1686821411_9fc8950149e338b89010.jpg', 'Tidak '),
(76, 'JGS DR 01 NA', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1686821478_6fea42228c8057f8ddae.jpg', 'Disukai'),
(77, 'JGS CR 01 BK', 'Jgs', 'Hitam Doff', 'Akustik', 'Normal', 'Murah', '1686821559_10faad14ba22271653be.jpg', 'Tidak'),
(78, 'JGS DR 01 BK', 'Jgs', 'Hitam Doff', 'Akustik', 'Normal', 'Murah', '1686821639_d7d2a8e71a027f8b4ceb.jpg', 'Tidak'),
(79, 'JGS GUITAR TR 01 BK', 'Jgs', 'Hitam Doff', 'Akustik', 'Normal', 'Murah', '1686821908_8a2ffabbf5a09e4ce6af.jpg', 'Disukai'),
(80, 'JGS GUITAR BC 01 NA', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1687072036_339535dc8c8bc2a92601.jpg', 'Disukai'),
(81, 'JGS BD 01 NA', 'Jgs', 'Natural', 'Akustik', 'Normal', 'Murah', '1687072121_d16d0aeabd86761ccfdb.jpg', 'Tidak'),
(82, 'PEMULA NO BRAND 01', 'Jgs', 'Natural', 'Akustik', 'Sedang', 'Murah', '1687072199_e9dc4aeffe7515499cbb.jpg', 'Tidak'),
(83, 'PEMULA NO BRAND 02', 'Jgs', 'Natural', 'Akustik', 'Sedang', 'Murah', '1687072277_a1211d7f5b4462bc533f.jpg', 'Disukai'),
(84, 'CR 01 NS', 'Jgs', 'Natural Doff', 'Akustik', 'Normal', 'Murah', '1687072363_394355dbd25df53d89fa.jpg', 'Tidak'),
(85, 'JGS TR 01 NAOP E', 'Jgs', 'Natural Doff', 'Elektrik', 'Normal', 'Murah', '1687072490_9d19dc374b609ed13224.jpg', 'Disukai'),
(86, 'JGS CR 01 NA E', 'Jgs', 'Natural', 'Elektrik', 'Normal', 'Murah', '1687072647_15f64f16a33a9620136e.jpg', 'Disukai'),
(87, 'Junior 3/4 JGS JNR 01 NS', 'Jgs', 'Coklat Doff', 'Elektrik', 'Sedang', 'Murah', '1687072776_e307e41f93c7a1571602.jpg', 'Tidak'),
(88, 'Junior 3/4 JGS JRC 01 NA', 'Jgs', 'Natural Doff', 'Akustik', 'Sedang', 'Murah', '1687072910_f47b2a25a66ced24d8ed.jpg', 'Tidak'),
(89, 'Junior 3/4 JGS JNR 01 NA', 'Jgs', 'Natural Doff', 'Elektrik', 'Sedang', 'Murah', '1687073047_41c2eaf5f09560bc027e.jpg', 'Disukai'),
(90, 'Junior 3/4 JGS JNR 01 BK', 'Jgs', 'Hitam Doff', 'Elektrik', 'Sedang', 'Murah', '1687073206_d54653e900a4070815b5.jpg', 'Disukai'),
(91, 'JGS GLE 01 BK', 'Jgs', 'Hitam Doff', 'Lele', 'Kecil', 'Murah', '1687073279_fe09d4030d1c414d209b.jpg', 'Disukai'),
(92, 'JGS GLE 01 NA', 'Jgs', 'Natural', 'Lele', 'Kecil', 'Murah', '1687073342_fd1c54a45ab7e37c72b5.jpg', 'Tidak'),
(93, 'Original F 07 GN', 'Segovia', 'Natural', 'Elektrik', 'Normal', 'Terjangkau', '1687073414_de4ca396f732f4177434.jpg', 'Disukai'),
(94, 'D 07 GTS', 'Segovia', 'Hitam Kuning', 'Akustik', 'Normal', 'Terjangkau', '1687073487_f27a39ab48f59e8888d2.jpg', 'Tidak'),
(95, 'Original DW 07 GN', 'Segovia', 'Natural', 'Akustik', 'Normal', 'Terjangkau', '1687073684_bc55370d1bda4175ded4.jpg', 'Disukai'),
(96, 'Original F310', 'Yamaha', 'Natural', 'Akustik', 'Normal', 'Terjangkau', '1687073796_63e746848f6c75c8f46d.jpg', 'Disukai'),
(97, 'F400SB', 'Yamaha', 'Hitam Doff', 'Akustik', 'Normal', 'Terjangkau', '1687073848_412df6e0fbd624278588.jpg', 'Disukai'),
(98, 'FS400SB', 'Yamaha', 'Hitam Doff', 'Akustik', 'Normal', 'Terjangkau', '1687073923_9fb289cd7039d18e20f1.jpg', 'Disukai'),
(99, 'FS400', 'Yamaha', 'Natural', 'Akustik', 'Normal', 'Terjangkau', '1688283531_ab3480b9ab5b1477549d.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `proses_gitar`
--

CREATE TABLE `proses_gitar` (
  `id_proses` int(11) NOT NULL,
  `id_gitar` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `id_merk` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gitar`
--
ALTER TABLE `gitar`
  ADD PRIMARY KEY (`id_gitar`);

--
-- Indexes for table `proses_gitar`
--
ALTER TABLE `proses_gitar`
  ADD PRIMARY KEY (`id_proses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gitar`
--
ALTER TABLE `gitar`
  MODIFY `id_gitar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `proses_gitar`
--
ALTER TABLE `proses_gitar`
  MODIFY `id_proses` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
