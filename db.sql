-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satria1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayartanggungan`
--

CREATE TABLE `bayartanggungan` (
  `kode_tanggungan` varchar(30) NOT NULL,
  `tipe` varchar(10) DEFAULT NULL,
  `kode_transaksi` varchar(30) DEFAULT NULL,
  `no_kamar` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int(30) NOT NULL,
  `tipe` enum('VIP','VIP Non AC','Standar') DEFAULT NULL,
  `lantai` enum('1','2','3') DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `KTP_pembantu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menyewa`
--

CREATE TABLE `menyewa` (
  `kode_transaksi` varchar(30) DEFAULT NULL,
  `no_kamar` int(30) DEFAULT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  `tanggalkeluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembantu`
--

CREATE TABLE `pembantu` (
  `KTP_pembantu` varchar(15) NOT NULL,
  `alamat_kos` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `KTP_Penyewa` varchar(15) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `Jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(30) NOT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `KTP_Penyewa` varchar(15) DEFAULT NULL,
  `KTP_pembantu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayartanggungan`
--
ALTER TABLE `bayartanggungan`
  ADD PRIMARY KEY (`kode_tanggungan`),
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `KTP_pembantu` (`KTP_pembantu`);

--
-- Indexes for table `menyewa`
--
ALTER TABLE `menyewa`
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `pembantu`
--
ALTER TABLE `pembantu`
  ADD PRIMARY KEY (`KTP_pembantu`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`KTP_Penyewa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `KTP_Penyewa` (`KTP_Penyewa`),
  ADD KEY `KTP_pembantu` (`KTP_pembantu`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayartanggungan`
--
ALTER TABLE `bayartanggungan`
  ADD CONSTRAINT `bayartanggungan_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`),
  ADD CONSTRAINT `bayartanggungan_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`KTP_pembantu`) REFERENCES `pembantu` (`KTP_pembantu`);

--
-- Constraints for table `menyewa`
--
ALTER TABLE `menyewa`
  ADD CONSTRAINT `menyewa_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`),
  ADD CONSTRAINT `menyewa_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`KTP_Penyewa`) REFERENCES `penyewa` (`KTP_Penyewa`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`KTP_pembantu`) REFERENCES `pembantu` (`KTP_pembantu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
