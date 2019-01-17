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
-- Database: `emails`
--

-- --------------------------------------------------------

--
-- Table structure for table `validemails`
--

CREATE TABLE IF NOT EXISTS `validemails` (
  `cmails` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validemails`
--

INSERT INTO `validemails` (`cmails`) VALUES
('mattscalf@gmail.com\r\n'),
('Scalf@gmail.com'),
('Test2@gmail.com'),
(NULL),
('Test5@gmail.com\r\n'),
(NULL),
('Tes11@gmail.com\r\n'),
('Test9@gmail.com\r\n\r\n'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('mattshako@gmail.com'),
(''),
(''),
(''),
(''),
(''),
(''),
('please@gmail.com'),
('please2@gmail.com'),
('please2@gmail.com'),
('test100@gmail.com'),
('test50@gmail.com'),
('test50@gmail.com'),
(''),
('');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
