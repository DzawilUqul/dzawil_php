-- Adminer 4.8.1 MySQL 5.5.5-10.5.8-MariaDB-1:10.5.8+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `uts_finance` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `uts_finance`;

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(11) DEFAULT 0,
  `kategori` varchar(15) NOT NULL DEFAULT 'pengeluaran',
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaksi` (`id`, `nama`, `jumlah`, `kategori`, `keterangan`) VALUES
(1,	'Makan siang warteg',	20000,	'pengeluaran',	'Makan siang di warteg enak'),
(2,	'Belanja bulanan',	150000,	'pengeluaran',	'Beli peralatan mandi'),
(3,	'HotWheels Lamborgini',	25000,	'pengeluaran',	NULL),
(4,	'Gaji Bulanan',	3500000,	'pemasukan',	''),
(5,	'Bonus proyek',	1000000,	'pemasukan',	'Proyek website'),
(6,	'Makan siang WS',	30000,	'pengeluaran',	NULL);

-- 2023-04-21 07:28:38
