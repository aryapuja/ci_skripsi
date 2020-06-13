-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 03:36 AM
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
  `level_akun` enum('admin','penyeleksi','anggota','') NOT NULL,
  `status_akun` enum('Aktif','Tidak Aktif','Menunggu Persetujuan','') NOT NULL DEFAULT 'Menunggu Persetujuan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `username`, `password`, `email`, `tgl_lahir`, `no_hp`, `no_hp_ortu`, `alamat_rumah`, `asal_sekolah`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `riwayat_penyakit`, `level_akun`, `status_akun`) VALUES
(1, 'tes admin', 'admin', 'admin123', 'admin@yahoo.com', '2002-02-11', '', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 60, 168, '', 'admin', 'Aktif'),
(2, 'tes penyeleksi 1', '8888', '8888', 'penyeleksi2@yahoo.com', '2000-02-22', '085249388401', '', 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'penyeleksi', 'Aktif'),
(3, 'Daisy Amalia', '1111', '1111', 'tes1@yahoo.com', '2001-02-11', '', '', 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, 'Sesak nafas, patah tulang', 'anggota', 'Tidak Aktif'),
(4, 'tes 22', '2222', '2222', 'tes2@yahoo.com', '2002-02-11', '08123543133', NULL, 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'anggota', 'Aktif'),
(5, 'tes 3', '3333', '3333', 'tes3@yahoo.com', '2002-02-11', '2147483647', '81457', 'jln. lesti utara ', 'sma 1 malang', 'Perempuan', 60, 168, '', 'anggota', 'Aktif'),
(6, 'tes penyeleksi 2', 'asdasd', 'asdasd', 'asdasd@yahoo.com', '1995-02-05', '08123543133', '-', 'jln. lesti utara 12', 'sma 1 malang', 'Perempuan', 0, 0, '', 'penyeleksi', 'Aktif'),
(8, 'Dendi Arya Aza Pratama', 'Dendi', 'Dendi', 'tes4@yahoo.com', '0000-00-00', '812469852', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 75, 175, '', 'anggota', 'Aktif'),
(9, 'Zacky Bintang Alzamzamy', 'Zacky', 'Zacky', 'tes5@yahoo.com', '0000-00-00', '8124698533', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 61, 176, '', 'anggota', 'Aktif'),
(10, 'Dicky Ramdiansyah', 'Dicky', 'Dicky', 'tes6@yahoo.com', '0000-00-00', '8124694854', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 86, 166, '', 'anggota', 'Aktif'),
(11, 'Alfian Kusuma Pradana', 'Alfia', 'Alfia', 'tes7@yahoo.com', '0000-00-00', '8124698555', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 66, 170, '', 'anggota', 'Aktif'),
(12, 'Satrio Wibowo', 'Satri', 'Satri', 'tes8@yahoo.com', '0000-00-00', '8124698656', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 82, 163, '', 'anggota', 'Aktif'),
(13, 'Dimas Arya', 'Arya', 'Arya', 'tes9@yahoo.com', '0000-00-00', '8124698657', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 70, 179, '', 'anggota', 'Aktif'),
(14, 'Yahya Zakarya', 'Yahya', 'Yahya', 'tes10@yahoo.com', '0000-00-00', '8124698528', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 66, 180, '', 'anggota', 'Aktif'),
(15, 'Reka Andika Krisna', 'Reka ', 'Reka ', 'tes11@yahoo.com', '0000-00-00', '8124698859', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 92, 176, '', 'anggota', 'Aktif'),
(16, 'Angga Nareswara Wicaksna', 'Angga', 'Angga', 'tes12@yahoo.com', '0000-00-00', '8124698600', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 98, 168, '', 'anggota', 'Aktif'),
(17, 'Zuhdi Arif Azizi', 'Zuhdi', 'Zuhdi', 'tes13@yahoo.com', '0000-00-00', '8124698671', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 89, 161, '', 'anggota', 'Aktif'),
(18, 'Dyo Akbar Maulana', 'Dyo_A', 'Dyo_A', 'tes14@yahoo.com', '0000-00-00', '8124698672', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 95, 174, '', 'anggota', 'Aktif'),
(19, 'Ahmad Ali Akbar', 'Ahmad', 'Ahmad', 'tes15@yahoo.com', '0000-00-00', '8124698563', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 81, 180, '', 'anggota', 'Aktif'),
(20, 'Novalino Ricsawan', 'Noval', 'Noval', 'tes16@yahoo.com', '0000-00-00', '8124698634', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 79, 175, '', 'anggota', 'Aktif'),
(21, 'Muhammad Achmad Ramadhani', 'Achmad', 'Achmad', 'tes17@yahoo.com', '0000-00-00', '8124698645', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 79, 161, '', 'anggota', 'Aktif'),
(22, 'Akbar Wahyu Bagaskara', 'Akbar', 'Akbar', 'tes18@yahoo.com', '0000-00-00', '8124698636', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 74, 171, '', 'anggota', 'Aktif'),
(23, 'Tahta Maulana Ishaq', 'Tahta', 'Tahta', 'tes19@yahoo.com', '0000-00-00', '8124698637', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 85, 172, '', 'anggota', 'Aktif'),
(24, 'David Setyoadi Wicaksono', 'David', 'David', 'tes20@yahoo.com', '0000-00-00', '8124269868', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 99, 165, '', 'anggota', 'Aktif'),
(25, 'Leonardo Jimmy Putra', 'Leona', 'Leona', 'tes21@yahoo.com', '0000-00-00', '8124694869', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 60, 162, '', 'anggota', 'Aktif'),
(26, 'Javier Rizky Ramadhan', 'Javie', 'Javie', 'tes22@yahoo.com', '0000-00-00', '8126469870', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 85, 162, '', 'anggota', 'Aktif'),
(27, 'Galih Shacha Rakasiwi', 'Galih', 'Galih', 'tes23@yahoo.com', '0000-00-00', '8124695871', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 95, 160, '', 'anggota', 'Aktif'),
(28, 'Mochamad Fatha Chofyan', 'Mocha', 'Mocha', 'tes24@yahoo.com', '0000-00-00', '8124698872', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 77, 160, '', 'anggota', 'Aktif'),
(29, 'Raffa Agoes Saputro', 'Raffa', 'Raffa', 'tes25@yahoo.com', '0000-00-00', '8124698573', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 78, 174, '', 'anggota', 'Aktif'),
(30, 'Raditra Galih Agung Gitayasa', 'Radit', 'Radit', 'tes26@yahoo.com', '0000-00-00', '8124698674', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 62, 175, '', 'anggota', 'Aktif'),
(31, 'Elhadji Diva Asmoro', 'Elhad', 'Elhad', 'tes27@yahoo.com', '0000-00-00', '8124698875', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 84, 167, '', 'anggota', 'Aktif'),
(32, 'Rizki Rahmat', 'Rizki', 'Rizki', 'tes28@yahoo.com', '0000-00-00', '8124692876', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 66, 167, '', 'anggota', 'Aktif'),
(33, 'Dheo Santoso', 'Dheo ', 'Dheo ', 'tes29@yahoo.com', '0000-00-00', '8124693877', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 73, 180, '', 'anggota', 'Aktif'),
(34, 'Muhammad Hafidz Darmawan', 'Hafidz', 'Hafidz', 'tes30@yahoo.com', '0000-00-00', '8124469878', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 64, 168, '', 'anggota', 'Aktif'),
(35, 'Ganang Ade Wijaya', 'Ganan', 'Ganan', 'tes31@yahoo.com', '0000-00-00', '8124694879', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 84, 180, '', 'anggota', 'Aktif'),
(36, 'Erza Zein Rusnandar', 'Erza ', 'Erza ', 'tes32@yahoo.com', '0000-00-00', '8124695880', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 90, 160, '', 'anggota', 'Aktif'),
(37, 'Muhammad Rafel Alfarizal', 'Rafel', 'Rafel', 'tes33@yahoo.com', '0000-00-00', '8124698816', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 98, 162, '', 'anggota', 'Aktif'),
(38, 'Dimas Aryo Sudariko', 'Dimas', 'Dimas', 'tes34@yahoo.com', '0000-00-00', '8124698824', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 70, 165, '', 'anggota', 'Aktif'),
(39, 'Raka Dwi Purnama', 'Raka ', 'Raka ', 'tes35@yahoo.com', '0000-00-00', '8124693883', '', 'jln. lesti utara ', 'sma 1 malang', 'Laki-laki', 86, 176, '', 'anggota', 'Aktif');

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
(1, 1, 'Tes Keterampilan', 60),
(2, 1, 'Tes Unjuk Kerja', 40),
(3, 2, 'Tes Keterampilan', 60),
(4, 2, 'Tes Unjuk Kerja', 40),
(5, 3, 'Tes Keterampilan', 60),
(6, 3, 'Tes Unjuk Kerja', 40),
(7, 4, 'Tes Kecepatan', 100);

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
(3, 'Tes Lempar', 30),
(4, 'Tes Lari', 10);

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_konversi` int(11) NOT NULL,
  `id_bobot_tes` int(11) NOT NULL,
  `nama_konversi` varchar(30) NOT NULL,
  `bts_atas` float NOT NULL,
  `bts_bawah` float NOT NULL,
  `nilai_konversi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id_konversi`, `id_bobot_tes`, `nama_konversi`, `bts_atas`, `bts_bawah`, `nilai_konversi`) VALUES
(1, 1, 'poin 1', 2, 0, 1),
(2, 1, 'poin 2', 4, 3, 2),
(3, 1, 'poin 3', 6, 5, 3),
(4, 1, 'poin 4', 8, 7, 4),
(5, 1, 'poin 5', 10, 9, 5),
(6, 2, 'poin 1', 2, 0, 1),
(7, 2, 'poin 2', 4, 3, 2),
(8, 2, 'poin 3', 6, 5, 3),
(9, 2, 'poin 4', 8, 7, 4),
(10, 2, 'poin 5', 10, 9, 5),
(11, 3, 'poin 1', 19, 0, 1),
(12, 3, 'poin 2', 25, 20, 2),
(13, 3, 'poin 3', 30, 26, 3),
(14, 3, 'poin 4', 35, 31, 4),
(15, 3, 'poin 5', 100, 36, 5),
(16, 4, 'poin 1', 8, 10, 1),
(17, 4, 'poin 2', 6.9, 7.99, 2),
(18, 4, 'poin 3', 5.6, 6.89, 3),
(19, 4, 'poin 4', 4.7, 5.59, 4),
(20, 4, 'poin 5', 0, 4.69, 5);

-- --------------------------------------------------------

--
-- Table structure for table `list_peserta`
--

CREATE TABLE `list_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_seleksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `tes_pukul` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `tes_tangkap` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `tes_lempar` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `tes_lari` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `nilai_si` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `nilai_ri` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `nilai_qi` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `status` enum('Lulus','Tidak Lulus','Menunggu Hasil Seleksi','') NOT NULL DEFAULT 'Menunggu Hasil Seleksi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_peserta`
--

