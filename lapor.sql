-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 03:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_1`
--

CREATE TABLE `admin_1` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` text NOT NULL,
  `password_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_1`
--

INSERT INTO `admin_1` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Pussopkamsinas', 'pussopkamsinas', '61c86def741a02f32e71548862374d8600b3e10f'),
(4, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `aduan_siber`
--

CREATE TABLE `aduan_siber` (
  `id_aduan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_admin2` int(11) DEFAULT NULL,
  `waktu_kejadian` date NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi_umum` text NOT NULL,
  `nama_ket_aset` varchar(100) NOT NULL,
  `lokasi_aset` text NOT NULL,
  `lat` float(100,20) NOT NULL,
  `lng` float(100,20) NOT NULL,
  `identitas_pemilik_aset` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `jenis_klasifikasi` text DEFAULT NULL,
  `analisis` text DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `ticket` varchar(50) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `terakhir_diupdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_verif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan_siber`
--

INSERT INTO `aduan_siber` (`id_aduan`, `id_user`, `id_admin`, `id_admin2`, `waktu_kejadian`, `waktu_laporan`, `deskripsi_umum`, `nama_ket_aset`, `lokasi_aset`, `lat`, `lng`, `identitas_pemilik_aset`, `bukti`, `jenis_klasifikasi`, `analisis`, `solusi`, `ticket`, `status`, `terakhir_diupdate`, `status_verif`) VALUES
(13, 22, NULL, NULL, '2021-09-16', '2021-09-17 05:32:18', 'peta', 'peta', 'Pekanbaru', 0.54147630929946900000, 101.43946838378906000000, '11', 'Untitled_design2.png', 'Phising', NULL, NULL, 'LWSLZ', '2', '2021-09-16 19:15:00', 1),
(14, 22, NULL, NULL, '2021-09-17', '2021-12-01 06:06:36', 'frrvv', 'vrvrv', 'Pekanbaru', 0.53930914402008060000, 101.44758605957031000000, '1001', 'Beasiswa_anak_nagari11.png', 'Account Comoromise', NULL, NULL, 'PTZUR', '1', '2021-09-16 19:35:13', 1),
(15, 22, NULL, NULL, '2021-10-07', '2021-10-07 00:20:07', 'Test', 'Konten', 'Padang', 0.00000000000000000000, 0.00000000000000000000, '10011', 'Simbol-Display.jpg', 'Account Comoromise', NULL, NULL, '90RXL', '1', '2021-10-06 17:02:36', 1),
(16, 22, NULL, NULL, '2021-10-07', '2021-12-01 06:05:25', 'sdfv', 'srvrrv', 'rsrvsrv', 0.00000000000000000000, 0.00000000000000000000, '123', 'download.png', 'Exploitaion of Weak Network Architecture', NULL, NULL, '0114W', '1', '2021-10-07 15:19:17', 1),
(17, 22, NULL, NULL, '2021-10-13', '2021-12-22 21:42:16', 'df', 'fbd', 'dfbdf', 0.00000000000000000000, 0.00000000000000000000, 'dfbf', 'download1.png', 'Data Theft', NULL, NULL, 'US2PQ', '1', '2021-10-13 09:56:25', 1),
(18, 22, NULL, NULL, '2021-12-02', '2021-12-25 18:11:39', 'cece', 'cece', 'cec', 0.52338826656341550000, 101.44844055175781000000, 'cec', '22ffbaa3-ca33-49ab-8933-774bddfb84fa.jpg', 'Data Theft', NULL, NULL, '9U26Y', '1', '2021-12-24 05:46:52', 1),
(19, 22, NULL, NULL, '2021-12-30', '2021-12-30 05:13:46', 'Label Hidden', 'scsr', 'Pekanbaru', 0.54690486192703250000, 101.39459228515625000000, '111111', 'download2.png', 'Network Penetration', NULL, NULL, '9MQQU', '1', '2021-12-30 03:50:11', 1),
(20, 22, NULL, NULL, '2022-01-02', '2022-01-01 19:55:30', 'Gangguan Jaringan', 'Jaringan', 'Pekanbaru', 0.51772367954254150000, 101.45032501220703000000, '122212121', '22ffbaa3-ca33-49ab-8933-774bddfb84fa1.jpg', 'Service Disruption', NULL, NULL, 'N50SR', '1', '2022-01-01 19:55:30', 0),
(21, 22, NULL, NULL, '2021-12-27', '2022-01-01 19:56:25', 'Test', 'ace', 'ac', 0.52355992794036870000, 101.44826507568360000000, 'aec', '22ffbaa3-ca33-49ab-8933-774bddfb84fa2.jpg', 'Spoofing or DNS Poisoning', NULL, NULL, 'Y7V4U', '1', '2022-01-01 19:56:25', 0),
(22, 25, NULL, NULL, '2021-12-31', '2022-01-02 00:41:08', 'Jaringan rusak', 'Modem', 'Pekanbaru', 0.51921135187149050000, 101.45133209228516000000, '1221212', 'download3.png', 'Data Theft', NULL, NULL, 'WP6W3', '1', '2022-01-02 00:41:08', 0),
(23, 25, NULL, NULL, '2021-12-26', '2022-01-02 00:41:49', 'Gangguan layanan', 'Jaringan', 'Padang', 0.52245372533798220000, 101.45655822753906000000, '1342213', 'Coat_of_arms_of_Riau_Islands_svg.png', 'Service Disruption', NULL, NULL, 'MO2Q2', '1', '2022-01-02 00:41:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `balas_aduan`
--

CREATE TABLE `balas_aduan` (
  `id` int(11) NOT NULL,
  `id_aduan` int(11) NOT NULL,
  `d11` int(11) NOT NULL,
  `d12` int(11) NOT NULL,
  `d13` int(11) NOT NULL,
  `d14` int(11) NOT NULL,
  `d21` int(11) NOT NULL,
  `d22` int(11) NOT NULL,
  `d23` int(11) NOT NULL,
  `d31` int(11) NOT NULL,
  `d32` int(11) NOT NULL,
  `d33` int(11) NOT NULL,
  `p4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balas_aduan`
--

INSERT INTO `balas_aduan` (`id`, `id_aduan`, `d11`, `d12`, `d13`, `d14`, `d21`, `d22`, `d23`, `d31`, `d32`, `d33`, `p4`) VALUES
(4, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0),
(10, 10, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(11, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_aduan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_admin2` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `chat` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_chat` int(11) NOT NULL DEFAULT 0,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `id_aduan`, `id_admin`, `id_admin2`, `user`, `chat`, `datetime`, `status_chat`, `file`) VALUES
(76, 11, 1, 0, NULL, 'Hai juga', '2021-09-16 17:42:07', 1, ''),
(77, 11, 0, 0, 22, 's', '2021-09-16 17:43:26', 1, ''),
(78, 13, 1, 0, NULL, 'lklk', '2021-10-13 10:39:39', 1, ''),
(79, 13, 1, 0, NULL, 'Woi co', '2021-10-13 10:39:52', 1, ''),
(80, 15, 0, 0, 22, 'srgrg', '2021-11-03 12:36:23', 1, ''),
(81, 15, 1, 0, NULL, 'Testb babbbi', '2021-11-03 12:38:18', 1, ''),
(82, 16, 0, 0, 22, 'acacac', '2021-12-30 05:12:04', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no_id` varchar(11) NOT NULL,
  `nama_org` varchar(100) DEFAULT NULL,
  `alamat_org` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_telp`, `email`, `password`, `no_id`, `nama_org`, `alamat_org`, `status`) VALUES
(22, 'Prayoga', '083182983960', 'prayoga@gmail.com', 'c8fad66c49eaae14b967f69405a1b2f29aa18d63', '11111111111', '', '', 1),
(25, 'Edo', '083182983961', 'edo@gmail.com', '5593b31fd4cab38d2a410ed6b02a6a74f58a69d4', '12345', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD PRIMARY KEY (`id_aduan`),
  ADD KEY `id_pelapor` (`id_user`),
  ADD KEY `id_pelapor_2` (`id_user`),
  ADD KEY `id_admin1` (`id_admin`),
  ADD KEY `id_admin1_2` (`id_admin`),
  ADD KEY `id_admin2` (`id_admin2`);

--
-- Indexes for table `balas_aduan`
--
ALTER TABLE `balas_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `balas_aduan`
--
ALTER TABLE `balas_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD CONSTRAINT `aduan_siber_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `aduan_siber_ibfk_2` FOREIGN KEY (`id_admin2`) REFERENCES `admin_2` (`id_admin2`),
  ADD CONSTRAINT `aduan_siber_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin_1` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
