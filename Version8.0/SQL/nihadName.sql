-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2019 at 08:42 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) DEFAULT NULL,
  `model_id` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `store_id`, `model_id`) VALUES
(1, 10233, '27'),
(2, 10233, '13'),
(3, 10317, '26'),
(4, 10149, '4'),
(5, 10345, '6'),
(6, 10121, '26'),
(7, 10205, '14'),
(8, 10121, '2'),
(9, 10317, '22'),
(10, 10261, '12'),
(11, 10037, '10'),
(12, 10149, '6');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE IF NOT EXISTS `shoe` (
  `model_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `style` varchar(128) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `size` varchar(4) DEFAULT NULL,
  `color` varchar(128) DEFAULT NULL,
  `cost` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`model_id`, `style`, `gender`, `size`, `color`, `cost`) VALUES
(1, 'Basketball', 'm', '11.5', 'BLK', '100'),
(2, 'Sneaker', 'm', '10', 'BLBK', '89.99'),
(3, 'Sneaker', 'u', '10', 'BN', '119.99'),
(4, 'Sneaker', 'f', '4.5', 'PK', '76.99'),
(5, 'Sneaker', 'M', '9', 'BK', '34.99'),
(6, 'running', 'f', '4.5', 'OR', '68.99'),
(7, 'Sneaker', 'M', '13', 'BK', '89.99'),
(8, 'Sneaker', 'M', '10.5', 'TNWT', '69.99'),
(9, 'Basketball', 'M', '9', 'TNWT', '89.99'),
(10, 'sneaker', 'M', '11', 'WT', '29.99'),
(11, 'Sneaker', 'M', '10', 'BK', '51.99'),
(12, 'Boot', 'F', '7.5', 'BK', '29.99'),
(13, 'Sneaker', 'M', '9.5', 'BK', '79.99'),
(14, 'basketball', 'm', '11', 'WTBL', '124.99'),
(15, 'Sneaker', 'm', '13', 'RDWT', '79.99'),
(16, 'basketball', 'm', '14', 'BKGD', '179.99'),
(17, 'Sneaker', 'M', '10.5', 'BKWT', '99.99'),
(18, 'Sneaker', 'F', '7.5', 'WT', '25.99'),
(19, 'Sneaker', 'M', '10', 'BL', '35.99'),
(20, 'Sneaker', 'M', '13', 'BK', '119.99'),
(21, 'running', 'F', '6.5', 'bk', '59.99'),
(22, 'Basketball', 'M', '10.5', 'BKRD', '769.99'),
(23, 'Sneaker', 'M', '11.5', 'WTPK', '59.99'),
(24, 'Running', 'M', '9.5', 'BK', '64.99'),
(25, 'Basketball', 'M', '11.5', 'BLK', '119.99'),
(26, 'Basketball', 'M', '11', 'RDWT', '109.99'),
(27, 'running', 'M', '12', 'BK', '199.99'),
(28, 'sneaker', 'M', '7.5', 'OR', '29.99'),
(29, 'sneakers', 'm', '8.5', 'BKGNWT', '15.99'),
(30, 'Boot', 'M', '11.5', 'BN', '119.99'),
(34, 'Nihad', NULL, NULL, NULL, NULL),
(35, 'nihad', NULL, NULL, NULL, NULL),
(36, 'nihad', NULL, NULL, NULL, NULL),
(37, 'nihad1', NULL, NULL, NULL, NULL),
(38, 'Nihad', NULL, NULL, NULL, NULL),
(39, 'Nihad', NULL, NULL, NULL, NULL),
(40, 'Nihad', NULL, NULL, NULL, NULL),
(41, 'Nihad', NULL, NULL, NULL, NULL),
(42, 'nihad', NULL, NULL, NULL, NULL),
(43, 'test', NULL, NULL, NULL, NULL),
(44, 'test', NULL, NULL, NULL, NULL),
(45, 'test', NULL, NULL, NULL, NULL),
(46, '', NULL, NULL, NULL, NULL),
(47, 'test', NULL, NULL, NULL, NULL),
(48, 'Nihad', NULL, NULL, NULL, NULL),
(49, 'Nihad', NULL, NULL, NULL, NULL),
(50, 'Nihad', NULL, NULL, NULL, NULL),
(51, 'Nihad', NULL, NULL, NULL, NULL),
(52, 'Nihad', NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_info`
--

CREATE TABLE IF NOT EXISTS `store_info` (
  `store_id` int(11) DEFAULT NULL,
  `storename` varchar(128) DEFAULT NULL,
  `CITY` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_info`
--

INSERT INTO `store_info` (`store_id`, `storename`, `CITY`) VALUES
(10037, 'Famous Footwear', 'Shakopee'),
(10065, 'Target', 'Shakopee'),
(10093, 'Kohls', 'Shakopee'),
(10121, 'Foot Locker', 'Bloomington'),
(10149, 'Dick''s Sporting Goods', 'Burnsville'),
(10177, 'Sam''s Shoes', 'Pine Island'),
(10205, 'Kohls', 'Apple Valley'),
(10233, 'Famous Footwear', 'Farmington'),
(10261, 'Journeys', 'Minneapolis'),
(10289, 'Kohls', 'Bloomington'),
(10317, 'Target', 'Apple Valley'),
(10345, 'Payless', 'Burnsville');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
