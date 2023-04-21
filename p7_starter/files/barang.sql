-- Adminer 4.8.1 MySQL 5.5.5-10.5.8-MariaDB-1:10.5.8+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `toko` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `toko`;

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2023-04-11 04:30:12
