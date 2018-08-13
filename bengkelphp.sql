-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 04:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkelphp`
--
CREATE DATABASE IF NOT EXISTS `bengkelphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bengkelphp`;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `IDPelajar` int(11) NOT NULL,
  `NamaPel` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`IDPelajar`, `NamaPel`, `Alamat`) VALUES
(1, 'Khirulnizam Abd Rahman', 'JSK FSTM, KUIS'),
(2, 'Ali Ahmad', 'Bandar Seri Putra'),
(3, 'Ali Jinnah Al-Yamaani', 'Batu Tiga, Shah Alam'),
(4, 'Ali Abu', 'Politeknik Shah Alam'),
(10, 'kerul', 'abc'),
(11, 'kerul', 'abc'),
(12, 'Ahmad bin Ali', 'Puchong Selangor');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `namapengguna` varchar(20) NOT NULL,
  `katalaluan` varchar(255) NOT NULL,
  `namapenuh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `namapengguna`, `katalaluan`, `namapenuh`) VALUES
(3, 'abc', 'abc', 'abc'),
(2, 'ali', '984d8144fa08bfc637d2825463e184fa', 'Ali Ahmad'),
(1, 'kerul', 'e99a18c428cb38d5f260853678922e03', 'Khirulnizam Abd Rahman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`IDPelajar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`namapengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `IDPelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
