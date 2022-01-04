-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2019 pada 06.05
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_1`
--

CREATE TABLE `admin_1` (
  `id_admin1` int(11) NOT NULL,
  `nama_admin1` varchar(50) NOT NULL,
  `username_admin1` text NOT NULL,
  `password_admin1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_1`
--

INSERT INTO `admin_1` (`id_admin1`, `nama_admin1`, `username_admin1`, `password_admin1`) VALUES
(1, 'Pussopkamsinas', 'pussopkamsinas', '61c86def741a02f32e71548862374d8600b3e10f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_2`
--

CREATE TABLE `admin_2` (
  `id_admin2` int(11) NOT NULL,
  `nama_admin2` varchar(50) NOT NULL,
  `tipe` text NOT NULL,
  `username_admin2` text NOT NULL,
  `password_admin2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_2`
--

INSERT INTO `admin_2` (`id_admin2`, `nama_admin2`, `tipe`, `username_admin2`, `password_admin2`) VALUES
(1, 'Admin Dua 1', 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Pemerintah, Deputi I\r\n', 'admin11', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'Admin Dua 2', 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Infrastruktur Informasi Kritikal Nasional, Deputi I\r\n', 'admin12', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(3, 'admin dua 3', 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Ekonomi Digital, Deputi I\r\n', 'admin13', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(4, 'lm', 'Direktorat Proteksi Pemerintah, Deputi II\r\n', 'admin21', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(5, 'k', 'Direktorat Deteksi Ancaman, Deputi I\r\n', 'admin14', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(6, 'lm', 'Direktorat Proteksi Infrastruktur Informasi Kritikal Nasional, Deputi II\r\n', 'admin22', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(7, 'lm', 'Direktorat Proteksi Ekonomi Digital, Deputi II\r\n', 'admin23', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(8, 'lm', 'Direktorat Penanggulangan dan Pemulihan Pemerintah, Deputi III\r\n', 'admin31', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(9, 'lm', 'Direktorat Penanggulangan dan Pemulihan Infrastruktur Informasi Kritikal Nasional, Deputi III\r\n', 'admin32', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(10, 'lm', 'Direktorat Penanggulangan dan Pemulihan Ekonomi Digital, Deputi III\r\n', 'admin33', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(11, 'lm', 'Kepala Pusat Data dan Teknologi Informasi Komunikasi\r\n', 'p4', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan_siber`
--

CREATE TABLE `aduan_siber` (
  `id_aduan` int(11) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `id_admin1` int(11) DEFAULT NULL,
  `id_admin2` int(11) DEFAULT NULL,
  `waktu_kejadian` date NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi_umum` text NOT NULL,
  `nama_ket_aset` varchar(100) NOT NULL,
  `lokasi_aset` text NOT NULL,
  `identitas_pemilik_aset` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `jenis_klasifikasi` text,
  `analisis` text,
  `solusi` text,
  `ticket` varchar(50) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `terakhir_diupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_verif` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aduan_siber`
--

INSERT INTO `aduan_siber` (`id_aduan`, `id_pelapor`, `id_admin1`, `id_admin2`, `waktu_kejadian`, `waktu_laporan`, `deskripsi_umum`, `nama_ket_aset`, `lokasi_aset`, `identitas_pemilik_aset`, `bukti`, `jenis_klasifikasi`, `analisis`, `solusi`, `ticket`, `status`, `terakhir_diupdate`, `status_verif`) VALUES
(1, 4, NULL, NULL, '2019-02-12', '2019-04-23 06:55:14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl risus, volutpat nec eleifend ac, tincidunt vitae mi. Duis id orci et neque volutpat faucibus ut a massa. Sed dapibus eleifend tristique. Pellentesque fringilla a mi nec tempus. Phasellus vel fermentum diam, quis commodo lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi hendrerit quis felis sed condimentum. Phasellus volutpat, felis ut molestie sodales, dolor ipsum ornare nulla, vitae tempor sem mauris id mauris. Mauris condimentum non lacus a convallis. Etiam faucibus justo a ligula maximus, eu vulputate lectus semper. Morbi id turpis dolor.', 'nama aset', 'lokasi aset', 'pemilik aset', 'bukti', 'Unauthorized System Access', NULL, NULL, 'uhi1312312', '3', '2019-02-27 17:58:28', 1),
(3, 3, NULL, NULL, '2019-03-01', '2019-05-18 15:51:01', 'kn', 'jn', 'kmk', 'km', '5a4efa45eae9b-logo-bssn_665_3741.jpg', 'Account Comoromise', NULL, NULL, 'UMCTK', '1', '2019-03-07 06:27:02', 0),
(5, 4, NULL, NULL, '2019-03-28', '2019-05-18 09:10:38', 'c', 'c', 'c', 'c', 'Target_Semester_Genap_Adam_Waluyo1.docx', 'Account Comoromise', NULL, NULL, 'NCBK4', '1', '2019-03-24 06:08:37', 1),
(6, 6, NULL, NULL, '2019-04-19', '2019-05-18 15:51:04', 'Jaringan saya terkena penetrasi', 'jaringan server sekolah', 'bogor', 'wahaz', 'Fahdel_Paper_Bahasa_Inggris.pdf', 'Account Comoromise', NULL, NULL, 'V6G51', '1', '2019-04-17 09:13:21', 0),
(7, 6, NULL, NULL, '2019-04-17', '2019-04-23 06:55:17', 'Web saya terkena phising', 'weku.com', 'bogor', 'wahaz', 'TUGAS_Fahdel_Achmad_PTIK.docx', 'Phising', NULL, NULL, 'BQ8VA', '1', '2019-04-17 09:20:31', 1),
(9, 4, NULL, NULL, '2019-04-17', '2019-05-26 03:06:03', 'a', 'a', 'a', 'a', 'json_pare_vb_net.JPG', 'Account Comoromise', NULL, NULL, '708CF', '1', '2019-04-30 15:25:45', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `balas_aduan`
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
-- Dumping data untuk tabel `balas_aduan`
--

INSERT INTO `balas_aduan` (`id`, `id_aduan`, `d11`, `d12`, `d13`, `d14`, `d21`, `d22`, `d23`, `d31`, `d32`, `d33`, `p4`) VALUES
(4, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_aduan` int(11) NOT NULL,
  `id_admin1` int(11) NOT NULL,
  `id_admin2` int(11) DEFAULT NULL,
  `pelapor` int(11) DEFAULT NULL,
  `chat` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_chat` int(11) NOT NULL DEFAULT '0',
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `id_aduan`, `id_admin1`, `id_admin2`, `pelapor`, `chat`, `datetime`, `status_chat`, `file`) VALUES
(1, 1, 1, NULL, 0, 'ffdfdf', '2019-04-20 10:02:48', 1, ''),
(2, 1, 1, 0, 0, 'sfsf', '2019-03-23 15:36:44', 1, ''),
(3, 1, 1, 0, 0, 'dfdsfdsf', '2019-03-23 15:39:58', 1, ''),
(4, 1, 1, 0, 0, 'dsgds', '2019-03-23 15:40:00', 1, ''),
(5, 1, 1, 0, 0, 'scdscdsv', '2019-03-23 15:42:29', 1, ''),
(6, 1, 1, 0, 0, 'scdscdsv', '2019-03-23 15:42:33', 1, ''),
(8, 1, 1, 0, 0, '------------------------------------------------------', '2019-03-24 05:39:30', 1, ''),
(9, 1, 0, 0, 0, 'skds', '2019-05-26 03:59:44', 1, ''),
(10, 1, 0, 3, 0, 'kkk', '2019-05-26 03:59:58', 0, ''),
(11, 7, 0, 1, 0, 'Mantap', '2019-04-17 10:35:17', 1, ''),
(12, 7, 1, 0, 0, 'Lanjutkan', '2019-04-17 10:43:25', 1, ''),
(13, 7, 0, 0, 6, 'siap', '2019-04-20 10:30:23', 1, ''),
(14, 7, 0, 0, 6, 'terimakasih bapak', '2019-04-20 10:46:57', 1, ''),
(15, 7, 1, 0, NULL, 'sama-sama', '2019-04-20 14:02:08', 1, ''),
(16, 7, 0, 0, 6, 'ok', '2019-04-21 01:04:14', 1, ''),
(20, 7, 0, NULL, 6, '', '2019-04-21 01:33:23', 1, 'wallhaven-240532.jpg'),
(27, 7, 0, NULL, NULL, '', '2019-04-21 01:52:28', 1, 'unnamed2.png'),
(28, 7, 0, NULL, NULL, '', '2019-04-21 04:06:56', 1, 'flat,800x800,075,f.u21.jpg'),
(29, 7, 1, 0, NULL, 'Ashiap', '2019-04-23 06:55:35', 1, ''),
(30, 7, 0, 1, NULL, 'Mohon izin bang', '2019-04-23 23:22:17', 1, ''),
(34, 7, 0, 1, NULL, 'okok', '2019-04-23 07:07:47', 0, ''),
(36, 7, 0, 1, NULL, 'yo', '2019-04-23 07:17:34', 0, ''),
(43, 9, 0, NULL, 4, '', '2019-05-18 07:44:09', 1, 'Capture.JPG'),
(44, 1, 0, 1, NULL, 'yo', '2019-05-26 03:52:48', 1, ''),
(45, 3, 0, 1, NULL, 'yoo', '2019-05-18 09:11:07', 0, ''),
(47, 5, 0, 1, NULL, 'pppp', '2019-05-26 03:50:21', 0, ''),
(48, 1, 1, 0, NULL, 'jasjajas', '2019-05-26 04:00:06', 1, ''),
(49, 5, 0, 1, NULL, 'nmnmnmn', '2019-05-26 04:01:17', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no_id` varchar(11) NOT NULL,
  `nama_org` varchar(100) NOT NULL,
  `alamat_org` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`id_pelapor`, `nama_pelapor`, `no_telp`, `email`, `password`, `no_id`, `nama_org`, `alamat_org`, `status`) VALUES
(2, 'Pelapor 1', '0861384716', 'wildanzhq@gmail.com', '76efb51a6f471449ccf1463e635053fc0bac7625', '18517541511', '', '', 0),
(3, 'Pelapor 2', '0861384716', 'rizaldi.wahaz@gmail.com', '0e3282ddd72fba2c5c302d30d18437c7d6823372', '985175415', '', '', 0),
(4, 'Waluyo', '1', 'a@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '13452343', '', '', 1),
(6, 'Wahaz', '123', 'o@o.com', '7a81af3e591ac713f81ea1efe93dcf36157d8376', '098', 'o', 'ojnjnjn', 0),
(8, 'a', 'a', 'ricoosetyawan@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '1', '', '', 0),
(9, 'nama', '1212312312', 'nama@mail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '123123123', '', '', 0),
(13, 'p', '0', 'p@p.com', '516b9783fca517eecbd1d064da2d165310b19759', '0', '', '', 0),
(14, 'l', '0', 'l@l.com', '07c342be6e560e7f43842e2e21b774e61d85f047', '0', '', '', 0),
(15, 'm', '0', 'm@m.com', '6b0d31c0d563223024da45691584643ac78c96e8', '0', '', '', 0),
(16, 'm', '0', 'm@m.com', '6b0d31c0d563223024da45691584643ac78c96e8', '0', '', '', 0),
(17, 'm', '0', 'm@m.com', '6b0d31c0d563223024da45691584643ac78c96e8', '0', '', '', 0),
(18, 'k', '0', 'k@k.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '0', '', '', 0),
(19, 'n', '0', 'n@n.com', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', '0', '', '', 0),
(20, 'u', '0', 'u@u.com', '51e69892ab49df85c6230ccc57f8e1d1606caccc', '0', '', '', 1),
(21, 'b', '0', 'b@b.com', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', '0', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id_admin1`);

--
-- Indexes for table `admin_2`
--
ALTER TABLE `admin_2`
  ADD PRIMARY KEY (`id_admin2`);

--
-- Indexes for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD PRIMARY KEY (`id_aduan`),
  ADD KEY `id_pelapor` (`id_pelapor`),
  ADD KEY `id_pelapor_2` (`id_pelapor`),
  ADD KEY `id_admin1` (`id_admin1`),
  ADD KEY `id_admin1_2` (`id_admin1`),
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
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id_admin1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_2`
--
ALTER TABLE `admin_2`
  MODIFY `id_admin2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `aduan_siber`
--
ALTER TABLE `aduan_siber`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `balas_aduan`
--
ALTER TABLE `balas_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aduan_siber`
--
ALTER TABLE `aduan_siber`
  ADD CONSTRAINT `aduan_siber_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`),
  ADD CONSTRAINT `aduan_siber_ibfk_2` FOREIGN KEY (`id_admin2`) REFERENCES `admin_2` (`id_admin2`),
  ADD CONSTRAINT `aduan_siber_ibfk_3` FOREIGN KEY (`id_admin1`) REFERENCES `admin_1` (`id_admin1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
