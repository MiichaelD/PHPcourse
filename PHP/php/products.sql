-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2013 at 05:09 PM
-- Server version: 5.6.10
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1600 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`) VALUES
(953, 'Asphalt 5 HD+', 3),
(1036, 'Gameloft HD Games', 4),
(1044, 'Modern Combat: Sandstorm HD+', 4),
(1045, 'N.O.V.A. HD+', 4),
(1048, 'UNO HD+', 5),
(1049, 'Gangstar West Coast Hustle HD+', 4),
(1051, 'Dungeon Hunter HD+', 4),
(1052, 'Hero of Sparta HD+', 4),
(1053, 'Hawx HD+', 4),
(1055, '2010 Real Soccer HD+', 3),
(1069, 'GT Racing: Motor Academy HD+', 3),
(1081, 'Avatar HD+', 4),
(1096, 'Splinter Cell Conviction HD+', 4),
(1102, 'Asphalt 6: Adrenaline HD+', 3),
(1109, 'Fishing Kings HD+', 3),
(1120, 'Guitar Rock Tour 2 HD+', 5),
(1122, 'Real Golf 2011 HD+', 3),
(1128, 'Brothers In Arms 2 : Global Front HD+', 4),
(1141, 'Shrek Karting HD+', 3),
(1142, 'Spider-Man: Total Mayhem HD+', 4),
(1143, 'Oregon Trail HD+', 2),
(1144, '2011 Real Football HD+', 3),
(1145, 'The Settlers HD+', 2),
(1147, 'Modern Combat 2: Black Pegasus HD+', 4),
(1148, 'Gangstar: Miami Vindication HD+', 4),
(1164, '2011 Real Soccer HD+', 3),
(1187, 'Sacred Odyssey: The Rise of Ayden HD+', 2),
(1188, 'Star Front: Collision HD+', 2),
(1189, 'Rainbow 6: Shadow Vanguard HD+', 4),
(1195, 'Fast 5 HD+', 3),
(1196, 'Dungeon Hunter 2 HD+', 4),
(1197, 'N.O.V.A. 2 HD+', 4),
(1198, 'Eternal Legacy HD+', 2),
(1202, 'Dungeon Hunter 3 Free+', 4),
(1213, 'GT Racing: Motor Academy Free+', 3),
(1218, 'Shadow Guardian HD+', 4),
(1224, 'N.O.V.A. 3 Paymium HD+', 4),
(1226, 'Six Guns Free+', 4),
(1235, 'Backstab HD+', 2),
(1242, 'Fantasy Town Free+', 2),
(1245, '9mm Paymium HD+', 4),
(1256, 'Order & Chaos Paymium HD+', 4),
(1266, 'The Oregon Trail: American Settler Free+', 2),
(1267, 'Cosmic Colony  Free+', 4),
(1273, 'Gangstar Rio: City of Saints Paymium HD+', 4),
(1275, 'Modern Combat 3 Paymium HD+', 4),
(1279, 'Fashion Icon Free+', 5),
(1284, 'Spider-Man: Total Mayhem 3D HD+', 4),
(1286, 'Avatar 3D HD+', 4),
(1288, 'Fishing Kings 3D HD+', 3),
(1289, 'Shrek Karting 3D HD+', 3),
(1290, 'GT Racing: Motor Academy 3D HD+', 3),
(1291, 'Modern Combat 2: Black Pegasus 3D HD+', 4),
(1292, 'Dungeon Hunter 2 3D HD+', 4),
(1293, 'N.O.V.A. 2 3D HD+', 4),
(1294, 'Star Battalion 3D HD+', 4),
(1295, 'Backstab 3D HD+', 2),
(1296, 'Shadow Guardian 3D HD+', 4),
(1297, 'Eternal Legacy 3D HD+', 2),
(1298, 'Wild Blood Paymium HD+ Android', 4),
(1299, 'Asphalt 6: Adrenaline 3D HD+', 3),
(1301, 'N.O.V.A. 3D HD+', 4),
(1302, 'Block Breaker 3 Paymium HD+', 4),
(1304, 'Green Farm Mobile HD+ Free+', 5),
(1305, 'Asphalt 7: Heat Paymium HD+', 3),
(1308, 'Gameloft Live! 3D', 4),
(1309, '2011 Real Soccer 3D HD+', 3),
(1313, 'Brothers In Arms 2 : Global Front Free+', 4),
(1315, 'NFL Pro 2012 Free+', 3),
(1328, 'Men In Black 3 Free+', 4),
(1351, 'Order & Chaos Paymium 3D HD+', 4),
(1358, 'The adventures of TINTIN: The Secret of the Unicorn HD+', 2),
(1359, 'Zombiewood Free+', 4),
(1367, 'Littlest Pet Shop Free+', 4),
(1370, 'My little Pony Free+', 1),
(1371, 'Kingdoms & Lords Free+', 4),
(1373, 'Shark Dash Paymium HD+', 4),
(1374, 'Heroes of Order and Chaos Free+', 4),
(1376, 'World At Arms Free+', 4),
(1379, 'Block Breaker 3 Free+', 1),
(1387, 'Splinter Cell Conviction 3D HD+', 4),
(1388, 'Asphalt 6: Adrenaline Paymium HD+', 3),
(1390, 'Ice Age Village Free+', 2),
(1395, 'Oregon Trail Paymium HD+', 4),
(1399, '2012 Real Soccer Free+', 3),
(1402, 'Uno Free HD+ (ad supported)', 5),
(1414, 'Monster Life Free+', 4),
(1430, 'Gang Domination HD+ GREE', 4),
(1436, 'The Amazing Spiderman Paymium HD+', 4),
(1481, 'Where is Wally Now HD+', 2),
(1494, 'The Dark Knight Rises Paymium HD+', 4),
(1507, 'Wonder Zoo Free+', 4),
(1511, '2013 Real Soccer Free+', 3),
(1514, 'NFL Pro 2013 Free+', 3),
(1526, 'Shark Dash FREE', 4),
(1547, 'Playmobil Pirates Free+', 2),
(1563, 'AMA Babel Rising 3D', 5),
(1571, 'GT Racing: Motor Academy Hyundai Free+', 3),
(1597, 'Modern Combat 4: Zero Hour Paymium HD+', 4),
(1599, 'Asphalt 7: Heat HD+', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
