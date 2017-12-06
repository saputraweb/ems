-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 11:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(8) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(1) NOT NULL,
  `riwayat` text NOT NULL,
  `malu` int(1) NOT NULL,
  `bersalah` int(1) NOT NULL,
  `merendah` int(1) NOT NULL,
  `menarik` int(1) NOT NULL,
  `percaya` int(1) NOT NULL,
  `menciderai` int(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `riwayat`, `malu`, `bersalah`, `merendah`, `menarik`, `percaya`, `menciderai`, `created_at`) VALUES
(1, 'Willy Ganjar Saputra', 'garut', '2017-11-07', 'L', 'Sakit', 0, 1, 0, 1, 0, 1, '2017-11-25 09:28:21'),
(2, 'Rina', 'Jakarta', '2017-11-21', 'P', 'sakit perut', 1, 1, 1, 1, 1, 1, '2017-11-25 09:54:08'),
(3, 'Rina', 'garut', '2017-11-14', 'P', 'aaaa', 1, 0, 1, 0, 1, 1, '2017-11-25 10:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
