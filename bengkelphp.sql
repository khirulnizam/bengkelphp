-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bengkelphp
CREATE DATABASE IF NOT EXISTS `bengkelphp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bengkelphp`;

-- Dumping structure for table bengkelphp.gelanggang
CREATE TABLE IF NOT EXISTS `gelanggang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namagelanggang` varchar(50) NOT NULL DEFAULT '',
  `imej` varchar(200) NOT NULL DEFAULT '',
  `jenisukan` varchar(200) NOT NULL DEFAULT '',
  `idpetugas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table bengkelphp.gelanggang: ~6 rows (approximately)
/*!40000 ALTER TABLE `gelanggang` DISABLE KEYS */;
INSERT INTO `gelanggang` (`id`, `namagelanggang`, `imej`, `jenisukan`, `idpetugas`) VALUES
	(1, 'BolaA', '', 'bolasepak', 0),
	(2, 'BolaB', '', 'bolasepak', 0),
	(3, 'BadA', '', 'badminton', 0),
	(4, 'BadB', '', 'badminton', 0),
	(5, 'FutA', '', 'futsal', 0),
	(6, 'FutB', '', 'futsal', 0),
	(7, 'BK1', '', 'bola keranjang', 0),
	(8, 'BT1', '', 'bola tampar', 0),
	(9, 'BT2', '', 'bola tampar', 0);
/*!40000 ALTER TABLE `gelanggang` ENABLE KEYS */;

-- Dumping structure for table bengkelphp.pelajar
CREATE TABLE IF NOT EXISTS `pelajar` (
  `IDPelajar` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPel` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`IDPelajar`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table bengkelphp.pelajar: ~7 rows (approximately)
/*!40000 ALTER TABLE `pelajar` DISABLE KEYS */;
INSERT INTO `pelajar` (`IDPelajar`, `NamaPel`, `Alamat`) VALUES
	(1, 'Khirulnizam bin Abd Rahman rtrtrtrtrtrtrtr', 'JSK FSTM, KUIS, Bangi Selangor'),
	(2, 'Ali Ahmad', 'Bandar Seri Putra'),
	(3, 'Ali Jinnah Al-Yamaani', 'Batu Tiga, Shah Alam'),
	(4, 'Ali Abu', 'Politeknik Shah Alam'),
	(10, 'kerul', 'abc'),
	(12, 'Ahmad bin Ali', 'Puchong Selangor');
/*!40000 ALTER TABLE `pelajar` ENABLE KEYS */;

-- Dumping structure for table bengkelphp.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `namapengguna` varchar(20) NOT NULL,
  `katalaluan` varchar(255) NOT NULL,
  `namapenuh` varchar(100) NOT NULL,
  PRIMARY KEY (`namapengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bengkelphp.pengguna: ~5 rows (approximately)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`id`, `namapengguna`, `katalaluan`, `namapenuh`) VALUES
	(3, 'abc', 'e19d5cd5af0378da05f63f891c7467af', 'abc'),
	(4, 'admin', '0192023a7bbd73250516f069df18b500', 'Abam Min'),
	(2, 'ali', '984d8144fa08bfc637d2825463e184fa', 'Ali Ahmad'),
	(5, 'aminah', 'a531e7e035240addd10db9ff18656bc4', 'Aminah Wahab'),
	(1, 'kerul', 'e99a18c428cb38d5f260853678922e03', 'Khirulnizam Abd Rahman'),
	(6, 'kn', '63202e0f4a126c15d8e810307ab7bee1', 'Khirul Nizam');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

-- Dumping structure for table bengkelphp.tempahan
CREATE TABLE IF NOT EXISTS `tempahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namapelanggan` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL,
  `idgelanggang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table bengkelphp.tempahan: ~4 rows (approximately)
/*!40000 ALTER TABLE `tempahan` DISABLE KEYS */;
INSERT INTO `tempahan` (`id`, `namapelanggan`, `telefon`, `tarikh`, `idadmin`, `idgelanggang`) VALUES
	(2, 'Ali Baihaqi', '012345678', '2021-02-24', NULL, 'BadA'),
	(3, 'Aminah Hasan', '0133445566', '2021-02-22', NULL, 'BolaA'),
	(4, 'Jamal Hassan', '01411221122', '2021-02-26', NULL, 'FutA'),
	(5, 'Jalaluddin Hassan', '0133445566', '2021-02-21', NULL, 'FutA'),
	(6, 'Nasuha Ahmad', '013112345', '2021-02-04', NULL, 'BK1');
/*!40000 ALTER TABLE `tempahan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
