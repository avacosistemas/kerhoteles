# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2019-11-27 17:29:07
# Generator: MySQL-Front 6.0  (Build 1.51)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "menues"
#

DROP TABLE IF EXISTS `menues`;
CREATE TABLE `menues` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `menu_ejecutivo` varchar(255) DEFAULT NULL,
  `menu_halo_bar` varchar(255) DEFAULT NULL,
  `menu_tragos` varchar(255) DEFAULT NULL,
  `menu_cafeteria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "menues"
#