INSERT INTO `list_peserta` (`id_peserta`, `id_seleksi`, `id_akun`, `nama_peserta`, `jenis_kelamin`, `riwayat_penyakit`, `tes_pukul`, `tes_tangkap`, `tes_lempar`, `tes_lari`, `nilai_si`, `nilai_ri`, `nilai_qi`, `status`) VALUES
(1, 1, 8, 'Dendi Arya Aza Pratama', 'Laki-Laki', '', '3.1667', '3.8334', '4.3333', '4.4000', '0.2441', '0.1091', '0.0000', 'Lulus'),
(2, 1, 9, 'Zacky Bintang Alzamzamy', 'Laki-Laki', '', '2.3333', '4.3334', '2.6667', '4.4000', '0.5348', '0.2455', '0.5828', 'Lulus'),
(3, 1, 10, 'Dicky Ramdiansyah', 'Laki-Laki', '', '3.1667', '3.1667', '4.0000', '4.8000', '0.3169', '0.1400', '0.1374', 'Lulus'),
(4, 1, 11, 'Alfian Kusuma Pradana', 'Laki-Laki', '', '3.5000', '3.5000', '3.0000', '4.6000', '0.3760', '0.1714', '0.2655', 'Lulus'),
(5, 1, 12, 'Satrio Wibowo', 'Laki-Laki', '', '2.6667', '3.6667', '2.8333', '4.4000', '0.5388', '0.1929', '0.4481', 'Lulus'),
(6, 1, 13, 'Dimas Arya', 'Laki-Laki', '', '3.5000', '2.8333', '3.5000', '4.4000', '0.4167', '0.1800', '0.3196', 'Lulus'),
(7, 1, 14, 'Yahya Zakarya', 'Laki-Laki', '', '2.6667', '3.8334', '4.0000', '5.0000', '0.2937', '0.1909', '0.2527', 'Lulus'),
(8, 1, 15, 'Reka Andika Krisna', 'Laki-Laki', '', '2.5000', '3.1667', '4.0000', '4.2000', '0.5010', '0.2182', '0.4851', 'Lulus'),
(9, 1, 16, 'Angga Nareswara Wicaksna', 'Laki-Laki', '', '2.6667', '3.0000', '2.0000', '4.8000', '0.6759', '0.3000', '0.8350', 'Lulus'),
(10, 1, 17, 'Zuhdi Arif Azizi', 'Laki-Laki', '', '3.3334', '2.8334', '2.3334', '4.6000', '0.5689', '0.2571', '0.6396', 'Lulus'),
(11, 1, 18, 'Dyo Akbar Maulana', 'Laki-Laki', '', '3.1667', '3.1667', '3.1667', '5.0000', '0.3991', '0.1500', '0.2274', 'Lulus'),
(12, 1, 19, 'Ahmad Ali Akbar', 'Laki-Laki', '', '3.5000', '2.6667', '3.0000', '4.6000', '0.4760', '0.2000', '0.4180', 'Lulus'),
(13, 1, 20, 'Novalino Ricsawan', 'Laki-Laki', '', '2.5000', '3.5000', '3.5000', '4.4000', '0.5003', '0.2182', '0.4845', 'Lulus'),
(14, 1, 21, 'Muhammad Achmad Ramadhani', 'Laki-Laki', '', '2.6667', '3.3333', '3.1667', '4.4000', '0.5359', '0.1909', '0.4406', 'Lulus'),
(15, 1, 22, 'Akbar Wahyu Bagaskara', 'Laki-Laki', '', '2.1667', '1.8333', '3.5000', '4.6000', '0.7299', '0.3000', '0.8769', 'Lulus'),
(16, 1, 23, 'Tahta Maulana Ishaq', 'Laki-Laki', '', '3.1667', '2.5000', '3.0000', '5.0000', '0.5005', '0.2200', '0.4894', 'Lulus'),
(17, 1, 24, 'David Setyoadi Wicaksono', 'Laki-Laki', '', '3.6667', '3.3334', '2.6667', '4.8000', '0.3866', '0.2143', '0.3861', 'Lulus'),
(18, 1, 25, 'Leonardo Jimmy Putra', 'Laki-Laki', '', '2.3334', '3.5000', '3.3334', '4.6000', '0.5240', '0.2454', '0.5741', 'Lulus'),
(19, 1, 26, 'Javier Rizky Ramadhan', 'Laki-Laki', '', '2.6667', '2.5000', '3.5000', '4.4000', '0.5930', '0.2200', '0.5611', 'Lulus'),
(20, 1, 27, 'Galih Shacha Rakasiwi', 'Laki-Laki', '', '2.6667', '3.3334', '3.0000', '4.8000', '0.5073', '0.1909', '0.4184', 'Lulus'),
(21, 1, 28, 'Mochamad Fatha Chofyan', 'Laki-Laki', '', '2.6667', '3.3334', '4.1667', '4.4000', '0.4073', '0.1909', '0.3409', 'Lulus'),
(22, 1, 29, 'Raffa Agoes Saputro', 'Laki-Laki', '', '2.5000', '2.3334', '3.1667', '4.8000', '0.6332', '0.2400', '0.6447', 'Lulus'),
(23, 1, 30, 'Raditra Galih Agung Gitayasa', 'Laki-Laki', '', '2.0000', '2.1667', '2.1667', '4.6000', '0.8886', '0.3000', '1.0000', 'Lulus'),
(24, 1, 31, 'Elhadji Diva Asmoro', 'Laki-Laki', '', '3.8333', '3.5000', '2.6667', '4.4000', '0.3893', '0.2143', '0.3882', 'Lulus'),
(25, 1, 32, 'Rizki Rahmat', 'Laki-Laki', '', '3.1667', '3.0000', '2.6667', '4.4000', '0.5584', '0.2143', '0.5194', 'Lulus'),
(26, 1, 33, 'Dheo Santoso', 'Laki-Laki', '', '2.3334', '3.6667', '3.3334', '5.0000', '0.4540', '0.2454', '0.5198', 'Lulus'),
(27, 1, 34, 'Muhammad Hafidz Darmawan', 'Laki-Laki', '', '3.1667', '2.6667', '3.0000', '4.6000', '0.5305', '0.2000', '0.4603', 'Lulus'),
(28, 1, 35, 'Ganang Ade Wijaya', 'Laki-Laki', '', '2.6667', '3.5000', '3.3333', '4.8000', '0.4445', '0.1909', '0.3697', 'Lulus'),
(29, 1, 36, 'Erza Zein Rusnandar', 'Laki-Laki', '', '2.0000', '3.0000', '2.1667', '4.6000', '0.7886', '0.3000', '0.9224', 'Lulus'),
(30, 1, 37, 'Muhammad Rafel Alfarizal', 'Laki-Laki', '', '3.8333', '3.6667', '2.1667', '4.6000', '0.4086', '0.2786', '0.5716', 'Lulus'),
(31, 1, 38, 'Dimas Aryo Sudariko', 'Laki-Laki', '', '2.6667', '3.0000', '2.8333', '4.8000', '0.5688', '0.1929', '0.4714', 'Lulus'),
(32, 1, 39, 'Raka Dwi Purnama', 'Laki-Laki', '', '3.0000', '3.5000', '3.1667', '4.8000', '0.4113', '0.1500', '0.2368', 'Lulus');

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
  `jml_set_pukul` int(11) NOT NULL,
  `jml_set_tangkap` int(11) NOT NULL,
  `jml_set_lempar` int(11) NOT NULL,
  `jml_rep_lari` int(11) NOT NULL,
  `status_seleksi` enum('Belum Selesai','Selesai','','') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_seleksi`
--

INSERT INTO `list_seleksi` (`id_seleksi`, `nama_seleksi`, `jenis_olahraga`, `jenis_kelamin`, `batas_umur`, `tgl_seleksi`, `tgl_kejuaraan`, `jml_set_pukul`, `jml_set_tangkap`, `jml_set_lempar`, `jml_rep_lari`, `status_seleksi`) VALUES
(1, 'kejurda 2020', 'Baseball', 'Laki-laki', 20, '2020-06-19', '2020-06-27', 3, 3, 3, 5, 'Selesai'),
(2, 'kejurnas 2020', 'Softball', 'Perempuan', 20, '2020-06-06', '2020-06-28', 1, 2, 3, 5, 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_per_tes`
--

