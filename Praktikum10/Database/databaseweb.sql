-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.5.9-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for databaseweb
CREATE DATABASE IF NOT EXISTS `databaseweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `databaseweb`;

-- Dumping structure for table databaseweb.register
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL,
  `pasword` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `levell` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table databaseweb.register: ~3 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`username`, `pasword`, `namalengkap`, `email`, `levell`) VALUES
	('', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
	('faiz', '202cb962ac59075b964b07152d234b70', 'faiz@gmail.com', 'Faiz Farros', 'admin'),
	('faiz21', '202cb962ac59075b964b07152d234b70', 'faiz@gmail.com', 'Faiz', 'mahasiswa'),
	('fuad', '202cb962ac59075b964b07152d234b70', 'fuad@gmail.com', 'Fuad', 'pengguna');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Dumping structure for table databaseweb.table_admin
CREATE TABLE IF NOT EXISTS `table_admin` (
  `kode_brg` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(50) DEFAULT NULL,
  `stok_brg` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table databaseweb.table_admin: ~4 rows (approximately)
/*!40000 ALTER TABLE `table_admin` DISABLE KEYS */;
INSERT INTO `table_admin` (`kode_brg`, `nama_brg`, `stok_brg`) VALUES
	(1, 'Laptop', 20),
	(2, 'Monitor', 25),
	(3, 'Television', 15),
	(4, 'Mouse', 30);
/*!40000 ALTER TABLE `table_admin` ENABLE KEYS */;

-- Dumping structure for table databaseweb.table_pembeli
CREATE TABLE IF NOT EXISTS `table_pembeli` (
  `kode_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `kode_brg` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_pembelian`),
  KEY `FK_table_pembeli_table_admin` (`kode_brg`),
  CONSTRAINT `FK_table_pembeli_table_admin` FOREIGN KEY (`kode_brg`) REFERENCES `table_admin` (`kode_brg`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table databaseweb.table_pembeli: ~0 rows (approximately)
/*!40000 ALTER TABLE `table_pembeli` DISABLE KEYS */;
INSERT INTO `table_pembeli` (`kode_pembelian`, `kode_brg`, `jumlah`) VALUES
	(1, 1, 5);
/*!40000 ALTER TABLE `table_pembeli` ENABLE KEYS */;

-- Dumping structure for table databaseweb.table_penjual
CREATE TABLE IF NOT EXISTS `table_penjual` (
  `kode_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_brg` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_penjualan`),
  KEY `FK__table_admin` (`kode_brg`),
  CONSTRAINT `FK__table_admin` FOREIGN KEY (`kode_brg`) REFERENCES `table_admin` (`kode_brg`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table databaseweb.table_penjual: ~0 rows (approximately)
/*!40000 ALTER TABLE `table_penjual` DISABLE KEYS */;
INSERT INTO `table_penjual` (`kode_penjualan`, `kode_brg`, `jumlah`) VALUES
	(1, 3, 5);
/*!40000 ALTER TABLE `table_penjual` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
