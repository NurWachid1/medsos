-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 07:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_ukk2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_dispo` varchar(10) NOT NULL,
  `id_srt` varchar(20) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `dispo_kpd` varchar(20) DEFAULT NULL,
  `balas_kpd` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `notifikasi` varchar(40) DEFAULT NULL,
  `klasifikasi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_dispo`, `id_srt`, `id_user`, `dispo_kpd`, `balas_kpd`, `deskripsi`, `notifikasi`, `klasifikasi`) VALUES
('S003', 'S001', 'U002', 'ISHAK,S.pd', 'humas', '                ', 'Tindak Lanjuti', 'Segera');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_srt` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `id_tipe_srt` varchar(20) DEFAULT NULL,
  `pengirim_srt` varchar(20) DEFAULT NULL,
  `kode_srt` varchar(100) DEFAULT NULL,
  `tgl_srt` varchar(20) DEFAULT NULL,
  `distansi_srt` varchar(20) DEFAULT NULL,
  `tujuan_srt` varchar(20) DEFAULT NULL,
  `subjek_srt` varchar(20) DEFAULT NULL,
  `deskripsi_srt` varchar(1000) DEFAULT NULL,
  `file_srt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_srt`, `id_user`, `id_tipe_srt`, `pengirim_srt`, `kode_srt`, `tgl_srt`, `distansi_srt`, `tujuan_srt`, `subjek_srt`, `deskripsi_srt`, `file_srt`) VALUES
('S001', 'U002', 'T001', '', '', '2018-02-15', '', '', '', '                               ', ''),
('S002', 'U002', 'T001', '', '', '2018-02-15', '', '', '', '                               ', ''),
('S003', 'U001', 'T001', 'nk', 'klj', '2018-02-15', 'jlkj', 'ljlk', 'jl', 'jl                               ', ''),
('S004', 'U001', 'T002', 'b', 'hbh', '2018-02-15', 'bhb', 'hb', 'hbhj', 'hjhh                               ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_surat`
--

CREATE TABLE `tb_tipe_surat` (
  `id_tipe_srt` varchar(20) NOT NULL,
  `tipe_srt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe_surat`
--

INSERT INTO `tb_tipe_surat` (`id_tipe_srt`, `tipe_srt`) VALUES
('T001', 'Surat Masuk'),
('T002', 'Surat Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gambar` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `fullname`, `email`, `alamat`, `phone`, `gambar`, `level`) VALUES
('U001', 'sumin', 'sumin', 'Yusman Y', 'YusmanYulianto@gmail.com', 'Pasongsongan Kab Sumenep', '+628245556277', 'Screenshot (24).png', 'superadmin'),
('U002', 'admin', 'admin', 'admin', 'Smkn@info.com', 'SMKN 1 Sumenep', '087850122345', NULL, 'admin'),
('U003', 'humas', 'humas', 'Moh Ainur C', 'humas@gmail.com', 'sumber bening', '0878502121', NULL, 'humas'),
('U004', 'tu', 'tu', 'Ananda Surya', 'Ananda@gmail.com', 'Tana Raja Manding', '08785012234', '848c1437-ef65-42a0-9', 'tu'),
('U005', 'kesiswaan', 'kesiswaan', 'Purnomo Panunggung', 'Keswan@gmail.com', 'Lenteng', '08785098990', NULL, 'kesiswaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id_dispo`),
  ADD KEY `FK_RELATIONSHIP_3` (`id_user`),
  ADD KEY `FK_RELATIONSHIP_4` (`id_srt`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_srt`),
  ADD KEY `FK_RELATIONSHIP_1` (`id_tipe_srt`),
  ADD KEY `FK_RELATIONSHIP_2` (`id_user`);

--
-- Indexes for table `tb_tipe_surat`
--
ALTER TABLE `tb_tipe_surat`
  ADD PRIMARY KEY (`id_tipe_srt`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`id_srt`) REFERENCES `tb_surat` (`id_srt`);

--
-- Constraints for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`id_tipe_srt`) REFERENCES `tb_tipe_surat` (`id_tipe_srt`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