CREATE TABLE `nilai_per_tes` (
  `id_nilai_tes` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `id_seleksi` int(11) NOT NULL,
  `id_bobot_tes` int(11) NOT NULL,
  `id_bobot_sub_tes` int(11) NOT NULL,
  `set_ke` int(11) NOT NULL,
  `nilai_asli` decimal(10,2) NOT NULL,
  `nilai_konversi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_per_tes`
--

INSERT INTO `nilai_per_tes` (`id_nilai_tes`, `id_akun`, `nama_peserta`, `id_seleksi`, `id_bobot_tes`, `id_bobot_sub_tes`, `set_ke`, `nilai_asli`, `nilai_konversi`) VALUES
(1, 8, 'Dendi Arya Aza Pratama', 1, 1, 1, 1, '5.00', 3),
(2, 9, 'Zacky Bintang Alzamzamy', 1, 1, 1, 1, '8.00', 4),
(3, 10, 'Dicky Ramdiansyah', 1, 1, 1, 1, '5.00', 3),
(4, 11, 'Alfian Kusuma Pradana', 1, 1, 1, 1, '6.00', 3),
(5, 12, 'Satrio Wibowo', 1, 1, 1, 1, '7.00', 4),
(6, 13, 'Dimas Arya', 1, 1, 1, 1, '8.00', 4),
(7, 14, 'Yahya Zakarya', 1, 1, 1, 1, '6.00', 3),
(8, 15, 'Reka Andika Krisna', 1, 1, 1, 1, '2.00', 1),
(9, 16, 'Angga Nareswara Wicaksna', 1, 1, 1, 1, '4.00', 2),
(10, 17, 'Zuhdi Arif Azizi', 1, 1, 1, 1, '6.00', 3),
(11, 18, 'Dyo Akbar Maulana', 1, 1, 1, 1, '10.00', 5),
(12, 19, 'Ahmad Ali Akbar', 1, 1, 1, 1, '3.00', 2),
(13, 20, 'Novalino Ricsawan', 1, 1, 1, 1, '1.00', 1),
(14, 21, 'Muhammad Achmad Ramadhani', 1, 1, 1, 1, '1.00', 1),
(15, 22, 'Akbar Wahyu Bagaskara', 1, 1, 1, 1, '1.00', 1),
(16, 23, 'Tahta Maulana Ishaq', 1, 1, 1, 1, '3.00', 2),
(17, 24, 'David Setyoadi Wicaksono', 1, 1, 1, 1, '8.00', 4),
(18, 25, 'Leonardo Jimmy Putra', 1, 1, 1, 1, '1.00', 1),
(19, 26, 'Javier Rizky Ramadhan', 1, 1, 1, 1, '5.00', 3),
(20, 27, 'Galih Shacha Rakasiwi', 1, 1, 1, 1, '2.00', 1),
(21, 28, 'Mochamad Fatha Chofyan', 1, 1, 1, 1, '8.00', 4),
(22, 29, 'Raffa Agoes Saputro', 1, 1, 1, 1, '6.00', 3),
(23, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 1, 1, '3.00', 2),
(24, 31, 'Elhadji Diva Asmoro', 1, 1, 1, 1, '6.00', 3),
(25, 32, 'Rizki Rahmat', 1, 1, 1, 1, '8.00', 4),
(26, 33, 'Dheo Santoso', 1, 1, 1, 1, '5.00', 3),
(27, 34, 'Muhammad Hafidz Darmawan', 1, 1, 1, 1, '2.00', 1),
(28, 35, 'Ganang Ade Wijaya', 1, 1, 1, 1, '5.00', 3),
(29, 36, 'Erza Zein Rusnandar', 1, 1, 1, 1, '1.00', 1),
(30, 37, 'Muhammad Rafel Alfarizal', 1, 1, 1, 1, '6.00', 3),
(31, 38, 'Dimas Aryo Sudariko', 1, 1, 1, 1, '2.00', 1),
(32, 39, 'Raka Dwi Purnama', 1, 1, 1, 1, '6.00', 3),
(33, 8, 'Dendi Arya Aza Pratama', 1, 1, 1, 2, '4.00', 2),
(34, 9, 'Zacky Bintang Alzamzamy', 1, 1, 1, 2, '3.00', 2),
(35, 10, 'Dicky Ramdiansyah', 1, 1, 1, 2, '2.00', 1),
(36, 11, 'Alfian Kusuma Pradana', 1, 1, 1, 2, '9.00', 5),
(37, 12, 'Satrio Wibowo', 1, 1, 1, 2, '8.00', 4),
(38, 13, 'Dimas Arya', 1, 1, 1, 2, '2.00', 1),
(39, 14, 'Yahya Zakarya', 1, 1, 1, 2, '5.00', 3),
(40, 15, 'Reka Andika Krisna', 1, 1, 1, 2, '10.00', 5),
(41, 16, 'Angga Nareswara Wicaksna', 1, 1, 1, 2, '6.00', 3),
(42, 17, 'Zuhdi Arif Azizi', 1, 1, 1, 2, '2.00', 1),
(43, 18, 'Dyo Akbar Maulana', 1, 1, 1, 2, '6.00', 3),
(44, 19, 'Ahmad Ali Akbar', 1, 1, 1, 2, '1.00', 1),
(45, 20, 'Novalino Ricsawan', 1, 1, 1, 2, '4.00', 2),
(46, 21, 'Muhammad Achmad Ramadhani', 1, 1, 1, 2, '5.00', 3),
(47, 22, 'Akbar Wahyu Bagaskara', 1, 1, 1, 2, '4.00', 2),
(48, 23, 'Tahta Maulana Ishaq', 1, 1, 1, 2, '5.00', 3),
(49, 24, 'David Setyoadi Wicaksono', 1, 1, 1, 2, '10.00', 5),
(50, 25, 'Leonardo Jimmy Putra', 1, 1, 1, 2, '8.00', 4),
(51, 26, 'Javier Rizky Ramadhan', 1, 1, 1, 2, '1.00', 1),
(52, 27, 'Galih Shacha Rakasiwi', 1, 1, 1, 2, '9.00', 5),
(53, 28, 'Mochamad Fatha Chofyan', 1, 1, 1, 2, '3.00', 2),
(54, 29, 'Raffa Agoes Saputro', 1, 1, 1, 2, '6.00', 3),
(55, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 1, 2, '2.00', 1),
(56, 31, 'Elhadji Diva Asmoro', 1, 1, 1, 2, '7.00', 4),
(57, 32, 'Rizki Rahmat', 1, 1, 1, 2, '7.00', 4),
(58, 33, 'Dheo Santoso', 1, 1, 1, 2, '2.00', 1),
(59, 34, 'Muhammad Hafidz Darmawan', 1, 1, 1, 2, '10.00', 5),
(60, 35, 'Ganang Ade Wijaya', 1, 1, 1, 2, '3.00', 2),
(61, 36, 'Erza Zein Rusnandar', 1, 1, 1, 2, '7.00', 4),
(62, 37, 'Muhammad Rafel Alfarizal', 1, 1, 1, 2, '6.00', 3),
(63, 38, 'Dimas Aryo Sudariko', 1, 1, 1, 2, '10.00', 5),
(64, 39, 'Raka Dwi Purnama', 1, 1, 1, 2, '5.00', 3),
(65, 8, 'Dendi Arya Aza Pratama', 1, 1, 1, 3, '4.00', 2),
(66, 9, 'Zacky Bintang Alzamzamy', 1, 1, 1, 3, '2.00', 1),
(67, 10, 'Dicky Ramdiansyah', 1, 1, 1, 3, '9.00', 5),
(68, 11, 'Alfian Kusuma Pradana', 1, 1, 1, 3, '6.00', 3),
(69, 12, 'Satrio Wibowo', 1, 1, 1, 3, '6.00', 3),
(70, 13, 'Dimas Arya', 1, 1, 1, 3, '5.00', 3),
(71, 14, 'Yahya Zakarya', 1, 1, 1, 3, '1.00', 1),
(72, 15, 'Reka Andika Krisna', 1, 1, 1, 3, '6.00', 3),
(73, 16, 'Angga Nareswara Wicaksna', 1, 1, 1, 3, '3.00', 2),
(74, 17, 'Zuhdi Arif Azizi', 1, 1, 1, 3, '8.00', 4),
(75, 18, 'Dyo Akbar Maulana', 1, 1, 1, 3, '6.00', 3),
(76, 19, 'Ahmad Ali Akbar', 1, 1, 1, 3, '8.00', 4),
(77, 20, 'Novalino Ricsawan', 1, 1, 1, 3, '8.00', 4),
(78, 21, 'Muhammad Achmad Ramadhani', 1, 1, 1, 3, '10.00', 5),
(79, 22, 'Akbar Wahyu Bagaskara', 1, 1, 1, 3, '3.00', 2),
(80, 23, 'Tahta Maulana Ishaq', 1, 1, 1, 3, '2.00', 1),
(81, 24, 'David Setyoadi Wicaksono', 1, 1, 1, 3, '9.00', 5),
(82, 25, 'Leonardo Jimmy Putra', 1, 1, 1, 3, '5.00', 3),
(83, 26, 'Javier Rizky Ramadhan', 1, 1, 1, 3, '5.00', 3),
(84, 27, 'Galih Shacha Rakasiwi', 1, 1, 1, 3, '8.00', 4),
(85, 28, 'Mochamad Fatha Chofyan', 1, 1, 1, 3, '4.00', 2),
(86, 29, 'Raffa Agoes Saputro', 1, 1, 1, 3, '7.00', 4),
(87, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 1, 3, '9.00', 5),
(88, 31, 'Elhadji Diva Asmoro', 1, 1, 1, 3, '5.00', 3),
(89, 32, 'Rizki Rahmat', 1, 1, 1, 3, '8.00', 4),
(90, 33, 'Dheo Santoso', 1, 1, 1, 3, '1.00', 1),
(91, 34, 'Muhammad Hafidz Darmawan', 1, 1, 1, 3, '5.00', 3),
(92, 35, 'Ganang Ade Wijaya', 1, 1, 1, 3, '4.00', 2),
(93, 36, 'Erza Zein Rusnandar', 1, 1, 1, 3, '1.00', 1),
(94, 37, 'Muhammad Rafel Alfarizal', 1, 1, 1, 3, '7.00', 4),
(95, 38, 'Dimas Aryo Sudariko', 1, 1, 1, 3, '6.00', 3),
(96, 39, 'Raka Dwi Purnama', 1, 1, 1, 3, '10.00', 5),
(97, 8, 'Dendi Arya Aza Pratama', 1, 1, 2, 1, '3.00', 3),
(98, 9, 'Zacky Bintang Alzamzamy', 1, 1, 2, 1, '1.00', 1),
(99, 10, 'Dicky Ramdiansyah', 1, 1, 2, 1, '3.00', 3),
(100, 11, 'Alfian Kusuma Pradana', 1, 1, 2, 1, '5.00', 5),
(101, 12, 'Satrio Wibowo', 1, 1, 2, 1, '2.00', 2),
(102, 13, 'Dimas Arya', 1, 1, 2, 1, '5.00', 5),
(103, 14, 'Yahya Zakarya', 1, 1, 2, 1, '4.00', 4),
(104, 15, 'Reka Andika Krisna', 1, 1, 2, 1, '2.00', 2),
(105, 16, 'Angga Nareswara Wicaksna', 1, 1, 2, 1, '1.00', 1),
(106, 17, 'Zuhdi Arif Azizi', 1, 1, 2, 1, '4.00', 4),
(107, 18, 'Dyo Akbar Maulana', 1, 1, 2, 1, '4.00', 4),
(108, 19, 'Ahmad Ali Akbar', 1, 1, 2, 1, '5.00', 5),
(109, 20, 'Novalino Ricsawan', 1, 1, 2, 1, '3.00', 3),
(110, 21, 'Muhammad Achmad Ramadhani', 1, 1, 2, 1, '3.00', 3),
(111, 22, 'Akbar Wahyu Bagaskara', 1, 1, 2, 1, '3.00', 3),
(112, 23, 'Tahta Maulana Ishaq', 1, 1, 2, 1, '5.00', 5),
(113, 24, 'David Setyoadi Wicaksono', 1, 1, 2, 1, '1.00', 1),
(114, 25, 'Leonardo Jimmy Putra', 1, 1, 2, 1, '1.00', 1),
(115, 26, 'Javier Rizky Ramadhan', 1, 1, 2, 1, '5.00', 5),
(116, 27, 'Galih Shacha Rakasiwi', 1, 1, 2, 1, '2.00', 2),
(117, 28, 'Mochamad Fatha Chofyan', 1, 1, 2, 1, '2.00', 2),
(118, 29, 'Raffa Agoes Saputro', 1, 1, 2, 1, '1.00', 1),
(119, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 2, 1, '1.00', 1),
(120, 31, 'Elhadji Diva Asmoro', 1, 1, 2, 1, '5.00', 5),
(121, 32, 'Rizki Rahmat', 1, 1, 2, 1, '2.00', 2),
(122, 33, 'Dheo Santoso', 1, 1, 2, 1, '2.00', 2),
(123, 34, 'Muhammad Hafidz Darmawan', 1, 1, 2, 1, '5.00', 5),
(124, 35, 'Ganang Ade Wijaya', 1, 1, 2, 1, '2.00', 2),
(125, 36, 'Erza Zein Rusnandar', 1, 1, 2, 1, '3.00', 3),
(126, 37, 'Muhammad Rafel Alfarizal', 1, 1, 2, 1, '4.00', 4),
(127, 38, 'Dimas Aryo Sudariko', 1, 1, 2, 1, '1.00', 1),
(128, 39, 'Raka Dwi Purnama', 1, 1, 2, 1, '1.00', 1),
(129, 8, 'Dendi Arya Aza Pratama', 1, 1, 2, 2, '5.00', 5),
(130, 9, 'Zacky Bintang Alzamzamy', 1, 1, 2, 2, '4.00', 4),
(131, 10, 'Dicky Ramdiansyah', 1, 1, 2, 2, '3.00', 3),
(132, 11, 'Alfian Kusuma Pradana', 1, 1, 2, 2, '1.00', 1),
(133, 12, 'Satrio Wibowo', 1, 1, 2, 2, '1.00', 1),
(134, 13, 'Dimas Arya', 1, 1, 2, 2, '5.00', 5),
(135, 14, 'Yahya Zakarya', 1, 1, 2, 2, '3.00', 3),
(136, 15, 'Reka Andika Krisna', 1, 1, 2, 2, '2.00', 2),
(137, 16, 'Angga Nareswara Wicaksna', 1, 1, 2, 2, '3.00', 3),
(138, 17, 'Zuhdi Arif Azizi', 1, 1, 2, 2, '3.00', 3),
(139, 18, 'Dyo Akbar Maulana', 1, 1, 2, 2, '3.00', 3),
(140, 19, 'Ahmad Ali Akbar', 1, 1, 2, 2, '4.00', 4),
(141, 20, 'Novalino Ricsawan', 1, 1, 2, 2, '2.00', 2),
(142, 21, 'Muhammad Achmad Ramadhani', 1, 1, 2, 2, '2.00', 2),
(143, 22, 'Akbar Wahyu Bagaskara', 1, 1, 2, 2, '1.00', 1),
(144, 23, 'Tahta Maulana Ishaq', 1, 1, 2, 2, '5.00', 5),
(145, 24, 'David Setyoadi Wicaksono', 1, 1, 2, 2, '5.00', 5),
(146, 25, 'Leonardo Jimmy Putra', 1, 1, 2, 2, '1.00', 1),
(147, 26, 'Javier Rizky Ramadhan', 1, 1, 2, 2, '3.00', 3),
(148, 27, 'Galih Shacha Rakasiwi', 1, 1, 2, 2, '1.00', 1),
(149, 28, 'Mochamad Fatha Chofyan', 1, 1, 2, 2, '2.00', 2),
(150, 29, 'Raffa Agoes Saputro', 1, 1, 2, 2, '3.00', 3),
(151, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 2, 2, '2.00', 2),
(152, 31, 'Elhadji Diva Asmoro', 1, 1, 2, 2, '4.00', 4),
(153, 32, 'Rizki Rahmat', 1, 1, 2, 2, '1.00', 1),
(154, 33, 'Dheo Santoso', 1, 1, 2, 2, '3.00', 3),
(155, 34, 'Muhammad Hafidz Darmawan', 1, 1, 2, 2, '1.00', 1),
(156, 35, 'Ganang Ade Wijaya', 1, 1, 2, 2, '3.00', 3),
(157, 36, 'Erza Zein Rusnandar', 1, 1, 2, 2, '1.00', 1),
(158, 37, 'Muhammad Rafel Alfarizal', 1, 1, 2, 2, '4.00', 4),
(159, 38, 'Dimas Aryo Sudariko', 1, 1, 2, 2, '3.00', 3),
(160, 39, 'Raka Dwi Purnama', 1, 1, 2, 2, '3.00', 3),
(161, 8, 'Dendi Arya Aza Pratama', 1, 1, 2, 3, '4.00', 4),
(162, 9, 'Zacky Bintang Alzamzamy', 1, 1, 2, 3, '2.00', 2),
(163, 10, 'Dicky Ramdiansyah', 1, 1, 2, 3, '4.00', 4),
(164, 11, 'Alfian Kusuma Pradana', 1, 1, 2, 3, '4.00', 4),
(165, 12, 'Satrio Wibowo', 1, 1, 2, 3, '2.00', 2),
(166, 13, 'Dimas Arya', 1, 1, 2, 3, '3.00', 3),
(167, 14, 'Yahya Zakarya', 1, 1, 2, 3, '2.00', 2),
(168, 15, 'Reka Andika Krisna', 1, 1, 2, 3, '2.00', 2),
(169, 16, 'Angga Nareswara Wicaksna', 1, 1, 2, 3, '5.00', 5),
(170, 17, 'Zuhdi Arif Azizi', 1, 1, 2, 3, '5.00', 5),
(171, 18, 'Dyo Akbar Maulana', 1, 1, 2, 3, '1.00', 1),
(172, 19, 'Ahmad Ali Akbar', 1, 1, 2, 3, '5.00', 5),
(173, 20, 'Novalino Ricsawan', 1, 1, 2, 3, '3.00', 3),
(174, 21, 'Muhammad Achmad Ramadhani', 1, 1, 2, 3, '2.00', 2),
(175, 22, 'Akbar Wahyu Bagaskara', 1, 1, 2, 3, '4.00', 4),
(176, 23, 'Tahta Maulana Ishaq', 1, 1, 2, 3, '3.00', 3),
(177, 24, 'David Setyoadi Wicaksono', 1, 1, 2, 3, '2.00', 2),
(178, 25, 'Leonardo Jimmy Putra', 1, 1, 2, 3, '4.00', 4),
(179, 26, 'Javier Rizky Ramadhan', 1, 1, 2, 3, '1.00', 1),
(180, 27, 'Galih Shacha Rakasiwi', 1, 1, 2, 3, '3.00', 3),
(181, 28, 'Mochamad Fatha Chofyan', 1, 1, 2, 3, '4.00', 4),
(182, 29, 'Raffa Agoes Saputro', 1, 1, 2, 3, '1.00', 1),
(183, 30, 'Raditra Galih Agung Gitayasa', 1, 1, 2, 3, '1.00', 1),
(184, 31, 'Elhadji Diva Asmoro', 1, 1, 2, 3, '4.00', 4),
(185, 32, 'Rizki Rahmat', 1, 1, 2, 3, '4.00', 4),
(186, 33, 'Dheo Santoso', 1, 1, 2, 3, '4.00', 4),
(187, 34, 'Muhammad Hafidz Darmawan', 1, 1, 2, 3, '4.00', 4),
(188, 35, 'Ganang Ade Wijaya', 1, 1, 2, 3, '4.00', 4),
(189, 36, 'Erza Zein Rusnandar', 1, 1, 2, 3, '2.00', 2),
(190, 37, 'Muhammad Rafel Alfarizal', 1, 1, 2, 3, '5.00', 5),
(191, 38, 'Dimas Aryo Sudariko', 1, 1, 2, 3, '3.00', 3),
(192, 39, 'Raka Dwi Purnama', 1, 1, 2, 3, '3.00', 3),
(193, 8, 'Dendi Arya Aza Pratama', 1, 2, 3, 1, '1.00', 1),
(194, 9, 'Zacky Bintang Alzamzamy', 1, 2, 3, 1, '7.00', 4),
(195, 10, 'Dicky Ramdiansyah', 1, 2, 3, 1, '8.00', 4),
(196, 11, 'Alfian Kusuma Pradana', 1, 2, 3, 1, '5.00', 3),
(197, 12, 'Satrio Wibowo', 1, 2, 3, 1, '8.00', 4),
(198, 13, 'Dimas Arya', 1, 2, 3, 1, '2.00', 1),
(199, 14, 'Yahya Zakarya', 1, 2, 3, 1, '7.00', 4),
(200, 15, 'Reka Andika Krisna', 1, 2, 3, 1, '4.00', 2),
(201, 16, 'Angga Nareswara Wicaksna', 1, 2, 3, 1, '1.00', 1),
(202, 17, 'Zuhdi Arif Azizi', 1, 2, 3, 1, '5.00', 3),
(203, 18, 'Dyo Akbar Maulana', 1, 2, 3, 1, '10.00', 5),
(204, 19, 'Ahmad Ali Akbar', 1, 2, 3, 1, '6.00', 3),
(205, 20, 'Novalino Ricsawan', 1, 2, 3, 1, '3.00', 2),
(206, 21, 'Muhammad Achmad Ramadhani', 1, 2, 3, 1, '2.00', 1),
(207, 22, 'Akbar Wahyu Bagaskara', 1, 2, 3, 1, '1.00', 1),
(208, 23, 'Tahta Maulana Ishaq', 1, 2, 3, 1, '6.00', 3),
(209, 24, 'David Setyoadi Wicaksono', 1, 2, 3, 1, '5.00', 3),
(210, 25, 'Leonardo Jimmy Putra', 1, 2, 3, 1, '5.00', 3),
(211, 26, 'Javier Rizky Ramadhan', 1, 2, 3, 1, '2.00', 1),
(212, 27, 'Galih Shacha Rakasiwi', 1, 2, 3, 1, '6.00', 3),
(213, 28, 'Mochamad Fatha Chofyan', 1, 2, 3, 1, '7.00', 4),
(214, 29, 'Raffa Agoes Saputro', 1, 2, 3, 1, '5.00', 3),
(215, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 3, 1, '4.00', 2),
(216, 31, 'Elhadji Diva Asmoro', 1, 2, 3, 1, '7.00', 4),
(217, 32, 'Rizki Rahmat', 1, 2, 3, 1, '2.00', 1),
(218, 33, 'Dheo Santoso', 1, 2, 3, 1, '3.00', 2),
(219, 34, 'Muhammad Hafidz Darmawan', 1, 2, 3, 1, '3.00', 2),
(220, 35, 'Ganang Ade Wijaya', 1, 2, 3, 1, '1.00', 1),
(221, 36, 'Erza Zein Rusnandar', 1, 2, 3, 1, '6.00', 3),
(222, 37, 'Muhammad Rafel Alfarizal', 1, 2, 3, 1, '8.00', 4),
(223, 38, 'Dimas Aryo Sudariko', 1, 2, 3, 1, '3.00', 2),
(224, 39, 'Raka Dwi Purnama', 1, 2, 3, 1, '7.00', 4),
(225, 8, 'Dendi Arya Aza Pratama', 1, 2, 3, 2, '8.00', 4),
(226, 9, 'Zacky Bintang Alzamzamy', 1, 2, 3, 2, '10.00', 5),
(227, 10, 'Dicky Ramdiansyah', 1, 2, 3, 2, '7.00', 4),
(228, 11, 'Alfian Kusuma Pradana', 1, 2, 3, 2, '1.00', 1),
(229, 12, 'Satrio Wibowo', 1, 2, 3, 2, '10.00', 5),
(230, 13, 'Dimas Arya', 1, 2, 3, 2, '9.00', 5),
(231, 14, 'Yahya Zakarya', 1, 2, 3, 2, '1.00', 1),
(232, 15, 'Reka Andika Krisna', 1, 2, 3, 2, '9.00', 5),
(233, 16, 'Angga Nareswara Wicaksna', 1, 2, 3, 2, '8.00', 4),
(234, 17, 'Zuhdi Arif Azizi', 1, 2, 3, 2, '4.00', 2),
(235, 18, 'Dyo Akbar Maulana', 1, 2, 3, 2, '8.00', 4),
(236, 19, 'Ahmad Ali Akbar', 1, 2, 3, 2, '6.00', 3),
(237, 20, 'Novalino Ricsawan', 1, 2, 3, 2, '7.00', 4),
(238, 21, 'Muhammad Achmad Ramadhani', 1, 2, 3, 2, '9.00', 5),
(239, 22, 'Akbar Wahyu Bagaskara', 1, 2, 3, 2, '1.00', 1),
(240, 23, 'Tahta Maulana Ishaq', 1, 2, 3, 2, '4.00', 2),
(241, 24, 'David Setyoadi Wicaksono', 1, 2, 3, 2, '5.00', 3),
(242, 25, 'Leonardo Jimmy Putra', 1, 2, 3, 2, '6.00', 3),
(243, 26, 'Javier Rizky Ramadhan', 1, 2, 3, 2, '3.00', 2),
(244, 27, 'Galih Shacha Rakasiwi', 1, 2, 3, 2, '3.00', 2),
(245, 28, 'Mochamad Fatha Chofyan', 1, 2, 3, 2, '8.00', 4),
(246, 29, 'Raffa Agoes Saputro', 1, 2, 3, 2, '3.00', 2),
(247, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 3, 2, '4.00', 2),
(248, 31, 'Elhadji Diva Asmoro', 1, 2, 3, 2, '8.00', 4),
(249, 32, 'Rizki Rahmat', 1, 2, 3, 2, '3.00', 2),
(250, 33, 'Dheo Santoso', 1, 2, 3, 2, '5.00', 3),
(251, 34, 'Muhammad Hafidz Darmawan', 1, 2, 3, 2, '3.00', 2),
(252, 35, 'Ganang Ade Wijaya', 1, 2, 3, 2, '9.00', 5),
(253, 36, 'Erza Zein Rusnandar', 1, 2, 3, 2, '1.00', 1),
(254, 37, 'Muhammad Rafel Alfarizal', 1, 2, 3, 2, '2.00', 1),
(255, 38, 'Dimas Aryo Sudariko', 1, 2, 3, 2, '10.00', 5),
(256, 39, 'Raka Dwi Purnama', 1, 2, 3, 2, '2.00', 1),
(257, 8, 'Dendi Arya Aza Pratama', 1, 2, 3, 3, '7.00', 4),
(258, 9, 'Zacky Bintang Alzamzamy', 1, 2, 3, 3, '10.00', 5),
(259, 10, 'Dicky Ramdiansyah', 1, 2, 3, 3, '5.00', 3),
(260, 11, 'Alfian Kusuma Pradana', 1, 2, 3, 3, '10.00', 5),
(261, 12, 'Satrio Wibowo', 1, 2, 3, 3, '10.00', 5),
(262, 13, 'Dimas Arya', 1, 2, 3, 3, '7.00', 4),
(263, 14, 'Yahya Zakarya', 1, 2, 3, 3, '8.00', 4),
(264, 15, 'Reka Andika Krisna', 1, 2, 3, 3, '8.00', 4),
(265, 16, 'Angga Nareswara Wicaksna', 1, 2, 3, 3, '6.00', 3),
(266, 17, 'Zuhdi Arif Azizi', 1, 2, 3, 3, '6.00', 3),
(267, 18, 'Dyo Akbar Maulana', 1, 2, 3, 3, '1.00', 1),
(268, 19, 'Ahmad Ali Akbar', 1, 2, 3, 3, '8.00', 4),
(269, 20, 'Novalino Ricsawan', 1, 2, 3, 3, '9.00', 5),
(270, 21, 'Muhammad Achmad Ramadhani', 1, 2, 3, 3, '8.00', 4),
(271, 22, 'Akbar Wahyu Bagaskara', 1, 2, 3, 3, '10.00', 5),
(272, 23, 'Tahta Maulana Ishaq', 1, 2, 3, 3, '8.00', 4),
(273, 24, 'David Setyoadi Wicaksono', 1, 2, 3, 3, '5.00', 3),
(274, 25, 'Leonardo Jimmy Putra', 1, 2, 3, 3, '4.00', 2),
(275, 26, 'Javier Rizky Ramadhan', 1, 2, 3, 3, '4.00', 2),
(276, 27, 'Galih Shacha Rakasiwi', 1, 2, 3, 3, '5.00', 3),
(277, 28, 'Mochamad Fatha Chofyan', 1, 2, 3, 3, '7.00', 4),
(278, 29, 'Raffa Agoes Saputro', 1, 2, 3, 3, '7.00', 4),
(279, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 3, 3, '1.00', 1),
(280, 31, 'Elhadji Diva Asmoro', 1, 2, 3, 3, '9.00', 5),
(281, 32, 'Rizki Rahmat', 1, 2, 3, 3, '5.00', 3),
(282, 33, 'Dheo Santoso', 1, 2, 3, 3, '9.00', 5),
(283, 34, 'Muhammad Hafidz Darmawan', 1, 2, 3, 3, '2.00', 1),
(284, 35, 'Ganang Ade Wijaya', 1, 2, 3, 3, '7.00', 4),
(285, 36, 'Erza Zein Rusnandar', 1, 2, 3, 3, '7.00', 4),
(286, 37, 'Muhammad Rafel Alfarizal', 1, 2, 3, 3, '5.00', 3),
(287, 38, 'Dimas Aryo Sudariko', 1, 2, 3, 3, '5.00', 3),
(288, 39, 'Raka Dwi Purnama', 1, 2, 3, 3, '7.00', 4),
(289, 8, 'Dendi Arya Aza Pratama', 1, 2, 4, 1, '5.00', 5),
(290, 9, 'Zacky Bintang Alzamzamy', 1, 2, 4, 1, '5.00', 5),
(291, 10, 'Dicky Ramdiansyah', 1, 2, 4, 1, '1.00', 1),
(292, 11, 'Alfian Kusuma Pradana', 1, 2, 4, 1, '3.00', 3),
(293, 12, 'Satrio Wibowo', 1, 2, 4, 1, '2.00', 2),
(294, 13, 'Dimas Arya', 1, 2, 4, 1, '1.00', 1),
(295, 14, 'Yahya Zakarya', 1, 2, 4, 1, '5.00', 5),
(296, 15, 'Reka Andika Krisna', 1, 2, 4, 1, '4.00', 4),
(297, 16, 'Angga Nareswara Wicaksna', 1, 2, 4, 1, '2.00', 2),
(298, 17, 'Zuhdi Arif Azizi', 1, 2, 4, 1, '3.00', 3),
(299, 18, 'Dyo Akbar Maulana', 1, 2, 4, 1, '4.00', 4),
(300, 19, 'Ahmad Ali Akbar', 1, 2, 4, 1, '1.00', 1),
(301, 20, 'Novalino Ricsawan', 1, 2, 4, 1, '3.00', 3),
(302, 21, 'Muhammad Achmad Ramadhani', 1, 2, 4, 1, '4.00', 4),
(303, 22, 'Akbar Wahyu Bagaskara', 1, 2, 4, 1, '2.00', 2),
(304, 23, 'Tahta Maulana Ishaq', 1, 2, 4, 1, '4.00', 4),
(305, 24, 'David Setyoadi Wicaksono', 1, 2, 4, 1, '5.00', 5),
(306, 25, 'Leonardo Jimmy Putra', 1, 2, 4, 1, '5.00', 5),
(307, 26, 'Javier Rizky Ramadhan', 1, 2, 4, 1, '3.00', 3),
(308, 27, 'Galih Shacha Rakasiwi', 1, 2, 4, 1, '5.00', 5),
(309, 28, 'Mochamad Fatha Chofyan', 1, 2, 4, 1, '3.00', 3),
(310, 29, 'Raffa Agoes Saputro', 1, 2, 4, 1, '2.00', 2),
(311, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 4, 1, '4.00', 4),
(312, 31, 'Elhadji Diva Asmoro', 1, 2, 4, 1, '3.00', 3),
(313, 32, 'Rizki Rahmat', 1, 2, 4, 1, '4.00', 4),
(314, 33, 'Dheo Santoso', 1, 2, 4, 1, '4.00', 4),
(315, 34, 'Muhammad Hafidz Darmawan', 1, 2, 4, 1, '5.00', 5),
(316, 35, 'Ganang Ade Wijaya', 1, 2, 4, 1, '4.00', 4),
(317, 36, 'Erza Zein Rusnandar', 1, 2, 4, 1, '2.00', 2),
(318, 37, 'Muhammad Rafel Alfarizal', 1, 2, 4, 1, '5.00', 5),
(319, 38, 'Dimas Aryo Sudariko', 1, 2, 4, 1, '5.00', 5),
(320, 39, 'Raka Dwi Purnama', 1, 2, 4, 1, '5.00', 5),
(321, 8, 'Dendi Arya Aza Pratama', 1, 2, 4, 2, '5.00', 5),
(322, 9, 'Zacky Bintang Alzamzamy', 1, 2, 4, 2, '3.00', 3),
(323, 10, 'Dicky Ramdiansyah', 1, 2, 4, 2, '4.00', 4),
(324, 11, 'Alfian Kusuma Pradana', 1, 2, 4, 2, '4.00', 4),
(325, 12, 'Satrio Wibowo', 1, 2, 4, 2, '1.00', 1),
(326, 13, 'Dimas Arya', 1, 2, 4, 2, '4.00', 4),
(327, 14, 'Yahya Zakarya', 1, 2, 4, 2, '4.00', 4),
(328, 15, 'Reka Andika Krisna', 1, 2, 4, 2, '3.00', 3),
(329, 16, 'Angga Nareswara Wicaksna', 1, 2, 4, 2, '4.00', 4),
(330, 17, 'Zuhdi Arif Azizi', 1, 2, 4, 2, '3.00', 3),
(331, 18, 'Dyo Akbar Maulana', 1, 2, 4, 2, '3.00', 3),
(332, 19, 'Ahmad Ali Akbar', 1, 2, 4, 2, '1.00', 1),
(333, 20, 'Novalino Ricsawan', 1, 2, 4, 2, '5.00', 5),
(334, 21, 'Muhammad Achmad Ramadhani', 1, 2, 4, 2, '4.00', 4),
(335, 22, 'Akbar Wahyu Bagaskara', 1, 2, 4, 2, '1.00', 1),
(336, 23, 'Tahta Maulana Ishaq', 1, 2, 4, 2, '1.00', 1),
(337, 24, 'David Setyoadi Wicaksono', 1, 2, 4, 2, '2.00', 2),
(338, 25, 'Leonardo Jimmy Putra', 1, 2, 4, 2, '5.00', 5),
(339, 26, 'Javier Rizky Ramadhan', 1, 2, 4, 2, '5.00', 5),
(340, 27, 'Galih Shacha Rakasiwi', 1, 2, 4, 2, '2.00', 2),
(341, 28, 'Mochamad Fatha Chofyan', 1, 2, 4, 2, '1.00', 1),
(342, 29, 'Raffa Agoes Saputro', 1, 2, 4, 2, '1.00', 1),
(343, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 4, 2, '3.00', 3),
(344, 31, 'Elhadji Diva Asmoro', 1, 2, 4, 2, '4.00', 4),
(345, 32, 'Rizki Rahmat', 1, 2, 4, 2, '5.00', 5),
(346, 33, 'Dheo Santoso', 1, 2, 4, 2, '4.00', 4),
(347, 34, 'Muhammad Hafidz Darmawan', 1, 2, 4, 2, '2.00', 2),
(348, 35, 'Ganang Ade Wijaya', 1, 2, 4, 2, '4.00', 4),
(349, 36, 'Erza Zein Rusnandar', 1, 2, 4, 2, '4.00', 4),
(350, 37, 'Muhammad Rafel Alfarizal', 1, 2, 4, 2, '5.00', 5),
(351, 38, 'Dimas Aryo Sudariko', 1, 2, 4, 2, '2.00', 2),
(352, 39, 'Raka Dwi Purnama', 1, 2, 4, 2, '2.00', 2),
(353, 8, 'Dendi Arya Aza Pratama', 1, 2, 4, 3, '4.00', 4),
(354, 9, 'Zacky Bintang Alzamzamy', 1, 2, 4, 3, '4.00', 4),
(355, 10, 'Dicky Ramdiansyah', 1, 2, 4, 3, '3.00', 3),
(356, 11, 'Alfian Kusuma Pradana', 1, 2, 4, 3, '5.00', 5),
(357, 12, 'Satrio Wibowo', 1, 2, 4, 3, '5.00', 5),
(358, 13, 'Dimas Arya', 1, 2, 4, 3, '2.00', 2),
(359, 14, 'Yahya Zakarya', 1, 2, 4, 3, '5.00', 5),
(360, 15, 'Reka Andika Krisna', 1, 2, 4, 3, '1.00', 1),
(361, 16, 'Angga Nareswara Wicaksna', 1, 2, 4, 3, '4.00', 4),
(362, 17, 'Zuhdi Arif Azizi', 1, 2, 4, 3, '3.00', 3),
(363, 18, 'Dyo Akbar Maulana', 1, 2, 4, 3, '2.00', 2),
(364, 19, 'Ahmad Ali Akbar', 1, 2, 4, 3, '4.00', 4),
(365, 20, 'Novalino Ricsawan', 1, 2, 4, 3, '2.00', 2),
(366, 21, 'Muhammad Achmad Ramadhani', 1, 2, 4, 3, '2.00', 2),
(367, 22, 'Akbar Wahyu Bagaskara', 1, 2, 4, 3, '1.00', 1),
(368, 23, 'Tahta Maulana Ishaq', 1, 2, 4, 3, '1.00', 1),
(369, 24, 'David Setyoadi Wicaksono', 1, 2, 4, 3, '4.00', 4),
(370, 25, 'Leonardo Jimmy Putra', 1, 2, 4, 3, '3.00', 3),
(371, 26, 'Javier Rizky Ramadhan', 1, 2, 4, 3, '2.00', 2),
(372, 27, 'Galih Shacha Rakasiwi', 1, 2, 4, 3, '5.00', 5),
(373, 28, 'Mochamad Fatha Chofyan', 1, 2, 4, 3, '4.00', 4),
(374, 29, 'Raffa Agoes Saputro', 1, 2, 4, 3, '2.00', 2),
(375, 30, 'Raditra Galih Agung Gitayasa', 1, 2, 4, 3, '1.00', 1),
(376, 31, 'Elhadji Diva Asmoro', 1, 2, 4, 3, '1.00', 1),
(377, 32, 'Rizki Rahmat', 1, 2, 4, 3, '3.00', 3),
(378, 33, 'Dheo Santoso', 1, 2, 4, 3, '4.00', 4),
(379, 34, 'Muhammad Hafidz Darmawan', 1, 2, 4, 3, '4.00', 4),
(380, 35, 'Ganang Ade Wijaya', 1, 2, 4, 3, '3.00', 3),
(381, 36, 'Erza Zein Rusnandar', 1, 2, 4, 3, '4.00', 4),
(382, 37, 'Muhammad Rafel Alfarizal', 1, 2, 4, 3, '4.00', 4),
(383, 38, 'Dimas Aryo Sudariko', 1, 2, 4, 3, '1.00', 1),
(384, 39, 'Raka Dwi Purnama', 1, 2, 4, 3, '5.00', 5),
(385, 8, 'Dendi Arya Aza Pratama', 1, 3, 5, 1, '45.00', 5),
(386, 9, 'Zacky Bintang Alzamzamy', 1, 3, 5, 1, '20.00', 2),
(387, 10, 'Dicky Ramdiansyah', 1, 3, 5, 1, '37.00', 5),
(388, 11, 'Alfian Kusuma Pradana', 1, 3, 5, 1, '35.00', 4),
(389, 12, 'Satrio Wibowo', 1, 3, 5, 1, '16.00', 1),
(390, 13, 'Dimas Arya', 1, 3, 5, 1, '23.00', 2),
(391, 14, 'Yahya Zakarya', 1, 3, 5, 1, '41.00', 5),
(392, 15, 'Reka Andika Krisna', 1, 3, 5, 1, '48.00', 5),
(393, 16, 'Angga Nareswara Wicaksna', 1, 3, 5, 1, '22.00', 2),
(394, 17, 'Zuhdi Arif Azizi', 1, 3, 5, 1, '41.00', 5),
(395, 18, 'Dyo Akbar Maulana', 1, 3, 5, 1, '36.00', 5),
(396, 19, 'Ahmad Ali Akbar', 1, 3, 5, 1, '21.00', 2),
(397, 20, 'Novalino Ricsawan', 1, 3, 5, 1, '26.00', 3),
(398, 21, 'Muhammad Achmad Ramadhani', 1, 3, 5, 1, '36.00', 5),
(399, 22, 'Akbar Wahyu Bagaskara', 1, 3, 5, 1, '32.00', 4),
(400, 23, 'Tahta Maulana Ishaq', 1, 3, 5, 1, '34.00', 4),
(401, 24, 'David Setyoadi Wicaksono', 1, 3, 5, 1, '47.00', 5),
(402, 25, 'Leonardo Jimmy Putra', 1, 3, 5, 1, '23.00', 2),
(403, 26, 'Javier Rizky Ramadhan', 1, 3, 5, 1, '33.00', 4),
(404, 27, 'Galih Shacha Rakasiwi', 1, 3, 5, 1, '46.00', 5),
(405, 28, 'Mochamad Fatha Chofyan', 1, 3, 5, 1, '33.00', 4),
(406, 29, 'Raffa Agoes Saputro', 1, 3, 5, 1, '43.00', 5),
(407, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 5, 1, '20.00', 2),
(408, 31, 'Elhadji Diva Asmoro', 1, 3, 5, 1, '18.00', 1),
(409, 32, 'Rizki Rahmat', 1, 3, 5, 1, '23.00', 2),
(410, 33, 'Dheo Santoso', 1, 3, 5, 1, '35.00', 4),
(411, 34, 'Muhammad Hafidz Darmawan', 1, 3, 5, 1, '38.00', 5),
(412, 35, 'Ganang Ade Wijaya', 1, 3, 5, 1, '46.00', 5),
(413, 36, 'Erza Zein Rusnandar', 1, 3, 5, 1, '30.00', 3),
(414, 37, 'Muhammad Rafel Alfarizal', 1, 3, 5, 1, '16.00', 1),
(415, 38, 'Dimas Aryo Sudariko', 1, 3, 5, 1, '33.00', 4),
(416, 39, 'Raka Dwi Purnama', 1, 3, 5, 1, '40.00', 5),
(417, 8, 'Dendi Arya Aza Pratama', 1, 3, 5, 2, '39.00', 5),
(418, 9, 'Zacky Bintang Alzamzamy', 1, 3, 5, 2, '17.00', 1),
(419, 10, 'Dicky Ramdiansyah', 1, 3, 5, 2, '33.00', 4),
(420, 11, 'Alfian Kusuma Pradana', 1, 3, 5, 2, '18.00', 1),
(421, 12, 'Satrio Wibowo', 1, 3, 5, 2, '48.00', 5),
(422, 13, 'Dimas Arya', 1, 3, 5, 2, '27.00', 3),
(423, 14, 'Yahya Zakarya', 1, 3, 5, 2, '49.00', 5),
(424, 15, 'Reka Andika Krisna', 1, 3, 5, 2, '27.00', 3),
(425, 16, 'Angga Nareswara Wicaksna', 1, 3, 5, 2, '33.00', 4),
(426, 17, 'Zuhdi Arif Azizi', 1, 3, 5, 2, '16.00', 1),
(427, 18, 'Dyo Akbar Maulana', 1, 3, 5, 2, '18.00', 1),
(428, 19, 'Ahmad Ali Akbar', 1, 3, 5, 2, '42.00', 5),
(429, 20, 'Novalino Ricsawan', 1, 3, 5, 2, '33.00', 4),
(430, 21, 'Muhammad Achmad Ramadhani', 1, 3, 5, 2, '42.00', 5),
(431, 22, 'Akbar Wahyu Bagaskara', 1, 3, 5, 2, '48.00', 5),
(432, 23, 'Tahta Maulana Ishaq', 1, 3, 5, 2, '19.00', 1),
(433, 24, 'David Setyoadi Wicaksono', 1, 3, 5, 2, '21.00', 2),
(434, 25, 'Leonardo Jimmy Putra', 1, 3, 5, 2, '29.00', 3),
(435, 26, 'Javier Rizky Ramadhan', 1, 3, 5, 2, '40.00', 5),
(436, 27, 'Galih Shacha Rakasiwi', 1, 3, 5, 2, '29.00', 3),
(437, 28, 'Mochamad Fatha Chofyan', 1, 3, 5, 2, '47.00', 5),
(438, 29, 'Raffa Agoes Saputro', 1, 3, 5, 2, '15.00', 1),
(439, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 5, 2, '43.00', 5),
(440, 31, 'Elhadji Diva Asmoro', 1, 3, 5, 2, '37.00', 5),
(441, 32, 'Rizki Rahmat', 1, 3, 5, 2, '42.00', 5),
(442, 33, 'Dheo Santoso', 1, 3, 5, 2, '23.00', 2),
(443, 34, 'Muhammad Hafidz Darmawan', 1, 3, 5, 2, '41.00', 5),
(444, 35, 'Ganang Ade Wijaya', 1, 3, 5, 2, '25.00', 2),
(445, 36, 'Erza Zein Rusnandar', 1, 3, 5, 2, '31.00', 4),
(446, 37, 'Muhammad Rafel Alfarizal', 1, 3, 5, 2, '16.00', 1),
(447, 38, 'Dimas Aryo Sudariko', 1, 3, 5, 2, '20.00', 2),
(448, 39, 'Raka Dwi Purnama', 1, 3, 5, 2, '38.00', 5),
(449, 8, 'Dendi Arya Aza Pratama', 1, 3, 5, 3, '30.00', 3),
(450, 9, 'Zacky Bintang Alzamzamy', 1, 3, 5, 3, '49.00', 5),
(451, 10, 'Dicky Ramdiansyah', 1, 3, 5, 3, '36.00', 5),
(452, 11, 'Alfian Kusuma Pradana', 1, 3, 5, 3, '40.00', 5),
(453, 12, 'Satrio Wibowo', 1, 3, 5, 3, '17.00', 1),
(454, 13, 'Dimas Arya', 1, 3, 5, 3, '35.00', 4),
(455, 14, 'Yahya Zakarya', 1, 3, 5, 3, '22.00', 2),
(456, 15, 'Reka Andika Krisna', 1, 3, 5, 3, '43.00', 5),
(457, 16, 'Angga Nareswara Wicaksna', 1, 3, 5, 3, '17.00', 1),
(458, 17, 'Zuhdi Arif Azizi', 1, 3, 5, 3, '43.00', 5),
(459, 18, 'Dyo Akbar Maulana', 1, 3, 5, 3, '22.00', 2),
(460, 19, 'Ahmad Ali Akbar', 1, 3, 5, 3, '17.00', 1),
(461, 20, 'Novalino Ricsawan', 1, 3, 5, 3, '43.00', 5),
(462, 21, 'Muhammad Achmad Ramadhani', 1, 3, 5, 3, '22.00', 2),
(463, 22, 'Akbar Wahyu Bagaskara', 1, 3, 5, 3, '28.00', 3),
(464, 23, 'Tahta Maulana Ishaq', 1, 3, 5, 3, '41.00', 5),
(465, 24, 'David Setyoadi Wicaksono', 1, 3, 5, 3, '43.00', 5),
(466, 25, 'Leonardo Jimmy Putra', 1, 3, 5, 3, '35.00', 4),
(467, 26, 'Javier Rizky Ramadhan', 1, 3, 5, 3, '49.00', 5),
(468, 27, 'Galih Shacha Rakasiwi', 1, 3, 5, 3, '31.00', 4),
(469, 28, 'Mochamad Fatha Chofyan', 1, 3, 5, 3, '36.00', 5),
(470, 29, 'Raffa Agoes Saputro', 1, 3, 5, 3, '49.00', 5),
(471, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 5, 3, '18.00', 1),
(472, 31, 'Elhadji Diva Asmoro', 1, 3, 5, 3, '33.00', 4),
(473, 32, 'Rizki Rahmat', 1, 3, 5, 3, '19.00', 1),
(474, 33, 'Dheo Santoso', 1, 3, 5, 3, '23.00', 2),
(475, 34, 'Muhammad Hafidz Darmawan', 1, 3, 5, 3, '24.00', 2),
(476, 35, 'Ganang Ade Wijaya', 1, 3, 5, 3, '27.00', 3),
(477, 36, 'Erza Zein Rusnandar', 1, 3, 5, 3, '19.00', 1),
(478, 37, 'Muhammad Rafel Alfarizal', 1, 3, 5, 3, '22.00', 2),
(479, 38, 'Dimas Aryo Sudariko', 1, 3, 5, 3, '35.00', 4),
(480, 39, 'Raka Dwi Purnama', 1, 3, 5, 3, '33.00', 4),
(481, 8, 'Dendi Arya Aza Pratama', 1, 3, 6, 1, '4.00', 4),
(482, 9, 'Zacky Bintang Alzamzamy', 1, 3, 6, 1, '2.00', 2),
(483, 10, 'Dicky Ramdiansyah', 1, 3, 6, 1, '2.00', 2),
(484, 11, 'Alfian Kusuma Pradana', 1, 3, 6, 1, '4.00', 4),
(485, 12, 'Satrio Wibowo', 1, 3, 6, 1, '5.00', 5),
(486, 13, 'Dimas Arya', 1, 3, 6, 1, '5.00', 5),
(487, 14, 'Yahya Zakarya', 1, 3, 6, 1, '2.00', 2),
(488, 15, 'Reka Andika Krisna', 1, 3, 6, 1, '5.00', 5),
(489, 16, 'Angga Nareswara Wicaksna', 1, 3, 6, 1, '1.00', 1),
(490, 17, 'Zuhdi Arif Azizi', 1, 3, 6, 1, '1.00', 1),
(491, 18, 'Dyo Akbar Maulana', 1, 3, 6, 1, '5.00', 5),
(492, 19, 'Ahmad Ali Akbar', 1, 3, 6, 1, '4.00', 4),
(493, 20, 'Novalino Ricsawan', 1, 3, 6, 1, '2.00', 2),
(494, 21, 'Muhammad Achmad Ramadhani', 1, 3, 6, 1, '3.00', 3),
(495, 22, 'Akbar Wahyu Bagaskara', 1, 3, 6, 1, '3.00', 3),
(496, 23, 'Tahta Maulana Ishaq', 1, 3, 6, 1, '2.00', 2),
(497, 24, 'David Setyoadi Wicaksono', 1, 3, 6, 1, '1.00', 1),
(498, 25, 'Leonardo Jimmy Putra', 1, 3, 6, 1, '4.00', 4),
(499, 26, 'Javier Rizky Ramadhan', 1, 3, 6, 1, '4.00', 4),
(500, 27, 'Galih Shacha Rakasiwi', 1, 3, 6, 1, '1.00', 1),
(501, 28, 'Mochamad Fatha Chofyan', 1, 3, 6, 1, '4.00', 4),
(502, 29, 'Raffa Agoes Saputro', 1, 3, 6, 1, '5.00', 5),
(503, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 6, 1, '3.00', 3),
(504, 31, 'Elhadji Diva Asmoro', 1, 3, 6, 1, '4.00', 4),
(505, 32, 'Rizki Rahmat', 1, 3, 6, 1, '4.00', 4),
(506, 33, 'Dheo Santoso', 1, 3, 6, 1, '5.00', 5),
(507, 34, 'Muhammad Hafidz Darmawan', 1, 3, 6, 1, '3.00', 3),
(508, 35, 'Ganang Ade Wijaya', 1, 3, 6, 1, '4.00', 4),
(509, 36, 'Erza Zein Rusnandar', 1, 3, 6, 1, '2.00', 2),
(510, 37, 'Muhammad Rafel Alfarizal', 1, 3, 6, 1, '4.00', 4),
(511, 38, 'Dimas Aryo Sudariko', 1, 3, 6, 1, '4.00', 4),
(512, 39, 'Raka Dwi Purnama', 1, 3, 6, 1, '3.00', 3),
(513, 8, 'Dendi Arya Aza Pratama', 1, 3, 6, 2, '5.00', 5),
(514, 9, 'Zacky Bintang Alzamzamy', 1, 3, 6, 2, '4.00', 4),
(515, 10, 'Dicky Ramdiansyah', 1, 3, 6, 2, '4.00', 4),
(516, 11, 'Alfian Kusuma Pradana', 1, 3, 6, 2, '1.00', 1),
(517, 12, 'Satrio Wibowo', 1, 3, 6, 2, '4.00', 4),
(518, 13, 'Dimas Arya', 1, 3, 6, 2, '5.00', 5),
(519, 14, 'Yahya Zakarya', 1, 3, 6, 2, '5.00', 5),
(520, 15, 'Reka Andika Krisna', 1, 3, 6, 2, '4.00', 4),
(521, 16, 'Angga Nareswara Wicaksna', 1, 3, 6, 2, '1.00', 1),
(522, 17, 'Zuhdi Arif Azizi', 1, 3, 6, 2, '1.00', 1),
(523, 18, 'Dyo Akbar Maulana', 1, 3, 6, 2, '2.00', 2),
(524, 19, 'Ahmad Ali Akbar', 1, 3, 6, 2, '3.00', 3),
(525, 20, 'Novalino Ricsawan', 1, 3, 6, 2, '5.00', 5),
(526, 21, 'Muhammad Achmad Ramadhani', 1, 3, 6, 2, '2.00', 2),
(527, 22, 'Akbar Wahyu Bagaskara', 1, 3, 6, 2, '4.00', 4),
(528, 23, 'Tahta Maulana Ishaq', 1, 3, 6, 2, '1.00', 1),
(529, 24, 'David Setyoadi Wicaksono', 1, 3, 6, 2, '2.00', 2),
(530, 25, 'Leonardo Jimmy Putra', 1, 3, 6, 2, '5.00', 5),
(531, 26, 'Javier Rizky Ramadhan', 1, 3, 6, 2, '2.00', 2),
(532, 27, 'Galih Shacha Rakasiwi', 1, 3, 6, 2, '2.00', 2),
(533, 28, 'Mochamad Fatha Chofyan', 1, 3, 6, 2, '2.00', 2),
(534, 29, 'Raffa Agoes Saputro', 1, 3, 6, 2, '2.00', 2),
(535, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 6, 2, '1.00', 1),
(536, 31, 'Elhadji Diva Asmoro', 1, 3, 6, 2, '1.00', 1),
(537, 32, 'Rizki Rahmat', 1, 3, 6, 2, '3.00', 3),
(538, 33, 'Dheo Santoso', 1, 3, 6, 2, '4.00', 4),
(539, 34, 'Muhammad Hafidz Darmawan', 1, 3, 6, 2, '1.00', 1),
(540, 35, 'Ganang Ade Wijaya', 1, 3, 6, 2, '4.00', 4),
(541, 36, 'Erza Zein Rusnandar', 1, 3, 6, 2, '1.00', 1),
(542, 37, 'Muhammad Rafel Alfarizal', 1, 3, 6, 2, '4.00', 4),
(543, 38, 'Dimas Aryo Sudariko', 1, 3, 6, 2, '2.00', 2),
(544, 39, 'Raka Dwi Purnama', 1, 3, 6, 2, '1.00', 1),
(545, 8, 'Dendi Arya Aza Pratama', 1, 3, 6, 3, '4.00', 4),
(546, 9, 'Zacky Bintang Alzamzamy', 1, 3, 6, 3, '2.00', 2),
(547, 10, 'Dicky Ramdiansyah', 1, 3, 6, 3, '4.00', 4),
(548, 11, 'Alfian Kusuma Pradana', 1, 3, 6, 3, '3.00', 3),
(549, 12, 'Satrio Wibowo', 1, 3, 6, 3, '1.00', 1),
(550, 13, 'Dimas Arya', 1, 3, 6, 3, '2.00', 2),
(551, 14, 'Yahya Zakarya', 1, 3, 6, 3, '5.00', 5),
(552, 15, 'Reka Andika Krisna', 1, 3, 6, 3, '2.00', 2),
(553, 16, 'Angga Nareswara Wicaksna', 1, 3, 6, 3, '3.00', 3),
(554, 17, 'Zuhdi Arif Azizi', 1, 3, 6, 3, '1.00', 1),
(555, 18, 'Dyo Akbar Maulana', 1, 3, 6, 3, '4.00', 4),
(556, 19, 'Ahmad Ali Akbar', 1, 3, 6, 3, '3.00', 3),
(557, 20, 'Novalino Ricsawan', 1, 3, 6, 3, '2.00', 2),
(558, 21, 'Muhammad Achmad Ramadhani', 1, 3, 6, 3, '2.00', 2),
(559, 22, 'Akbar Wahyu Bagaskara', 1, 3, 6, 3, '2.00', 2),
(560, 23, 'Tahta Maulana Ishaq', 1, 3, 6, 3, '5.00', 5),
(561, 24, 'David Setyoadi Wicaksono', 1, 3, 6, 3, '1.00', 1),
(562, 25, 'Leonardo Jimmy Putra', 1, 3, 6, 3, '2.00', 2),
(563, 26, 'Javier Rizky Ramadhan', 1, 3, 6, 3, '1.00', 1),
(564, 27, 'Galih Shacha Rakasiwi', 1, 3, 6, 3, '3.00', 3),
(565, 28, 'Mochamad Fatha Chofyan', 1, 3, 6, 3, '5.00', 5),
(566, 29, 'Raffa Agoes Saputro', 1, 3, 6, 3, '1.00', 1),
(567, 30, 'Raditra Galih Agung Gitayasa', 1, 3, 6, 3, '1.00', 1),
(568, 31, 'Elhadji Diva Asmoro', 1, 3, 6, 3, '1.00', 1),
(569, 32, 'Rizki Rahmat', 1, 3, 6, 3, '1.00', 1),
(570, 33, 'Dheo Santoso', 1, 3, 6, 3, '3.00', 3),
(571, 34, 'Muhammad Hafidz Darmawan', 1, 3, 6, 3, '2.00', 2),
(572, 35, 'Ganang Ade Wijaya', 1, 3, 6, 3, '2.00', 2),
(573, 36, 'Erza Zein Rusnandar', 1, 3, 6, 3, '2.00', 2),
(574, 37, 'Muhammad Rafel Alfarizal', 1, 3, 6, 3, '1.00', 1),
(575, 38, 'Dimas Aryo Sudariko', 1, 3, 6, 3, '1.00', 1),
(576, 39, 'Raka Dwi Purnama', 1, 3, 6, 3, '1.00', 1),
(577, 8, 'Dendi Arya Aza Pratama', 1, 4, 7, 1, '4.13', 5),
(578, 9, 'Zacky Bintang Alzamzamy', 1, 4, 7, 1, '3.32', 5),
(579, 10, 'Dicky Ramdiansyah', 1, 4, 7, 1, '3.92', 5),
(580, 11, 'Alfian Kusuma Pradana', 1, 4, 7, 1, '4.51', 5),
(581, 12, 'Satrio Wibowo', 1, 4, 7, 1, '4.31', 5),
(582, 13, 'Dimas Arya', 1, 4, 7, 1, '4.05', 5),
(583, 14, 'Yahya Zakarya', 1, 4, 7, 1, '4.53', 5),
(584, 15, 'Reka Andika Krisna', 1, 4, 7, 1, '4.34', 5),
(585, 16, 'Angga Nareswara Wicaksna', 1, 4, 7, 1, '4.01', 5),
(586, 17, 'Zuhdi Arif Azizi', 1, 4, 7, 1, '4.02', 5),
(587, 18, 'Dyo Akbar Maulana', 1, 4, 7, 1, '4.14', 5),
(588, 19, 'Ahmad Ali Akbar', 1, 4, 7, 1, '4.11', 5),
(589, 20, 'Novalino Ricsawan', 1, 4, 7, 1, '3.85', 5),
(590, 21, 'Muhammad Achmad Ramadhani', 1, 4, 7, 1, '3.95', 5),
(591, 22, 'Akbar Wahyu Bagaskara', 1, 4, 7, 1, '3.98', 5),
(592, 23, 'Tahta Maulana Ishaq', 1, 4, 7, 1, '4.00', 5),
(593, 24, 'David Setyoadi Wicaksono', 1, 4, 7, 1, '3.91', 5),
(594, 25, 'Leonardo Jimmy Putra', 1, 4, 7, 1, '4.19', 5),
(595, 26, 'Javier Rizky Ramadhan', 1, 4, 7, 1, '3.92', 5),
(596, 27, 'Galih Shacha Rakasiwi', 1, 4, 7, 1, '4.03', 5),
(597, 28, 'Mochamad Fatha Chofyan', 1, 4, 7, 1, '3.95', 5),
(598, 29, 'Raffa Agoes Saputro', 1, 4, 7, 1, '3.95', 5),
(599, 30, 'Raditra Galih Agung Gitayasa', 1, 4, 7, 1, '4.18', 5),
(600, 31, 'Elhadji Diva Asmoro', 1, 4, 7, 1, '4.17', 5),
(601, 32, 'Rizki Rahmat', 1, 4, 7, 1, '3.93', 5),
(602, 33, 'Dheo Santoso', 1, 4, 7, 1, '3.98', 5),
(603, 34, 'Muhammad Hafidz Darmawan', 1, 4, 7, 1, '4.04', 5),
(604, 35, 'Ganang Ade Wijaya', 1, 4, 7, 1, '3.99', 5),
(605, 36, 'Erza Zein Rusnandar', 1, 4, 7, 1, '4.21', 5),
(606, 37, 'Muhammad Rafel Alfarizal', 1, 4, 7, 1, '4.03', 5),
(607, 38, 'Dimas Aryo Sudariko', 1, 4, 7, 1, '4.16', 5),
(608, 39, 'Raka Dwi Purnama', 1, 4, 7, 1, '3.89', 5),
(609, 8, 'Dendi Arya Aza Pratama', 1, 4, 7, 2, '4.93', 4),
(610, 9, 'Zacky Bintang Alzamzamy', 1, 4, 7, 2, '4.73', 4),
(611, 10, 'Dicky Ramdiansyah', 1, 4, 7, 2, '4.84', 4),
(612, 11, 'Alfian Kusuma Pradana', 1, 4, 7, 2, '4.99', 4),
(613, 12, 'Satrio Wibowo', 1, 4, 7, 2, '4.92', 4),
(614, 13, 'Dimas Arya', 1, 4, 7, 2, '4.10', 5),
(615, 14, 'Yahya Zakarya', 1, 4, 7, 2, '4.21', 5),
(616, 15, 'Reka Andika Krisna', 1, 4, 7, 2, '4.73', 4),
(617, 16, 'Angga Nareswara Wicaksna', 1, 4, 7, 2, '4.44', 5),
(618, 17, 'Zuhdi Arif Azizi', 1, 4, 7, 2, '4.21', 5),
(619, 18, 'Dyo Akbar Maulana', 1, 4, 7, 2, '4.21', 5),
(620, 19, 'Ahmad Ali Akbar', 1, 4, 7, 2, '4.36', 5),
(621, 20, 'Novalino Ricsawan', 1, 4, 7, 2, '5.04', 4),
(622, 21, 'Muhammad Achmad Ramadhani', 1, 4, 7, 2, '4.30', 5),
(623, 22, 'Akbar Wahyu Bagaskara', 1, 4, 7, 2, '4.34', 5),
(624, 23, 'Tahta Maulana Ishaq', 1, 4, 7, 2, '4.51', 5),
(625, 24, 'David Setyoadi Wicaksono', 1, 4, 7, 2, '4.58', 5),
(626, 25, 'Leonardo Jimmy Putra', 1, 4, 7, 2, '4.67', 5),
(627, 26, 'Javier Rizky Ramadhan', 1, 4, 7, 2, '4.79', 4),
(628, 27, 'Galih Shacha Rakasiwi', 1, 4, 7, 2, '4.37', 5),
(629, 28, 'Mochamad Fatha Chofyan', 1, 4, 7, 2, '4.84', 4),
(630, 29, 'Raffa Agoes Saputro', 1, 4, 7, 2, '4.36', 5),
(631, 30, 'Raditra Galih Agung Gitayasa', 1, 4, 7, 2, '4.69', 5),
(632, 31, 'Elhadji Diva Asmoro', 1, 4, 7, 2, '4.73', 4),
(633, 32, 'Rizki Rahmat', 1, 4, 7, 2, '4.74', 4),
(634, 33, 'Dheo Santoso', 1, 4, 7, 2, '4.16', 5),
(635, 34, 'Muhammad Hafidz Darmawan', 1, 4, 7, 2, '4.99', 4),
(636, 35, 'Ganang Ade Wijaya', 1, 4, 7, 2, '4.49', 5),
(637, 36, 'Erza Zein Rusnandar', 1, 4, 7, 2, '4.05', 5),
(638, 37, 'Muhammad Rafel Alfarizal', 1, 4, 7, 2, '4.88', 4),
(639, 38, 'Dimas Aryo Sudariko', 1, 4, 7, 2, '4.23', 5),
(640, 39, 'Raka Dwi Purnama', 1, 4, 7, 2, '4.98', 4),
(641, 8, 'Dendi Arya Aza Pratama', 1, 4, 7, 3, '4.55', 5),
(642, 9, 'Zacky Bintang Alzamzamy', 1, 4, 7, 3, '4.26', 5),
(643, 10, 'Dicky Ramdiansyah', 1, 4, 7, 3, '4.23', 5),
(644, 11, 'Alfian Kusuma Pradana', 1, 4, 7, 3, '3.98', 5),
(645, 12, 'Satrio Wibowo', 1, 4, 7, 3, '4.40', 5),
(646, 13, 'Dimas Arya', 1, 4, 7, 3, '4.97', 4),
(647, 14, 'Yahya Zakarya', 1, 4, 7, 3, '4.33', 5),
(648, 15, 'Reka Andika Krisna', 1, 4, 7, 3, '5.01', 4),
(649, 16, 'Angga Nareswara Wicaksna', 1, 4, 7, 3, '4.10', 5),
(650, 17, 'Zuhdi Arif Azizi', 1, 4, 7, 3, '4.35', 5),
(651, 18, 'Dyo Akbar Maulana', 1, 4, 7, 3, '4.21', 5),
(652, 19, 'Ahmad Ali Akbar', 1, 4, 7, 3, '4.70', 4),
(653, 20, 'Novalino Ricsawan', 1, 4, 7, 3, '4.36', 5),
(654, 21, 'Muhammad Achmad Ramadhani', 1, 4, 7, 3, '4.82', 4),
(655, 22, 'Akbar Wahyu Bagaskara', 1, 4, 7, 3, '4.98', 4),
(656, 23, 'Tahta Maulana Ishaq', 1, 4, 7, 3, '4.47', 5),
(657, 24, 'David Setyoadi Wicaksono', 1, 4, 7, 3, '4.52', 5),
(658, 25, 'Leonardo Jimmy Putra', 1, 4, 7, 3, '4.49', 5),
(659, 26, 'Javier Rizky Ramadhan', 1, 4, 7, 3, '5.13', 4),
(660, 27, 'Galih Shacha Rakasiwi', 1, 4, 7, 3, '4.36', 5),
(661, 28, 'Mochamad Fatha Chofyan', 1, 4, 7, 3, '4.29', 5),
(662, 29, 'Raffa Agoes Saputro', 1, 4, 7, 3, '4.19', 5),
(663, 30, 'Raditra Galih Agung Gitayasa', 1, 4, 7, 3, '4.11', 5),
(664, 31, 'Elhadji Diva Asmoro', 1, 4, 7, 3, '4.48', 5),
(665, 32, 'Rizki Rahmat', 1, 4, 7, 3, '4.92', 4),
(666, 33, 'Dheo Santoso', 1, 4, 7, 3, '4.41', 5),
(667, 34, 'Muhammad Hafidz Darmawan', 1, 4, 7, 3, '4.13', 5),
(668, 35, 'Ganang Ade Wijaya', 1, 4, 7, 3, '4.01', 5),
(669, 36, 'Erza Zein Rusnandar', 1, 4, 7, 3, '4.61', 5),
(670, 37, 'Muhammad Rafel Alfarizal', 1, 4, 7, 3, '4.45', 5),
(671, 38, 'Dimas Aryo Sudariko', 1, 4, 7, 3, '4.44', 5),
(672, 39, 'Raka Dwi Purnama', 1, 4, 7, 3, '4.48', 5),
(673, 8, 'Dendi Arya Aza Pratama', 1, 4, 7, 4, '5.11', 4),
(674, 9, 'Zacky Bintang Alzamzamy', 1, 4, 7, 4, '4.92', 4),
(675, 10, 'Dicky Ramdiansyah', 1, 4, 7, 4, '4.26', 5),
(676, 11, 'Alfian Kusuma Pradana', 1, 4, 7, 4, '4.61', 5),
(677, 12, 'Satrio Wibowo', 1, 4, 7, 4, '4.90', 4),
(678, 13, 'Dimas Arya', 1, 4, 7, 4, '4.74', 4),
(679, 14, 'Yahya Zakarya', 1, 4, 7, 4, '4.67', 5),
(680, 15, 'Reka Andika Krisna', 1, 4, 7, 4, '5.05', 4),
(681, 16, 'Angga Nareswara Wicaksna', 1, 4, 7, 4, '4.33', 5),
(682, 17, 'Zuhdi Arif Azizi', 1, 4, 7, 4, '4.80', 4),
(683, 18, 'Dyo Akbar Maulana', 1, 4, 7, 4, '4.30', 5),
(684, 19, 'Ahmad Ali Akbar', 1, 4, 7, 4, '4.60', 5),
(685, 20, 'Novalino Ricsawan', 1, 4, 7, 4, '4.95', 4),
(686, 21, 'Muhammad Achmad Ramadhani', 1, 4, 7, 4, '4.91', 4),
(687, 22, 'Akbar Wahyu Bagaskara', 1, 4, 7, 4, '4.50', 5),
(688, 23, 'Tahta Maulana Ishaq', 1, 4, 7, 4, '4.53', 5),
(689, 24, 'David Setyoadi Wicaksono', 1, 4, 7, 4, '4.66', 5),
(690, 25, 'Leonardo Jimmy Putra', 1, 4, 7, 4, '4.82', 4),
(691, 26, 'Javier Rizky Ramadhan', 1, 4, 7, 4, '4.59', 5),
(692, 27, 'Galih Shacha Rakasiwi', 1, 4, 7, 4, '4.38', 5),
(693, 28, 'Mochamad Fatha Chofyan', 1, 4, 7, 4, '4.96', 4),
(694, 29, 'Raffa Agoes Saputro', 1, 4, 7, 4, '4.56', 5),
(695, 30, 'Raditra Galih Agung Gitayasa', 1, 4, 7, 4, '5.15', 4),
(696, 31, 'Elhadji Diva Asmoro', 1, 4, 7, 4, '4.98', 4),
(697, 32, 'Rizki Rahmat', 1, 4, 7, 4, '4.38', 5),
(698, 33, 'Dheo Santoso', 1, 4, 7, 4, '4.00', 5),
(699, 34, 'Muhammad Hafidz Darmawan', 1, 4, 7, 4, '4.65', 5),
(700, 35, 'Ganang Ade Wijaya', 1, 4, 7, 4, '4.24', 5),
(701, 36, 'Erza Zein Rusnandar', 1, 4, 7, 4, '4.95', 4),
(702, 37, 'Muhammad Rafel Alfarizal', 1, 4, 7, 4, '4.36', 5),
(703, 38, 'Dimas Aryo Sudariko', 1, 4, 7, 4, '4.30', 5),
(704, 39, 'Raka Dwi Purnama', 1, 4, 7, 4, '4.34', 5),
(705, 8, 'Dendi Arya Aza Pratama', 1, 4, 7, 5, '4.71', 4),
(706, 9, 'Zacky Bintang Alzamzamy', 1, 4, 7, 5, '5.10', 4),
(707, 10, 'Dicky Ramdiansyah', 1, 4, 7, 5, '4.22', 5),
(708, 11, 'Alfian Kusuma Pradana', 1, 4, 7, 5, '4.95', 4),
(709, 12, 'Satrio Wibowo', 1, 4, 7, 5, '5.15', 4),
(710, 13, 'Dimas Arya', 1, 4, 7, 5, '4.82', 4),
(711, 14, 'Yahya Zakarya', 1, 4, 7, 5, '4.53', 5),
(712, 15, 'Reka Andika Krisna', 1, 4, 7, 5, '5.11', 4),
(713, 16, 'Angga Nareswara Wicaksna', 1, 4, 7, 5, '4.77', 4),
(714, 17, 'Zuhdi Arif Azizi', 1, 4, 7, 5, '4.99', 4),
(715, 18, 'Dyo Akbar Maulana', 1, 4, 7, 5, '4.52', 5),
(716, 19, 'Ahmad Ali Akbar', 1, 4, 7, 5, '4.88', 4),
(717, 20, 'Novalino Ricsawan', 1, 4, 7, 5, '5.08', 4),
(718, 21, 'Muhammad Achmad Ramadhani', 1, 4, 7, 5, '4.85', 4),
(719, 22, 'Akbar Wahyu Bagaskara', 1, 4, 7, 5, '5.15', 4),
(720, 23, 'Tahta Maulana Ishaq', 1, 4, 7, 5, '4.26', 5),
(721, 24, 'David Setyoadi Wicaksono', 1, 4, 7, 5, '5.14', 4),
(722, 25, 'Leonardo Jimmy Putra', 1, 4, 7, 5, '4.85', 4),
(723, 26, 'Javier Rizky Ramadhan', 1, 4, 7, 5, '4.92', 4),
(724, 27, 'Galih Shacha Rakasiwi', 1, 4, 7, 5, '5.12', 4),
(725, 28, 'Mochamad Fatha Chofyan', 1, 4, 7, 5, '5.05', 4),
(726, 29, 'Raffa Agoes Saputro', 1, 4, 7, 5, '4.92', 4),
(727, 30, 'Raditra Galih Agung Gitayasa', 1, 4, 7, 5, '4.72', 4),
(728, 31, 'Elhadji Diva Asmoro', 1, 4, 7, 5, '5.01', 4),
(729, 32, 'Rizki Rahmat', 1, 4, 7, 5, '5.11', 4),
(730, 33, 'Dheo Santoso', 1, 4, 7, 5, '4.59', 5),
(731, 34, 'Muhammad Hafidz Darmawan', 1, 4, 7, 5, '4.97', 4),
(732, 35, 'Ganang Ade Wijaya', 1, 4, 7, 5, '4.92', 4),
(733, 36, 'Erza Zein Rusnandar', 1, 4, 7, 5, '5.09', 4),
(734, 37, 'Muhammad Rafel Alfarizal', 1, 4, 7, 5, '4.74', 4),
(735, 38, 'Dimas Aryo Sudariko', 1, 4, 7, 5, '4.78', 4),
(736, 39, 'Raka Dwi Purnama', 1, 4, 7, 5, '4.51', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_standar`
--

CREATE TABLE `nilai_standar` (
  `id_nilai_standar` int(11) NOT NULL,
  `id_bobot_tes` int(11) NOT NULL,
  `jenis_tes` varchar(20) NOT NULL,
  `nilai_standar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_standar`
--

INSERT INTO `nilai_standar` (`id_nilai_standar`, `id_bobot_tes`, `jenis_tes`, `nilai_standar`) VALUES
(1, 1, 'Tes Pukul', 3),
(2, 2, 'Tes Tangkap', 3),
(3, 3, 'Tes Lempar', 2),
(4, 4, 'Tes Lari', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tes`
--

CREATE TABLE `nilai_tes` (
  `id_nilai` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `id_seleksi` int(11) NOT NULL,
  `id_bobot_tes` int(11) NOT NULL,
  `nilai_tes_keterampilan` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `nilai_tes_unjuk_kerja` decimal(6,4) NOT NULL DEFAULT '0.0000',
  `nilai_si` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `nilai_ri` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `nilai_qi` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `status` enum('Memenuhi Standar','Tidak Memenuhi Standar','') NOT NULL DEFAULT 'Memenuhi Standar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_tes`
--

INSERT INTO `nilai_tes` (`id_nilai`, `id_akun`, `nama_peserta`, `id_seleksi`, `id_bobot_tes`, `nilai_tes_keterampilan`, `nilai_tes_unjuk_kerja`, `nilai_si`, `nilai_ri`, `nilai_qi`, `status`) VALUES
(1, 8, 'Dendi Arya Aza Pratama', 1, 1, '2.3333', '4.0000', '0.5467', '0.4667', '0.5834', 'Memenuhi Standar'),
(2, 8, 'Dendi Arya Aza Pratama', 1, 2, '3.0000', '4.6667', '0.3334', '0.3334', '0.4047', 'Memenuhi Standar'),
(3, 8, 'Dendi Arya Aza Pratama', 1, 3, '4.3333', '4.3333', '0.0600', '0.0600', '0.0000', 'Memenuhi Standar'),
(4, 9, 'Zacky Bintang Alzamzamy', 1, 1, '2.3333', '2.3333', '0.7467', '0.4667', '0.7465', 'Memenuhi Standar'),
(5, 9, 'Zacky Bintang Alzamzamy', 1, 2, '4.6667', '4.0000', '0.0800', '0.0800', '0.0000', 'Memenuhi Standar'),
(6, 9, 'Zacky Bintang Alzamzamy', 1, 3, '2.6667', '2.6667', '0.5600', '0.3600', '0.6349', 'Memenuhi Standar'),
(7, 10, 'Dicky Ramdiansyah', 1, 1, '3.0000', '3.3333', '0.4934', '0.3334', '0.3733', 'Memenuhi Standar'),
(8, 10, 'Dicky Ramdiansyah', 1, 2, '3.6667', '2.6667', '0.4400', '0.2400', '0.3827', 'Memenuhi Standar'),
(9, 10, 'Dicky Ramdiansyah', 1, 3, '4.6667', '3.3333', '0.1200', '0.1200', '0.0984', 'Memenuhi Standar'),
(10, 11, 'Alfian Kusuma Pradana', 1, 1, '3.6667', '3.3333', '0.3600', '0.2000', '0.0978', 'Memenuhi Standar'),
(11, 11, 'Alfian Kusuma Pradana', 1, 2, '3.0000', '4.0000', '0.4134', '0.3334', '0.4556', 'Memenuhi Standar'),
(12, 11, 'Alfian Kusuma Pradana', 1, 3, '3.3333', '2.6667', '0.4400', '0.2400', '0.4381', 'Memenuhi Standar'),
(13, 12, 'Satrio Wibowo', 1, 1, '3.6667', '1.6667', '0.5600', '0.3600', '0.4609', 'Memenuhi Standar'),
(14, 12, 'Satrio Wibowo', 1, 2, '4.6667', '2.6667', '0.2400', '0.2400', '0.2555', 'Memenuhi Standar'),
(15, 12, 'Satrio Wibowo', 1, 3, '2.3333', '3.3333', '0.5400', '0.4200', '0.6762', 'Memenuhi Standar'),
(16, 13, 'Dimas Arya', 1, 1, '2.6667', '4.3333', '0.4400', '0.4000', '0.4131', 'Memenuhi Standar'),
(17, 13, 'Dimas Arya', 1, 2, '3.3333', '2.3333', '0.5467', '0.2800', '0.4889', 'Memenuhi Standar'),
(18, 13, 'Dimas Arya', 1, 3, '3.0000', '4.0000', '0.3400', '0.3000', '0.4222', 'Memenuhi Standar'),
(19, 14, 'Yahya Zakarya', 1, 1, '2.3333', '3.0000', '0.6667', '0.4667', '0.6812', 'Memenuhi Standar'),
(20, 14, 'Yahya Zakarya', 1, 2, '3.0000', '4.6667', '0.3334', '0.3334', '0.4047', 'Memenuhi Standar'),
(21, 14, 'Yahya Zakarya', 1, 3, '4.0000', '4.0000', '0.1600', '0.1200', '0.1270', 'Memenuhi Standar'),
(22, 15, 'Reka Andika Krisna', 1, 1, '3.0000', '2.0000', '0.6534', '0.3334', '0.5038', 'Memenuhi Standar'),
(23, 15, 'Reka Andika Krisna', 1, 2, '3.6667', '2.6667', '0.4400', '0.2400', '0.3827', 'Memenuhi Standar'),
(24, 15, 'Reka Andika Krisna', 1, 3, '4.3333', '3.6667', '0.1400', '0.0800', '0.0757', 'Memenuhi Standar'),
(25, 16, 'Angga Nareswara Wicaksna', 1, 1, '2.3333', '3.0000', '0.6667', '0.4667', '0.6812', 'Memenuhi Standar'),
(26, 16, 'Angga Nareswara Wicaksna', 1, 2, '2.6667', '3.3333', '0.5600', '0.4000', '0.6128', 'Memenuhi Standar'),
(27, 16, 'Angga Nareswara Wicaksna', 1, 3, '2.3333', '1.6667', '0.7400', '0.4200', '0.8190', 'Memenuhi Standar'),
(28, 17, 'Zuhdi Arif Azizi', 1, 1, '2.6667', '4.0000', '0.4800', '0.4000', '0.4457', 'Memenuhi Standar'),
(29, 17, 'Zuhdi Arif Azizi', 1, 2, '2.6667', '3.0000', '0.6000', '0.4000', '0.6382', 'Memenuhi Standar'),
(30, 17, 'Zuhdi Arif Azizi', 1, 3, '3.6667', '1.0000', '0.5800', '0.4000', '0.6862', 'Memenuhi Standar'),
(31, 18, 'Dyo Akbar Maulana', 1, 1, '3.6667', '2.6667', '0.4400', '0.2400', '0.2131', 'Memenuhi Standar'),
(32, 18, 'Dyo Akbar Maulana', 1, 2, '3.3333', '3.0000', '0.4667', '0.2667', '0.4253', 'Memenuhi Standar'),
(33, 18, 'Dyo Akbar Maulana', 1, 3, '2.6667', '3.6667', '0.4400', '0.3600', '0.5492', 'Memenuhi Standar'),
(34, 19, 'Ahmad Ali Akbar', 1, 1, '2.3333', '4.6667', '0.4667', '0.4667', '0.5182', 'Memenuhi Standar'),
(35, 19, 'Ahmad Ali Akbar', 1, 2, '3.3333', '2.0000', '0.5867', '0.3200', '0.5528', 'Memenuhi Standar'),
(36, 19, 'Ahmad Ali Akbar', 1, 3, '2.6667', '3.3333', '0.4800', '0.3600', '0.5778', 'Memenuhi Standar'),
(37, 20, 'Novalino Ricsawan', 1, 1, '2.3333', '2.6667', '0.7067', '0.4667', '0.7139', 'Memenuhi Standar'),
(38, 20, 'Novalino Ricsawan', 1, 2, '3.6667', '3.3333', '0.3600', '0.2000', '0.2933', 'Memenuhi Standar'),
(39, 20, 'Novalino Ricsawan', 1, 3, '4.0000', '3.0000', '0.2800', '0.1600', '0.2497', 'Memenuhi Standar'),
(40, 21, 'Muhammad Achmad Ramadhani', 1, 1, '3.0000', '2.3333', '0.6134', '0.3334', '0.4712', 'Memenuhi Standar'),
(41, 21, 'Muhammad Achmad Ramadhani', 1, 2, '3.3333', '3.3333', '0.4267', '0.2667', '0.3999', 'Memenuhi Standar'),
(42, 21, 'Muhammad Achmad Ramadhani', 1, 3, '4.0000', '2.3333', '0.3600', '0.2400', '0.3810', 'Memenuhi Standar'),
(43, 22, 'Akbar Wahyu Bagaskara', 1, 1, '1.6667', '2.6667', '0.8400', '0.6000', '0.9892', 'Memenuhi Standar'),
(44, 22, 'Akbar Wahyu Bagaskara', 1, 2, '2.3333', '1.3333', '0.8667', '0.4667', '0.8718', 'Memenuhi Standar'),
(45, 22, 'Akbar Wahyu Bagaskara', 1, 3, '4.0000', '3.0000', '0.2800', '0.1600', '0.2497', 'Memenuhi Standar'),
(46, 23, 'Tahta Maulana Ishaq', 1, 1, '2.0000', '4.3333', '0.5733', '0.5333', '0.6884', 'Memenuhi Standar'),
(47, 23, 'Tahta Maulana Ishaq', 1, 2, '3.0000', '2.0000', '0.6534', '0.3334', '0.6081', 'Memenuhi Standar'),
(48, 23, 'Tahta Maulana Ishaq', 1, 3, '3.3333', '2.6667', '0.4400', '0.2400', '0.4381', 'Memenuhi Standar'),
(49, 24, 'David Setyoadi Wicaksono', 1, 1, '4.6667', '2.6667', '0.2400', '0.2400', '0.0500', 'Memenuhi Standar'),
(50, 24, 'David Setyoadi Wicaksono', 1, 2, '3.0000', '3.6667', '0.4534', '0.3334', '0.4810', 'Memenuhi Standar'),
(51, 24, 'David Setyoadi Wicaksono', 1, 3, '4.0000', '1.3333', '0.4800', '0.3600', '0.5778', 'Memenuhi Standar'),
(52, 25, 'Leonardo Jimmy Putra', 1, 1, '2.6667', '2.0000', '0.7200', '0.4000', '0.6413', 'Memenuhi Standar'),
(53, 25, 'Leonardo Jimmy Putra', 1, 2, '2.6667', '4.3333', '0.4400', '0.4000', '0.5365', 'Memenuhi Standar'),
(54, 25, 'Leonardo Jimmy Putra', 1, 3, '3.0000', '3.6667', '0.3800', '0.3000', '0.4508', 'Memenuhi Standar'),
(55, 26, 'Javier Rizky Ramadhan', 1, 1, '2.3333', '3.0000', '0.6667', '0.4667', '0.6812', 'Memenuhi Standar'),
(56, 26, 'Javier Rizky Ramadhan', 1, 2, '1.6667', '3.3333', '0.7600', '0.6000', '0.9322', 'Memenuhi Standar'),
(57, 26, 'Javier Rizky Ramadhan', 1, 3, '4.6667', '2.3333', '0.2400', '0.2400', '0.2952', 'Memenuhi Standar'),
(58, 27, 'Galih Shacha Rakasiwi', 1, 1, '3.3333', '2.0000', '0.5867', '0.3200', '0.4327', 'Memenuhi Standar'),
(59, 27, 'Galih Shacha Rakasiwi', 1, 2, '2.6667', '4.0000', '0.4800', '0.4000', '0.5619', 'Memenuhi Standar'),
(60, 27, 'Galih Shacha Rakasiwi', 1, 3, '4.0000', '2.0000', '0.4000', '0.2800', '0.4466', 'Memenuhi Standar'),
(61, 28, 'Mochamad Fatha Chofyan', 1, 1, '2.6667', '2.6667', '0.6400', '0.4000', '0.5761', 'Memenuhi Standar'),
(62, 28, 'Mochamad Fatha Chofyan', 1, 2, '4.0000', '2.6667', '0.3733', '0.2400', '0.3403', 'Memenuhi Standar'),
(63, 28, 'Mochamad Fatha Chofyan', 1, 3, '4.6667', '3.6667', '0.0800', '0.0800', '0.0328', 'Memenuhi Standar'),
(64, 29, 'Raffa Agoes Saputro', 1, 1, '3.3333', '1.6667', '0.6267', '0.3600', '0.5153', 'Memenuhi Standar'),
(65, 29, 'Raffa Agoes Saputro', 1, 2, '3.0000', '1.6667', '0.6934', '0.3600', '0.6591', 'Memenuhi Standar'),
(66, 29, 'Raffa Agoes Saputro', 1, 3, '3.6667', '2.6667', '0.3800', '0.2000', '0.3582', 'Memenuhi Standar'),
(67, 30, 'Raditra Galih Agung Gitayasa', 1, 1, '2.6667', '1.3333', '0.8000', '0.4000', '0.7065', 'Memenuhi Standar'),
(68, 30, 'Raditra Galih Agung Gitayasa', 1, 2, '1.6667', '2.6667', '0.8400', '0.6000', '0.9830', 'Memenuhi Standar'),
(69, 30, 'Raditra Galih Agung Gitayasa', 1, 3, '2.6667', '1.6667', '0.6800', '0.3600', '0.7206', 'Memenuhi Standar'),
(70, 31, 'Elhadji Diva Asmoro', 1, 1, '3.3333', '4.3333', '0.3067', '0.2667', '0.1378', 'Memenuhi Standar'),
(71, 31, 'Elhadji Diva Asmoro', 1, 2, '4.3333', '2.6667', '0.3067', '0.2400', '0.2979', 'Memenuhi Standar'),
(72, 31, 'Elhadji Diva Asmoro', 1, 3, '3.3333', '2.0000', '0.5200', '0.2800', '0.5323', 'Memenuhi Standar'),
(73, 32, 'Rizki Rahmat', 1, 1, '4.0000', '2.3333', '0.4133', '0.2800', '0.2413', 'Memenuhi Standar'),
(74, 32, 'Rizki Rahmat', 1, 2, '2.0000', '4.0000', '0.6133', '0.5333', '0.7748', 'Memenuhi Standar'),
(75, 32, 'Rizki Rahmat', 1, 3, '2.6667', '2.6667', '0.5600', '0.3600', '0.6349', 'Memenuhi Standar'),
(76, 33, 'Dheo Santoso', 1, 1, '1.6667', '3.0000', '0.8000', '0.6000', '0.9565', 'Memenuhi Standar'),
(77, 33, 'Dheo Santoso', 1, 2, '3.3333', '4.0000', '0.3467', '0.2667', '0.3490', 'Memenuhi Standar'),
(78, 33, 'Dheo Santoso', 1, 3, '2.6667', '4.0000', '0.4000', '0.3600', '0.5206', 'Memenuhi Standar'),
(79, 34, 'Muhammad Hafidz Darmawan', 1, 1, '3.0000', '3.3333', '0.4934', '0.3334', '0.3733', 'Memenuhi Standar'),
(80, 34, 'Muhammad Hafidz Darmawan', 1, 2, '1.6667', '3.6667', '0.7200', '0.6000', '0.9068', 'Memenuhi Standar'),
(81, 34, 'Muhammad Hafidz Darmawan', 1, 3, '4.0000', '2.0000', '0.4000', '0.2800', '0.4466', 'Memenuhi Standar'),
(82, 35, 'Ganang Ade Wijaya', 1, 1, '2.3333', '3.0000', '0.6667', '0.4667', '0.6812', 'Memenuhi Standar'),
(83, 35, 'Ganang Ade Wijaya', 1, 2, '3.3333', '3.6667', '0.3867', '0.2667', '0.3744', 'Memenuhi Standar'),
(84, 35, 'Ganang Ade Wijaya', 1, 3, '3.3333', '3.3333', '0.3600', '0.2400', '0.3810', 'Memenuhi Standar'),
(85, 36, 'Erza Zein Rusnandar', 1, 1, '2.0000', '2.0000', '0.8533', '0.5333', '0.9166', 'Memenuhi Standar'),
(86, 36, 'Erza Zein Rusnandar', 1, 2, '2.6667', '3.3333', '0.5600', '0.4000', '0.6128', 'Memenuhi Standar'),
(87, 36, 'Erza Zein Rusnandar', 1, 3, '2.6667', '1.6667', '0.6800', '0.3600', '0.7206', 'Memenuhi Standar'),
(88, 37, 'Muhammad Rafel Alfarizal', 1, 1, '3.3333', '4.3333', '0.3067', '0.2667', '0.1378', 'Memenuhi Standar'),
(89, 37, 'Muhammad Rafel Alfarizal', 1, 2, '2.6667', '4.6667', '0.4000', '0.4000', '0.5111', 'Memenuhi Standar'),
(90, 37, 'Muhammad Rafel Alfarizal', 1, 3, '1.3333', '3.0000', '0.7600', '0.6000', '1.0000', 'Memenuhi Standar'),
(91, 38, 'Dimas Aryo Sudariko', 1, 1, '3.0000', '2.3333', '0.6134', '0.3334', '0.4712', 'Memenuhi Standar'),
(92, 38, 'Dimas Aryo Sudariko', 1, 2, '3.3333', '2.6667', '0.5067', '0.2667', '0.4507', 'Memenuhi Standar'),
(93, 38, 'Dimas Aryo Sudariko', 1, 3, '3.3333', '2.3333', '0.4800', '0.2400', '0.4667', 'Memenuhi Standar'),
(94, 39, 'Raka Dwi Purnama', 1, 1, '3.6667', '2.3333', '0.4800', '0.2800', '0.2957', 'Memenuhi Standar'),
(95, 39, 'Raka Dwi Purnama', 1, 2, '3.0000', '4.0000', '0.4134', '0.3334', '0.4556', 'Memenuhi Standar'),
(96, 39, 'Raka Dwi Purnama', 1, 3, '4.6667', '1.6667', '0.3200', '0.3200', '0.4265', 'Memenuhi Standar');

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
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD PRIMARY KEY (`id_konversi`),
  ADD KEY `fk_id_bobot_seleksi_2` (`id_bobot_tes`);

--
-- Indexes for table `list_peserta`
--
ALTER TABLE `list_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `fk_id_akun_peserta` (`id_akun`),
  ADD KEY `fk_id_seleksi_peserta` (`id_seleksi`);

--
-- Indexes for table `list_seleksi`
--
ALTER TABLE `list_seleksi`
  ADD PRIMARY KEY (`id_seleksi`);

--
-- Indexes for table `nilai_per_tes`
--
ALTER TABLE `nilai_per_tes`
  ADD PRIMARY KEY (`id_nilai_tes`),
  ADD KEY `fk_id_akun_nilai_tes` (`id_akun`),
  ADD KEY `fk_id_seleksi` (`id_seleksi`),
  ADD KEY `fk_id_bobot_sub_tes_per_tes` (`id_bobot_sub_tes`),
  ADD KEY `fk_id_bobot_tes_per_tes` (`id_bobot_tes`);

--
-- Indexes for table `nilai_standar`
--
ALTER TABLE `nilai_standar`
  ADD PRIMARY KEY (`id_nilai_standar`),
  ADD KEY `fk_id_bobot_tes_standar` (`id_bobot_tes`);

--
-- Indexes for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_id_akun_nilai_tes2` (`id_akun`),
  ADD KEY `fk_id_seleksi_tes` (`id_seleksi`),
  ADD KEY `fk_id_bobot_nilai_tes` (`id_bobot_tes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `bobot_sub_tes`
--
ALTER TABLE `bobot_sub_tes`
  MODIFY `id_bobot_sub_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bobot_tes`
--
ALTER TABLE `bobot_tes`
  MODIFY `id_bobot_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konversi`
--
ALTER TABLE `konversi`
  MODIFY `id_konversi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `list_peserta`
--
ALTER TABLE `list_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `list_seleksi`
--
ALTER TABLE `list_seleksi`
  MODIFY `id_seleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_per_tes`
--
ALTER TABLE `nilai_per_tes`
  MODIFY `id_nilai_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=737;

--
-- AUTO_INCREMENT for table `nilai_standar`
--
ALTER TABLE `nilai_standar`
  MODIFY `id_nilai_standar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot_sub_tes`
--
ALTER TABLE `bobot_sub_tes`
  ADD CONSTRAINT `fk_id_bobot_tes` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konversi`
--
ALTER TABLE `konversi`
  ADD CONSTRAINT `fk_id_bobot_seleksi_2` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_peserta`
--
ALTER TABLE `list_peserta`
  ADD CONSTRAINT `fk_id_akun_peserta` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_seleksi_peserta` FOREIGN KEY (`id_seleksi`) REFERENCES `list_seleksi` (`id_seleksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_per_tes`
--
ALTER TABLE `nilai_per_tes`
  ADD CONSTRAINT `fk_id_akun_nilai_tes` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_bobot_sub_tes_per_tes` FOREIGN KEY (`id_bobot_sub_tes`) REFERENCES `bobot_sub_tes` (`id_bobot_sub_tes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_bobot_tes_per_tes` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_seleksi` FOREIGN KEY (`id_seleksi`) REFERENCES `list_seleksi` (`id_seleksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_standar`
--
ALTER TABLE `nilai_standar`
  ADD CONSTRAINT `fk_id_bobot_tes_standar` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD CONSTRAINT `fk_id_akun_nilai_tes2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_bobot_nilai_tes` FOREIGN KEY (`id_bobot_tes`) REFERENCES `bobot_tes` (`id_bobot_tes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_seleksi_tes` FOREIGN KEY (`id_seleksi`) REFERENCES `list_seleksi` (`id_seleksi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
