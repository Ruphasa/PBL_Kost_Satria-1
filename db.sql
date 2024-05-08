-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:35 AM
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

--
-- Dumping data for table `bayartanggungan`
--

INSERT INTO `bayartanggungan` (`kode_tanggungan`, `tipe`, `kode_transaksi`, `no_kamar`) VALUES
('1', 'Listrik', NULL, NULL);

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

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `tipe`, `lantai`, `harga`, `alamat`, `KTP_pembantu`) VALUES
(3, 'VIP', '1', 1500000, 'Kost Satria 1', NULL);

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

--
-- Dumping data for table `pembantu`
--

INSERT INTO `pembantu` (`KTP_pembantu`, `alamat_kos`, `no_hp`) VALUES
('987654321123456', 'Kost Satria 1', '0812345674');

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

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`KTP_Penyewa`, `Nama`, `alamat`, `Jenis_kelamin`) VALUES
('123456789876543', 'Muhammad Ammar Hafizh', 'Pabuaran Indah, Cibinong, Bogor', 'Laki-Laki');

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
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `quantity`, `KTP_Penyewa`, `KTP_pembantu`) VALUES
('1', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayartanggungan`
--
ALTER TABLE `bayartanggungan`
  ADD PRIMARY KEY (`kode_tanggungan`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

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
  ADD PRIMARY KEY (`kode_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
