-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 12:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perbasasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(20) DEFAULT '-',
  `no_hp_ortu` varchar(20) DEFAULT '-',
  `alamat_rumah` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) DEFAULT '-',
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `berat_badan` int(11) NOT NULL DEFAULT '0',
  `tinggi_badan` int(11) NOT NULL DEFAULT '0',
  `riwayat_penyakit` text,
  `level_akun` enum('admin','penyeleksi','peserta','') NOT NULL,
  `status_akun` enum('Aktif','Tidak Aktif','Menunggu Persetujuan','') NOT NULL DEFAULT 'Menunggu Persetujuan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `username`, `password`, `email`, `tgl_lahir`, `no_hp`, `no_hp_ortu`, `alamat_rumah`, `asal_sekolah`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `riwayat_penyakit`, `level_akun`, `status_akun`) VALUES
(1, 'tes admin', 'admin', 'admin123', 'admin@yahoo.com', '2002-02-11', '', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 60, 168, '', 'admin', 'Aktif'),
(2, 'tes penyeleksi 1', '8888', '8888', 'penyeleksi2@yahoo.com', '2000-02-22', '085249388401', '', 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'penyeleksi', 'Aktif'),
(3, 'tes 1', '1111', '1111', 'tes1@yahoo.com', '2002-02-11', NULL, NULL, 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'peserta', 'Menunggu Persetujuan'),
(4, 'tes 22', '2222', '2222', 'tes2@yahoo.com', '2002-02-11', '08123543133', NULL, 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'peserta', 'Aktif'),
(5, 'tes 3', '3333', '3333', 'tes3@yahoo.com', '2002-02-11', '2147483647', '81457', 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'peserta', 'Tidak Aktif'),
(7, 'tes penyeleksi 2', 'asdasd', 'asdasd', 'asdasd@yahoo.com', '1995-02-05', '08123543133', '-', 'jln. lesti utara 12', 'sma 1 malang', 'Perempuan', 0, 0, '', 'penyeleksi', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_sub_tes`
--

CREATE TABLE `bobot_sub_tes` (
  `id_bobot_sub_tes` int(11) NOT NULL,
  `id_bobot_tes` int(11) NOT NULL,
  `jenis_sub_tes` varchar(30) NOT NULL,
  `nilai_bobot_sub_tes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_sub_tes`
--

INSERT INTO `bobot_sub_tes` (`id_bobot_sub_tes`, `id_bobot_tes`, `jenis_sub_tes`, `nilai_bobot_sub_tes`) VALUES
(1, 1, 'Tes Keterampilan', 30),
(2, 1, 'Tes Unjuk Kerja', 50),
(3, 2, 'Tes Keterampilan', 60),
(4, 2, 'Tes Unjuk Kerja', 40),
(5, 3, 'Tes Keterampilan', 70),
(6, 3, 'Tes Unjuk Kerja', 30);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_tes`
--

CREATE TABLE `bobot_tes` (
  `id_bobot_tes` int(11) NOT NULL,
  `jenis_tes` varchar(30) NOT NULL,
  `nilai_bobot_tes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_tes`
--

INSERT INTO `bobot_tes` (`id_bobot_tes`, `jenis_tes`, `nilai_bobot_tes`) VALUES
(1, 'Tes Pukul', 30),
(2, 'Tes Tangkap', 30),
(3, 'Tes Lempar', 20),
(4, 'Tes Lari', 20);

-- --------------------------------------------------------

--
-- Table structure for table `list_seleksi`
--

CREATE TABLE `list_seleksi` (
  `id_seleksi` int(11) NOT NULL,
  `nama_seleksi` varchar(100) NOT NULL,
  `jenis_olahraga` enum('Baseball','Softball','','') NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `batas_umur` int(11) NOT NULL,
  `tgl_seleksi` date NOT NULL,
  `tgl_kejuaraan` date NOT NULL,
  `status_seleksi` enum('Belum Selesai','Selesai','','') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_seleksi`
--

INSERT INTO `list_seleksi` (`id_seleksi`, `nama_seleksi`, `jenis_olahraga`, `jenis_kelamin`, `batas_umur`, `tgl_seleksi`, `tgl_kejuaraan`, `status_seleksi`) VALUES
(1, 'Seleksi Kejurda 2020', 'Baseball', 'Laki-laki', 20, '2020-03-22', '2020-04-01', 'Belum Selesai'),
(2, 'Seleksi Kejurda 2020', 'Baseball', 'Perempuan', 15, '2020-03-21', '2020-04-25', 'Belum Selesai'),
(6, 'kejurda 2019', 'Baseball', 'Perempuan', 20, '2020-03-09', '2020-03-17', 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bobot_sub_tes`
--
ALTER TABLE `bobot_sub_tes`
  ADD PRIMARY KEY (`id_bobot_sub_tes`),
  ADD KEY `fk_id_bobot_tes` (`id_bobot_tes`);

--
-- Indexes for table `bobot_tes`
--
ALTER TABLE `bobot_tes`
  ADD PRIMARY KEY (`id_bobot_tes`),
  ADD KEY `jenis_tes` (`jenis_tes`);

--
-- Indexes for table `list_seleksi`
--
ALTER TABLE `list_seleksi`
  ADD PRIMARY KEY (`id_seleksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bobot_sub_tes`
--
ALTER TABLE `bobot_sub_tes`
  MODIFY `id_bobot_sub_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bobot_tes`
--
ALTER TABLE `bobot_tes`
  MODIFY `id_bobot_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_seleksi`
--
ALTER TABLE `list_seleksi`
  MODIFY `id_seleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot_sub_tes`
--
ALTER TABLE `bobot_sub_tes`
  ADD CONSTRAINT `fk_id_bobot_tes` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
