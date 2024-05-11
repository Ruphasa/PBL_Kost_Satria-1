-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 02:33 PM
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
  `kode_tanggungan` int NOT NULL,
  `tipe_tanggungan` varchar(10) DEFAULT NULL,
  `kode_transaksi` int(11) DEFAULT NULL,
  `no_kamar` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bayartanggungan`
--

INSERT INTO `bayartanggungan` (`kode_tanggungan`, `tipe_tanggungan`, `kode_transaksi`, `no_kamar`) VALUES
('01', 'Listrik', '01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int NOT NULL,
  `tipe_kamar` enum('VIP','VIP Non AC','Standar') DEFAULT NULL,
  `lantai_kamar` enum('1','2','3') DEFAULT NULL,
  `harga_kamar` int DEFAULT NULL,
  `alamat_kamar` varchar(100) DEFAULT NULL,
  `KTP_pembantu` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `tipe_kamar`, `lantai_kamar`, `harga_kamar`, `alamat_kamar`, `KTP_pembantu`) VALUES
(3, 'VIP', '1', 1500000, 'Kost Satria 1', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `menyewa`
--

CREATE TABLE `menyewa` (
  `kode_transaksi` int DEFAULT NULL,
  `no_kamar` int(30) DEFAULT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  `tanggalkeluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menyewa`
--

INSERT INTO `menyewa` (`kode_transaksi`, `no_kamar`, `tanggalmasuk`, `tanggalkeluar`) VALUES
('01', 3, '2024-05-01', '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `pembantu`
--

CREATE TABLE `pembantu` (
  `KTP_pembantu` char(16) NOT NULL,
  `alamat_kos` varchar(100) DEFAULT NULL,
  `no_hp_pembantu` varchar(15) DEFAULT NULL,
  `nama_pembantu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembantu`
--

INSERT INTO `pembantu` (`KTP_pembantu`, `alamat_kos`, `no_hp_pembantu`, `nama_pembantu`) VALUES
('987654321', 'Kost Satria 1', '08213445543', 'Joko');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `KTP_Penyewa` char(16) NOT NULL,
  `nama_penyewa` varchar(50) DEFAULT NULL,
  `alamat_penyewa` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `no_hp_penyewa` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`KTP_Penyewa`, `nama_penyewa`, `alamat_penyewa`, `jenis_kelamin`, `no_hp_penyewa`) VALUES
('123456789', 'Muhammad Ammar Hafizh', 'Pabuaran Indah Blok Cibinong, Bogor', 'Laki-Laki', '082155667732');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int NOT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `KTP_Penyewa` char(16) DEFAULT NULL,
  `KTP_pembantu` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `quantity`, `KTP_Penyewa`, `KTP_pembantu`) VALUES
('01', '1', '123456789', '987654321');

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
