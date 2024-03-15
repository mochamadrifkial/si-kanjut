-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 04:26 AM
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
-- Database: `sts_abi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(10) NOT NULL,
  `kode_brg` varchar(255) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_login` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `tgl_kembali`, `no_identitas`, `kode_barang`, `jumlah`, `keperluan`, `status`, `id_login`) VALUES
(1, '2024-03-14 00:00:00', '2024-03-15 00:00:00', '1', '23', 5, 'Belajar', 'Peminjam', 23445),
(2, '2024-03-16 08:27:27', '2024-03-17 08:27:27', '2', '25', 4, 'Bekerja', 'Peminjam', 344654);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
