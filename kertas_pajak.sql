-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.17 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table kertas_pajak.b_1_1
CREATE TABLE IF NOT EXISTS `b_1_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pajak` varchar(4) DEFAULT NULL,
  `bulan_pajak` int(11) DEFAULT NULL,
  `n_spt` double DEFAULT NULL,
  `n_pemeriksa` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table kertas_pajak.b_2
CREATE TABLE IF NOT EXISTS `b_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pajak` varchar(4) DEFAULT NULL,
  `b_2_1_spt` double DEFAULT NULL,
  `b_2_1_pem` double DEFAULT NULL,
  `b_2_2_spt` double DEFAULT NULL,
  `b_2_2_pem` double DEFAULT NULL,
  `b_2_3_spt` double DEFAULT NULL,
  `b_2_3_pem` double DEFAULT NULL,
  `b_2_4_spt` double DEFAULT NULL,
  `b_2_4_pem` double DEFAULT NULL,
  `b_2_5_spt` double DEFAULT NULL,
  `b_2_5_pem` double DEFAULT NULL,
  `b_2_6_spt` double DEFAULT NULL,
  `b_2_6_pem` double DEFAULT NULL,
  `b_2_7_spt` double DEFAULT NULL,
  `b_2_7_pem` double DEFAULT NULL,
  `b_total_1_spt` double DEFAULT NULL,
  `b_total_1_pem` double DEFAULT NULL,
  `b_total_2_spt` double DEFAULT NULL,
  `b_total_2_pem` double DEFAULT NULL,
  `b_total_3_spt` double DEFAULT NULL,
  `b_total_3_pem` double DEFAULT NULL,
  `b_total_4_spt` double DEFAULT NULL,
  `b_total_4_pem` double DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `tgl_edit` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
