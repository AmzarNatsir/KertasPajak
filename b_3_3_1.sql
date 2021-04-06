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

-- Dumping structure for table kertas_pajak.b_3
CREATE TABLE IF NOT EXISTS `b_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pajak` varchar(4) DEFAULT NULL,
  `perdis_spt` double DEFAULT NULL,
  `perdis_pem` double DEFAULT NULL,
  `pemeliharaan_gedung_alat_spt` double DEFAULT NULL,
  `pemeliharaan_gedung_alat_pem` double DEFAULT NULL,
  `telepon_teleks_spt` double DEFAULT NULL,
  `telepon_teleks_pem` double DEFAULT NULL,
  `beban_bank_spt` double DEFAULT NULL,
  `beban_bank_pem` double DEFAULT NULL,
  `pos_atk_spt` double DEFAULT NULL,
  `pos_atk_pem` double DEFAULT NULL,
  `seminat_latihan_spt` double DEFAULT NULL,
  `seminar_latihan_pem` double DEFAULT NULL,
  `penyusutan_spt` double DEFAULT NULL,
  `penyusutan_pem` double DEFAULT NULL,
  `listrik_air_spt` double DEFAULT NULL,
  `listrik_air_pem` double DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `tgl_edit` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Biaya Usaha Lainnya';

-- Data exporting was unselected.

-- Dumping structure for table kertas_pajak.b_3_1
CREATE TABLE IF NOT EXISTS `b_3_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pajak` varchar(4) DEFAULT NULL,
  `bulan_pajak` int(2) DEFAULT NULL,
  `n_spt` double DEFAULT NULL,
  `n_pemeriksa` double DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `tgl_edit` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Gaji dan Kesejahteraan Karyawan';

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
